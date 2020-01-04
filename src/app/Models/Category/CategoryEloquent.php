<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class CategoryEloquent extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * 割り当て可能な属性
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * 属性に対するモデルのデフォルト値
     *
     * @var array
     */
    protected $attributes = [];
}
