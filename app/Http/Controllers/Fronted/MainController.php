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
        if ($request->isMethod('post')){
            if ($request->_type == 'data' && $request->_data == 'item'){
                $msg = Item::find($request->item_id);
                $msg->item_category = $msg->category->category_name;
                $msg->item_tag = $msg->tag('tag_name');
            }
            return response()->json($msg);
        }
        else {
            if ($request->item_sort == 'title' && $request->sort_by == 'asc'){
                $this->data['items'] = Item::orderBy('item_title', 'ASC')->paginate(12);
                $this->data['sortby'] = 'Name, A to Z';
            }
            elseif ($request->item_sort == 'title' && $request->sort_by == 'desc'){
                $this->data['items'] = Item::orderBy('item_title', 'DESC')->paginate(12);
                $this->data['sortby'] = 'Name, Z to A';
            }
            elseif ($request->item_sort == 'date' && $request->sort_by == 'asc'){
                $this->data['items'] = Item::orderBy('item_id', 'ASC')->paginate(12);
                $this->data['sortby'] = 'Sort By old';
            }
            elseif ($request->item_sort == 'date' && $request->sort_by == 'desc'){
                $this->data['items'] = Item::orderBy('item_id', 'DESC')->paginate(12);
                $this->data['sortby'] = 'Sort By new';
            }
            else{
                $this->data['items'] = Item::orderBy('item_id', 'ASC')->paginate(12);
                $this->data['sortby'] = 'Default';
            }
            return view('fronted.home', $this->data);
        }
    }

    public function item($id)
    {
        $this->data['meta'] = (object) [
            (object) ['name' => 'robot', 'content' => 'index, follow'],
            (object) ['name' => 'description', 'content' => 'Hmart-Smart Product eCommerce html Template']
        ];
        $item = Item::find($id);
        $item->item_image = $item->image();
        $item->item_tag = $item->tag('tag_name');
        $this->data['item'] = $item;
        $this->data['relate_item'] = Item::where('item_category', $item->item_category)->get();
        return view('fronted.item-detail', $this->data);
    }

    public function blog()
    {
        $this->data['meta'] = (object) [
            (object) ['name' => 'robot', 'content' => 'index, follow'],
            (object) ['name' => 'description', 'content' => 'Hmart-Smart Product eCommerce html Template']
        ];
        return view('fronted.blog', $this->data);
    }

    public function profile()
    {
        $this->data['meta'] = (object) [
            (object) ['name' => 'robot', 'content' => 'index, follow'],
            (object) ['name' => 'description', 'content' => 'Hmart-Smart Product eCommerce html Template']
        ];
        return view('fronted.profile', $this->data);
    }
}
