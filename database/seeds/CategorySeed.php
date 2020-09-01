<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('category')->insert([
            'title'       => rand(10),
            'description' => rand(20),
            'created_at'  => rand(10),
            'updated_at'  => rand(10),
        ]);
    }
}
