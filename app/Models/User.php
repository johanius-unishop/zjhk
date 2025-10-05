<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;


    protected $guard = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            foreach ($model->getFillable() as $field) {
                if (is_string($model->$field)) {
                    $model->$field = trim($model->$field);
                }
            }
        });
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    //проверка, что профиль заполнен

    public function group()
    {
        return $this->belongsTo(UserGroup::class, 'user_group_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function hasBoughtProduct(int $productId): bool
    {
        return $this->purchases()->where('product_id', $productId)->count() > 0;
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function isAdmin(): bool
    {
        return $this->group()->where('name', 'Администратор')->exists();
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
