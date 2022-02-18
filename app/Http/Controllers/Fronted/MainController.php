<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product\Category;
use App\Models\Product\Item;
use App\Models\Product\Tag;
use App\Models\Setting;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data['company'] = Company::first();
        $this->data['setting'] = new Setting();
        $this->data['category'] = Category::orderBy('category_name', 'ASC')->get();
        $this->data['tag'] = Tag::orderBy('tag_name', 'ASC')->get();
    }

    public function home(Request $request)
    {
        $this->data['meta'] = (object) [
            (object) ['name' => 'robot', 'content' => 'index, follow'],
            (object) ['name' => 'description', 'content' => 'Hmart-Smart Product eCommerce html Template']
        ];
        $this->data['items'] = Item::orderBy('item_id', 'ASC')->paginate(12);

        if ($request->isMethod('post')){
            if ($request->_type == 'data' && $request->_data == 'item'){
                $msg = Item::find($request->item_id);
                $msg->item_category = $msg->category->category_name;
                $msg->item_tag = $msg->tag('tag_name');
            }
            return response()->json($msg);
        }
        else {
            return view('fronted.home', $this->data);
        }
    }
}
