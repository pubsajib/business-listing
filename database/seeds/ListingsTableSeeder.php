<?php
use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder {
    public function run() {
        factory(App\Listing::class, 40)->create();
    }
}
