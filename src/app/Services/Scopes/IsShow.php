<?php namespace App\Services\Scopes;

trait IsShow {

    /**
     * モデルのため、IsShowトレイトを起動する
     *
     * @return void
     */
    public static function bootIsShow()
    {
        static::addGlobalScope(new IsShowScope);
    }
}