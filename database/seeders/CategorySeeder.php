<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'ICT', 'icon' => '🖥️', 'color' => 'blue'],
            ['name' => 'Security', 'icon' => '🔒', 'color' => 'red'],
            ['name' => 'Business', 'icon' => '💼', 'color' => 'green'],
            ['name' => 'Finance', 'icon' => '💰', 'color' => 'purple'],
        ];

        foreach ($categories as $cat) {
            Category::create([
                'name' => $cat['name'],
                'slug' => Str::slug($cat['name']),
                'icon' => $cat['icon'],
                'color' => $cat['color'],
            ]);
        }
    }
}
