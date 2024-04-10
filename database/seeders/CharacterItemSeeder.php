<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CharacterItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $characters = Character::all();
        $items = Item::all()->pluck('id');


        foreach($characters as $character){
            $character->items()->syncWithPivotValues( $faker->randomElements($items, 1), ['quantity'=>$faker->randomElement()]);
            
        };
    }
}
