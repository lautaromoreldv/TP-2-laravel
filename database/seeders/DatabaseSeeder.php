<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\Education;
use App\Models\About;
use App\Models\Hago;
use App\Models\Proskill;
use App\Models\Features;
use App\Models\Reviews;
use App\Models\Proyects;
use App\Models\Titulo;
use App\Models\Trabajo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(6)->create();
        Skill::factory(15)->create();
        Education::factory(18)->create();
        About::factory(10)->create();
        Hago::factory(10)->create();
        Proskill::factory(15)->create();
        Features::factory(15)->create();
        Reviews::factory(10)->create();
        Proyects::factory(10)->create();
        Titulo::factory(10)->create();
        Trabajo::factory(15)->create();
        
    }
}
