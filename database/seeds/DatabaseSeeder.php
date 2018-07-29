<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UserAdmin::class);
        $this->call(ImageSeeder::class);
        $this->call(SocialMediaList::class);
        $this->call(WeWorkSeeder::class);
        $this->call(AdminWework::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(ThemeSettingSeeder::class);
        $this->call(SettingContactSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(MessengerTypeSeeder::class);
        $this->call(MenuSeeder::class);
    }
}
