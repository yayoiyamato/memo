<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use App\Services\Scopes\IsShow;

class CategoryEloquent extends Model
{
    use IsShow;

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
    protected $fillable = ['name', 'slug', 'order', 'is_show'];

    /**
     * 属性に対するモデルのデフォルト値
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * 多対多 めも
     */
    public function memos()
    {
        return $this->belongsToMany('App\Models\Memo\MemoEloquent', 'memo_category', 'category_id', 'memo_id');
    }
}
