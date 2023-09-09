<?php

namespace Database\Seeders;

use App\Models\FruitCategory;
use App\Models\FruitItem;
use Illuminate\Database\Seeder;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = FruitCategory::create([
            'name' => "Apple"
        ]);
        $cat2 = FruitCategory::create([
            'name' => "Orange"
        ]);
        $cat3 = FruitCategory::create([
            'name' => "Pear"
        ]);
        $cat1->item()->create([
            'name' => "Apple 1",
            "price" => 20,
            "unit" => "Kg"
        ]);
        $cat2->item()->create([
            'name' => "Orange 1",
            "price" => 20,
            "unit" => "Kg"
        ]);
        $cat3->item()->create([
            'name' => "Pear 1",
            "price" => 20,
            "unit" => "Kg"
        ]);
        $cat1->item()->create([
            'name' => "Apple 2",
            "price" => 20,
            "unit" => "Kg"
        ]);
        $cat2->item()->create([
            'name' => "Orange 2",
            "price" => 20,
            "unit" => "Kg"
        ]);
        $cat3->item()->create([
            'name' => "Pear 2",
            "price" => 20,
            "unit" => "Kg"
        ]);
    }
}
