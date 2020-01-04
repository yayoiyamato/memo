<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Memo\MemoEloquent;

class MemosController extends Controller
{
    /**
     * めも一覧
     *
     * @return View
     */
    public function index()
    {
        $view = view('front.pages.index')
                ->with('title','めも一覧')
                ->with('types',MemoEloquent::TYPES);
        return $view;
    }

    /**
     * めも詳細
     *
     * @param int 
     * @return View
     */
    public function detail($id)
    {
        $view = view('front.pages.detail')
                ->with('id', $id)
                ->with('title','めも詳細');
        return $view;
    }

    /**
     * カテゴリ
     *
     * @return View
     */
    public function categories()
    {
        $view = view('front.pages.categories')
                ->with('title','カテゴリ一覧');
        return $view;
    }

    /**
     * めも一覧（カテゴリ）
     *
     * @param int 
     * @return View
     */
    public function MemosInCategory($id)
    {
        $view = view('front.pages.memos_in_category')
                ->with('id', $id)
                ->with('title','カテゴリのめも一覧');
        return $view;
    }

    /**
     * めも新規追加
     *
     * @return View
     */
    public function add()
    {
        $view = view('front.pages.add')
                ->with('title','めも新規追加');
        return $view;
    }
}