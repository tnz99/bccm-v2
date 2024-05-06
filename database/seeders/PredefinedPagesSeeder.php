<?php

namespace Database\Seeders;

use App\Models\NewPage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PredefinedPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = ['Home', 'About Us', 'News and Events', 'Contact', 'Story', 'Donate'];

        foreach ($pages as $page) {
            NewPage::create(['page_title' => $page]);
        }
    }
}
