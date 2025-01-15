<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles_company', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('patronymic', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('phone_number', 20);
            $table->enum('company_type', ['ip', 'ooo', 'ao'])->default('ooo')->comment('Тип компании: индивидуальный предприниматель, общество с ограниченной ответственностью, акционерное общество.');
            $table->string('company_name', 150)->comment('Наименование компании');
            $table->string('inn', 12)->comment('ИНН компании');
            $table->string('kpp', 9)->comment('КПП компании');
            $table->text('legal_address')->comment('Юридический адрес компании');
            $table->text('actual_address')->comment('Фактический адрес компании');
            $table->string('company_phone_number', 20)->comment('Контактный телефон компании');
            $table->string('bank_name', 150)->comment('Наименование банка');
            $table->string('bik', 9)->comment('БИК банка');
            $table->string('correspondent_account', 20)->comment('Корреспондентский счет');
            $table->string('account_number', 20)->comment('Расчетный счет');
            $table->text('additional_information')->nullable()->comment('Дополнительная информация о компании');
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles_company');
    }
};
