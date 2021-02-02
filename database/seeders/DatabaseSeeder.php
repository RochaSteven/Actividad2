<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Level;
use App\Models\Perfil;
/* use App\Models\Location; */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Level::factory(10)->create();
        Perfil::factory(10)->create();
       /*  Location::factory(10)->create(); */

      /*   Perfil:: factory()->create(['nombre'=>'Perfil1','user_id'=>'1']);
        Perfil:: factory()->create(['nombre'=>'Perfil2','user_id'=>'2']);
        Perfil:: factory()->create(['nombre'=>'Perfil3','user_id'=>'3']); 
    
        Location::factory()->create(['country'=>'Ecuador']); 
        Location::factory()->create(['country'=>'Colombia']);
        Location::factory()->create(['country'=>'Chile' ]);
        
       */  
    }




}
