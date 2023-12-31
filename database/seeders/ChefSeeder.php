<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Randy Walker',
                'image' => 'images/chefs-01.jpg',
                'task' => 'Pastry Chef',
                'facebook' => 'example',
                'twitter' => 'example',
                'instagram' => 'example',
            ],
            [
                'name' => 'David Martin',
                'image' => 'images/chefs-02.jpg',
                'task' => 'Cookie Chef',
                'facebook' => 'example',
                'twitter' => 'example',
                'instagram' => 'example',
            ],
            [
                'name' => 'Peter Perkson',
                'image' => 'images/chefs-03.jpg',
                'task' => 'Pancake Chef',
                'facebook' => 'example',
                'twitter' => 'example',
                'instagram' => 'example',
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Chef::create($item);
        }
    }
}