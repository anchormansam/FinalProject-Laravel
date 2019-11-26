<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['Innova', 'Westside', 'Prodigy', 'Latitude64', 'DynamicDisc', 'Discraft', 'Mvp'];
        
        foreach($brands as $brand ){
            Brand::create(['brand'=> $brand]);
        }
    
    }
}