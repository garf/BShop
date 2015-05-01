<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {

    public static $_instance = null;
    protected $table = 'categories';

    public static function inst()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function products()
    {
        return $this->hasMany('App\Models\Products', 'category_id');
    }

}
