<?php

use Illuminate\Database\Seeder;
use App\Pasta;

class PastasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paste = config('pasta');
        foreach($paste as $pasta) {
        $new_pasta = new Pasta();
        $new_pasta->title = $pasta['titolo'];
        $new_pasta->description = $pasta['descrizione'];
        $new_pasta->cocking_time = $pasta['cottura'];
        $new_pasta->type = $pasta['tipo'];
        $new_pasta->wheight = $pasta['peso'];
        $new_pasta->save();
        }
    }
}
