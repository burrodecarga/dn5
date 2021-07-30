<?php

namespace Database\Seeders;

use App\Models\Icon;
use App\Models\Image;
use App\Models\Item;
use App\Models\Subtema;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $json =File::get("database/data/iconos.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
         $icono = new Icon();
         $icono->clase = $obj->name;
         $icono->save();
        }

        $user=User::create([
            'name'  =>'Edwin Henriquez',
            'email' =>'ed@gmail.com',
            'password'=>bcrypt('123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

     $temas = \App\Models\Tema::factory(7)->create();

     foreach ($temas as $tema){
       Subtema::factory(2)->create([
           'tema_id' =>$tema->id,
       ]);
     }

     $subtemas = Subtema::all();

     foreach ($subtemas as $subtema){
         Item::factory(3)->create([
             'subtema_id' =>$subtema->id,
         ]);
       }

       Image::factory(10)->create();


    }

}
