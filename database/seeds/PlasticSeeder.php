<?php

use Illuminate\Database\Seeder;
use App\Plastic;
use App\Brand;
use Faker\Generator as Faker;

class PlasticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        
        $plastics = [
            'Unknown',
            // Innova
            'STAR','STARLITE','ECHO','GSTAR','CHAMPION','METAL FLAKE','BLIZZARD',
            'XT','DRIVER PRO','KC PRO','R-PRO','JK PRO','DX','Champion Edition',
            // Dynamic Disc
            'Fuzion','BioFuzion','Fluid','Hybrid','Moonshine','Lucid','Lucid Air',
            'Classic','Classic Blend','Classic Soft','Prime',
            // Westside Disc
            'Tournament','Muovi R','Elasto','Hybrid','Moonshine','VIP','VIP Air',
            'BT Hard','BT Medium','BT Soft','Origio',
            // Latitude 64
            'Gold Line','Recycled','Frost Line','Hybrid','Moonshine','Opto','Opto Air',
            'Zero Hard','Zero Medium','Zero Soft','Retro',
            
            
        ];
        
        foreach($plastics as $plastic ){
            $brand = Brand::all()->pluck('id')->random();
        Plastic::create(['plastic'=> $plastic,
        'brand_id' => $brand
        ]);
        
            }
                // return [
                //     'brand_id' => $faker->randomElement($brand),
                // ];
    }
}