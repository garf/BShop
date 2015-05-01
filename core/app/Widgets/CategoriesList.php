<?php

namespace App\Widgets;

use App\Models\Categories;
use App\Models\Products;
use Arrilot\Widgets\AbstractWidget;
use DB;

class CategoriesList extends AbstractWidget
{

    public function run()
    {
        $categories = DB::select("
            SELECT c.id, c.title, COUNT(p.id) AS num
            FROM categories c
            LEFT OUTER JOIN products p ON (c.id = p.category_id)
            WHERE c.active = '1' AND p.active = '1'
            GROUP BY c.id
        ");
        $data = [
            'categories' => $categories,
        ];
        return view(config('app.t') . '.widgets.categories')->with($data)->render();
    }
}