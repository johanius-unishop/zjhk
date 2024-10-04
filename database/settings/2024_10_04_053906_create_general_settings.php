<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.phone', 'Тестовый');
        $this->migrator->add('contact.phone2', 'Тестовый');
        $this->migrator->add('contact.email', 'Тестовый');
        $this->migrator->add('contact.address', 'Тестовый');
        $this->migrator->add('contact.address2', 'Тестовый');
        $this->migrator->add('contact.telegram', 'Тестовый');
        $this->migrator->add('contact.whatsup', 'Тестовый');
        $this->migrator->add('contact.skype', 'Тестовый');
        $this->migrator->add('contact.map', 'Тестовый');

    }
};
