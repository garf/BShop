<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

    public static $_instance = null;
    protected $table = 'products';

    public static function inst()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Categories', 'category_id');
    }


}
