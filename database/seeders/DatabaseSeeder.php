<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'HistoricTrails',
            'email' => 'history@gmail.com',
            'password' => bcrypt ('1234')
        ]);

        Article::create([
            'judul' => 'Lawang Sewu',
            'kategori' => 'Bangunan Bersejarah',
            'deskripsi' => 'djdggdkhdididh',
            'foto' => ''
        ]);
    }
}
