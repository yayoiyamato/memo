<?php

namespace App\Models\MemoCategory;

use Illuminate\Database\Eloquent\Model;

class MemoCategoryEloquent extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'memo_category';

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
