<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=1 ; $i<10 ; $i++ ){
            DB::table('tweets')->insert([
                'description' => 'description ' . $i,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                
            ]);
        }
    }
}
