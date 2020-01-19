<?php

namespace App\Models\Memo;

use Illuminate\Database\Eloquent\Model;
use App\Services\Scopes\IsShow;

class MemoEloquent extends Model
{
    use IsShow;


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
    protected $fillable = ['title', 'type', 'text', 'is_show'];

    /**
     * 属性に対するモデルのデフォルト値
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * 多対多 カテゴリ
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category\CategoryEloquent', 'memo_category', 'memo_id', 'category_id');
    }

    /**
     * カテゴリのnameたちをカンマ区切りで返却
     *
     * @return string
     */
    public function getCategoryNamesAttribute()
    {
        $category_names = [];
        foreach ($this->categories as $category) {
            $category_names[] = $category->name;
        }
        return implode(', ', $category_names);
    }
    
}
