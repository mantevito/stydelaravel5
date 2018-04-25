<?php

use App\Profession;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$professions = DB::select('SELECT id FROM professions WHERE title= ? LIMIT 0,1', ["Desarrollador back-end"]);

        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        factory(User::class)->create([
            'email' => 'j.mantecon@mante.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id' => $professionId
        ]);

        factory(User::class, 48)->create();
    }
}
