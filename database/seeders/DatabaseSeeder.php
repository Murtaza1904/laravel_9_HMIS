<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Language;
use App\Models\PatientId;
use App\Models\Religion;
use App\Models\Relationship;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create();
        Country::factory(230)->create();
        City::factory(500)->create();
        State::factory(50)->create();
        Language::factory(183)->create();
        Religion::factory(43)->create();
        Relationship::factory(30)->create();
        PatientId::factory(1)->create();
    }
}
