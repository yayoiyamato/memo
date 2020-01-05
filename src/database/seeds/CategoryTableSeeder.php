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
            'type' => 'md',
            'order' => 1,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'PHP',
            'slug' => 'php',
            'type' => 'md',
            'order' => 2,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'HTML',
            'slug' => 'html',
            'type' => 'md',
            'order' => 3,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'CSS',
            'slug' => 'css',
            'type' => 'md',
            'order' => 4,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'Javascript',
            'slug' => 'js',
            'type' => 'md',
            'order' => 5,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'Java',
            'slug' => 'java',
            'type' => 'md',
            'order' => 6,
            'is_show' => 0,
        ]);
        CategoryEloquent::create([
            'name' => '共通',
            'slug' => 'common',
            'type' => 'sn',
            'order' => 7,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => '検索フォーム',
            'slug' => 'form',
            'type' => 'sn',
            'order' => 8,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'Linux',
            'slug' => 'linux',
            'type' => 'md',
            'order' => 9,
            'is_show' => 1,
        ]);
        CategoryEloquent::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'type' => 'md',
            'order' => 10,
            'is_show' => 0,
        ]);
        CategoryEloquent::create([
            'name' => 'Git',
            'slug' => 'git',
            'type' => 'md',
            'order' => 11,
            'is_show' => 1,
        ]);
    }
}
