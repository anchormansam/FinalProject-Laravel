<?php

use Illuminate\Database\Seeder;
use App\Plastic;

class PlasticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            $plastics = ['Champion', 'Star', 'DX', 'Pro', 'Tournament', 'VIP', 'Classic'];
            
            foreach($plastics as $plastic ){
                Plastic::create(['plastic'=> $plastic]);
            }
        
    }
}
