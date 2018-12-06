<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<9 ; $i++){
            factory(\App\Service::class)->create([
                'categorie_id' => Categorie::inRandomOrder()->first()->id
            ]);   
        }
        
    }
}
