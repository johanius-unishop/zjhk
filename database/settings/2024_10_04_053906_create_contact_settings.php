<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Тестовый');
        $this->migrator->add('general.site_logo_path', 'Тестовый');
        $this->migrator->add('general.site_active', true);
    }
};
