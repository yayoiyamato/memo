<?php

namespace App\Models\Memo;

use Illuminate\Database\Eloquent\Model;

class MemoEloquent extends Model
{

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'memos';

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
