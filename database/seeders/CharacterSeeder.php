<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $characters = config('characters');

        foreach($characters['characters'] as $_character){

            $character = new Character;
            $character->name = $_character['name'];
            $character->description = $_character['description'];
            $character->attack = $_character['strength'];
            $character->defence = $_character['defence'];
            $character->speed = $_character['speed'];
            $character->life = $_character['life'];
            $character->type_id = $_character['type_id'];
            $character->save();

        };
    }
}
