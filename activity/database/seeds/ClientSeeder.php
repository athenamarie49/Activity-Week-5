<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' =>'Kathryn',
                'address' =>'Bacong',
                'phone' =>'09232432342',
                'capitalization' =>29890,
                'loan' => 2000000
            ],
            [
                'name' =>'Sitaima',
                'address' =>'Korea',
                'phone' =>'09000000000',
                'capitalization' =>10909,
                'loan' => 23203
            ],
            [
                'name' =>'Sitaima',
                'address' =>'Korea',
                'phone' =>'09000000000',
                'capitalization' =>10909,
                'loan' => 23203
                
            ]
        ];

        foreach($data as $client){
            \App\Client::create($client);
        }

        }
}
