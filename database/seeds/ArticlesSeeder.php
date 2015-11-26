<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 5; $i++) {
            $user = new App\Article();
            $user->title = "Titolo_$i";
            $user->post = "Descrizione_$i";
            $user->published_at = Carbon\Carbon::now();
            $user->save();
        }
    }

}
