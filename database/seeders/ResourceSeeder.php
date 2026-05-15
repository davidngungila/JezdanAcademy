<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    public function run(): void
    {
        $resources = [
            ['title' => 'CompTIA Security+ Study Guide', 'type' => 'PDF', 'size' => '4.2 MB', 'category' => 'Study Guide'],
            ['title' => 'Python Cheat Sheet – Beginner', 'type' => 'PDF', 'size' => '1.1 MB', 'category' => 'Study Guide'],
            ['title' => 'IT Project Plan Template', 'type' => 'XLSX', 'size' => '189 KB', 'category' => 'Template'],
            ['title' => 'Security Risk Assessment Form', 'type' => 'XLSX', 'size' => '245 KB', 'category' => 'Template'],
        ];

        foreach ($resources as $res) {
            Resource::create($res);
        }
    }
}
