<?php

namespace Thor\Models\Seeders;

use Thor\Platform\ThorFacade;

class LanguagesTableSeeder extends \Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('languages')->delete();

        $langclass = ThorFacade::modelClass('language');

        $langclass::create(array('name' => 'English', 'code' => 'en', 'locale' => 'en_US', 'is_active' => true,
            'sorting' => 1));
        $langclass::create(array('name' => 'Español', 'code' => 'es', 'locale' => 'es_ES', 'is_active' => true,
            'sorting' => 2));
        $langclass::create(array('name' => 'Deutsch', 'code' => 'de', 'locale' => 'de_DE', 'is_active' => true,
            'sorting' => 3));
    }

}
