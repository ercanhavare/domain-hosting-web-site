<?php

use Illuminate\Database\Seeder;

class PacketNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PacketName::create([
            'packet_name' => 'Kurumsal Firma Scripti'
        ]);


        \App\PacketName::create([
            'packet_name' => 'Rent a Car Scripti'
        ]);


        \App\PacketName::create([
            'packet_name' => 'Nakliyat Scripti'
        ]);


        \App\PacketName::create([
            'packet_name' => 'Restaurant - Cafe - Lokanta'
        ]);
    }
}
