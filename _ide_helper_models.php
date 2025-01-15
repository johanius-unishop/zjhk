<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string|null $patronymic
 * @property string $email
 * @property string|null $phone_number
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property int|null $is_admin
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $fio
 * @property-read mixed $user_roles
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePatronymic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withoutRole($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withoutTrashed()
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $article
 * @property int $product_id
 * @property int $analog_vendor_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\AnalogVendor|null $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|Analog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Analog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Analog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Analog whereAnalogVendorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analog whereArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analog whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analog whereUpdatedAt($value)
 */
	class Analog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $published
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalogVendor whereUpdatedAt($value)
 */
	class AnalogVendor extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $question_id
 * @property int $user_id
 * @property string $author
 * @property string $text
 * @property string $date_added
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereDateAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereUserId($value)
 */
	class Answer extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property int|null $order_column
 * @property string|null $body_description
 * @property string|null $short_description
 * @property int|null $published
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $front_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \RalphJSmit\Laravel\SEO\Models\SEO $seo
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Article published()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article search(string $search, bool $orderByWeight = true)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBodyDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 */
	class Article extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \Spatie\Sitemap\Contracts\Sitemapable, \Spatie\EloquentSortable\Sortable {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int|null $root_id
 * @property string|null $description
 * @property string|null $custom_title
 * @property int|null $order_column
 * @property string $slug
 * @property int $published
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection<int, Category> $children
 * @property-read int|null $children_count
 * @property-read \Kalnoy\Nestedset\Collection<int, Category> $childrens
 * @property-read int|null $childrens_count
 * @property-read mixed $front_url
 * @property-read mixed $can_deleted
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read Category|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \RalphJSmit\Laravel\SEO\Models\SEO $seo
 * @method static \Kalnoy\Nestedset\Collection<int, static> all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category fixTree($root = null)
 * @method static \Kalnoy\Nestedset\Collection<int, static> get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category ordered(string $direction = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category published()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category query()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category search(string $search, bool $orderByWeight = true)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereCustomTitle($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereDeletedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereDescription($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereName($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereNodeBetween($values, $boolean = 'and', $not = false, $query = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereOrderColumn($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category wherePublished($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereRootId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereSlug($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category withDepth(string $as = 'depth')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category withoutRoot()
 */
	class Category extends \Eloquent implements \Spatie\EloquentSortable\Sortable, \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $inn
 * @property string $name
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $charcode
 * @property string|null $numcode
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCharcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereNumcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyRate query()
 */
	class CurrencyRate extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $comment
 * @property int $published
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereUpdatedAt($value)
 */
	class DeliveryMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $eur_rate
 * @property string $usd_rate
 * @property string $gbp_rate
 * @property string $cny_rate
 * @property string $try_rate
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereCnyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereEurRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereGbpRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereTryRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereUsdRate($value)
 */
	class ExchangeRate extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $eur_rate
 * @property string $usd_rate
 * @property string $gbp_rate
 * @property string $cny_rate
 * @property string $try_rate
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereCnyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereEurRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereGbpRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereTryRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exchange_rate whereUsdRate($value)
 */
	class Exchange_rate extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $question
 * @property string|null $answer
 * @property int|null $order_column
 * @property int $published
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Faq published()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 */
	class Faq extends \Eloquent implements \Spatie\EloquentSortable\Sortable {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $text
 * @property int $App\Models\Article
 * @property int $sorting
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereApp\Models\Article($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereSorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $heading
 * @property string $text
 * @property string $logo
 * @property string $anons_text
 * @property int $visible
 * @property int $sorting
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace query()
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereAnonsText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereSorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketplace whereVisible($value)
 */
	class Marketplace extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $value
 
 * @property int $product_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty query()
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty whereProductId($value)
 
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OldProperty whereValue($value)
 */
	class OldProperty extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $order_number
 * @property string $order_date
 * @property int $received
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order_composition> $details
 * @property-read int|null $details_count
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $quantity
 * @property int $order_id
 * @property int $product_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $status
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_composition whereUpdatedAt($value)
 */
	class Order_composition extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $body_description
 * @property string|null $slug
 * @property int|null $order_column
 * @property int $active
 * @property int $protected
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $front_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \RalphJSmit\Laravel\SEO\Models\SEO $seo
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereBodyDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereProtected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent implements \Spatie\EloquentSortable\Sortable, \Spatie\MediaLibrary\HasMedia, \Spatie\Sitemap\Contracts\Sitemapable {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property string $article
 * @property string $short_description
 * @property string $body_description
 * @property string|null $barcode
 * @property float|null $supplier_price
 * @property float|null $price
 * @property float|null $special_price
 * @property int|null $pieces_per_pack
 * @property int|null $stock
 * @property int|null $minimum_stock
 * @property int|null $sorting
 * @property int|null $order_column
 * @property string|null $tn_ved
 * @property int|null $published
 * @property float|null $weight
 * @property float|null $width
 * @property float|null $height
 * @property float|null $length
 * @property float|null $package_weight
 * @property float|null $package_width
 * @property float|null $package_height
 * @property float|null $package_length
 * @property int $category_id
 * @property int $vendor_id
 * @property int $product_type_id
 * @property int $currency_id
 * @property int $chip_dip
 * @property int $elec_ru
 * @property int $ozon
 * @property int $ym
 * @property int $vi
 * @property int|null $priority
 * @property int|null $moq_supplier
 * @property int|null $composite_product
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Analog> $analogies
 * @property-read int|null $analogies_count
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product_composite_element> $complectationQuantity
 * @property-read int|null $complectation_quantity_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductCompositeElement> $composite
 * @property-read int|null $composite_count
 * @property-read \App\Models\Currency|null $currency
 * @property-read string $front_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Product> $parentComplectation
 * @property-read int|null $parent_complectation_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductPropertyValue> $product_property_values
 * @property-read int|null $product_property_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Property> $properties
 * @property-read int|null $properties_count
 * @property-read \RalphJSmit\Laravel\SEO\Models\SEO $seo
 * @property-read \App\Models\ProductType|null $type
 * @property-read \App\Models\Vendor|null $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|Product active()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product published()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product search(string $search, bool $orderByWeight = true)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBodyDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereChipDip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCompositeProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereElecRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMinimumStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMoqSupplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOzon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePackageHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePackageLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePackageWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePackageWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePiecesPerPack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSpecialPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSupplierPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTnVed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVendorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereYm($value)
 */
	class Product extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \Spatie\Sitemap\Contracts\Sitemapable {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_composite_element_id
 * @property int $product_id
 * @property int $product_element_id
 * @property string|null $deleted_at
 * @property int $quantity
 * @property-read \App\Models\Product|null $compositeProduct
 * @property-read \App\Models\ProductTypeCompositeElement|null $compositeType
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement whereProductCompositeElementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement whereProductElementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompositeElement whereQuantity($value)
 */
	class ProductCompositeElement extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $product_type_property_id
 * @property int|null $product_type_property_value_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\ProductTypeProperty|null $productTypeProperty
 * @property-read \App\Models\ProductTypePropertyValue|null $propertyValue
 * @property-read \App\Models\ProductTypePropertyValue|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue whereProductTypePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue whereProductTypePropertyValueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPropertyValue whereUpdatedAt($value)
 */
	class ProductPropertyValue extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $name_plural
 * @property int $composite
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductTypeCompositeElement> $composites
 * @property-read int|null $composites_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductTypeProperty> $old_props
 * @property-read int|null $old_props_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductTypeProperty> $props
 * @property-read int|null $props_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RelatedProductType> $relatedTypes
 * @property-read int|null $related_types_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereComposite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereNamePlural($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereUpdatedAt($value)
 */
	class ProductType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_type_id
 * @property string $name
 * @property int|null $order_column
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductType|null $completeProduct
 * @property-read \App\Models\ProductType|null $productType
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeCompositeElement whereUpdatedAt($value)
 */
	class ProductTypeCompositeElement extends \Eloquent implements \Spatie\EloquentSortable\Sortable {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int|null $order_column
 * @property int|null $product_type_id
 * @property int $section
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductTypePropertyValue> $newValues
 * @property-read int|null $new_values_count
 * @property-read \App\Models\ProductType|null $productType
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductTypePropertyValue> $values
 * @property-read int|null $values_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypeProperty whereUpdatedAt($value)
 */
	class ProductTypeProperty extends \Eloquent implements \Spatie\EloquentSortable\Sortable {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_type_property_id
 * @property string|null $value
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductTypeProperty|null $productTypeProperty
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue search(string $search, bool $orderByWeight = true)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue whereProductTypePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTypePropertyValue whereValue($value)
 */
	class ProductTypePropertyValue extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_composite_element_id
 * @property int $product_id
 * @property int $product_element_id
 * @property string|null $deleted_at
 * @property int $quantity
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element whereProductCompositeElementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element whereProductElementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_composite_element whereQuantity($value)
 */
	class Product_composite_element extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $feature_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature whereFeatureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_feature whereUpdatedAt($value)
 */
	class Product_feature extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property int $sorting
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image whereSorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_image whereUpdatedAt($value)
 */
	class Product_image extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $name_plural
 * @property int $composite
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $element
 * @property int $sorting
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductCompositeElement> $elements
 * @property-read int|null $elements_count
 * 
 */
	
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $sorting
 * @property int|null $order_column
 * @property int $section
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Property> $values
 * @property-read int|null $values_count
 */

}

namespace App\Models{
/**
 * 
 *
 */
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property string $model
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product_model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_model query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_model whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_model whereUpdatedAt($value)
 */
	class Product_model extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property string $pdf
 * @property int $product_pdf_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf wherePdf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf whereProductPdfTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf whereUpdatedAt($value)
 */
	class Product_pdf extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $pdf_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf_type query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf_type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf_type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf_type wherePdfType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product_pdf_type whereUpdatedAt($value)
 */
	class Product_pdf_type extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $value
 * @property int $product_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereValue($value)
 */
	class Property extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $value
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue search(string $search, bool $orderByWeight = true)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue whereValue($value)
 */
	class PropertyValue extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property string $author
 * @property string $text
 * @property string $date_added
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDateAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUserId($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $id_product
 * @property int $sorting
 * @property string $comment_1
 * @property string $comment_2
 * @property string $comment_3
 * @property int $product_id
 * @property int $related_product_type_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereComment1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereComment2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereComment3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereIdProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereRelatedProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereSorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProduct whereUpdatedAt($value)
 */
	class RelatedProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int|null $order_column
 * @property int $product_type_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RelatedProduct> $relatedProducts
 * @property-read int|null $related_products_count
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType query()
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelatedProductType whereUpdatedAt($value)
 */
	class RelatedProductType extends \Eloquent implements \Spatie\EloquentSortable\Sortable {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $id_product
 * @property int $sorting
 * @property string $comment_1
 * @property string $comment_2
 * @property string $comment_3
 * @property int $product_id
 * @property int $related_product_type_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereComment1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereComment2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereComment3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereIdProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereRelatedProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereSorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product whereUpdatedAt($value)
 */
	class Related_product extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int|null $order_column
 * @property int $product_type_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Related_product> $relatedProducts
 * @property-read int|null $related_products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type query()
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Related_product_type whereUpdatedAt($value)
 */
	class Related_product_type extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property string $author
 * @property string|null $advantages
 * @property string|null $limitations
 * @property string|null $comment
 * @property int $rating
 * @property string $date_added
 * @property int|null $public
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereAdvantages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereDateAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereLimitations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUserId($value)
 */
	class Review extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $review_id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Review_photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review_photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review_photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review_photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review_photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review_photo wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review_photo whereReviewId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review_photo whereUpdatedAt($value)
 */
	class Review_photo extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $group
 * @property string $name
 * @property int $locked
 * @property string $payload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $number
 * @property string $fio
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property int $delegate
 * @property string $birth_date
 * @property string $sex
 * @property int $user_group_id
 * @property int|null $company_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\UserGroup|null $group
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDelegate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserGroupId($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereUpdatedAt($value)
 */
	class UserGroup extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $short_name
 * @property int|null $order_column
 * @property string $slug
 * @property string|null $logo
 * @property string|null $description
 * @property string|null $country
 * @property string|null $delivery_time
 * @property string|null $warranty
 * @property int $published
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $front_url
 * @property-read mixed $can_be_deleted
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $product
 * @property-read int|null $product_count
 * @property-read \RalphJSmit\Laravel\SEO\Models\SEO $seo
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor published()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereDeliveryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereWarranty($value)
 */
	class Vendor extends \Eloquent implements \Spatie\EloquentSortable\Sortable, \Spatie\MediaLibrary\HasMedia {}
}

