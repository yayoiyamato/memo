<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category\CategoryEloquent;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        CategoryEloquent::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'order' => 1,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'PHP',
            'slug' => 'php',
            'order' => 2,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'HTML',
            'slug' => 'html',
            'order' => 3,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'CSS',
            'slug' => 'css',
            'order' => 4,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'Javascript',
            'slug' => 'js',
            'order' => 5,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'Java',
            'slug' => 'java',
            'order' => 6,
            'is_show' => 0,
        ]);
        CategoryEloquent::create([
            'name' => '共通',
            'slug' => 'common',
            'order' => 7,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => '検索フォーム',
            'slug' => 'form',
            'order' => 8,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'Linux',
            'slug' => 'linux',
            'order' => 9,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'order' => 10,
            'is_show' => 0,
        ]);
        CategoryEloquent::create([
            'name' => 'Git',
            'slug' => 'git',
            'order' => 11,
            'is_show' => 1,
        ]);
    }
}
