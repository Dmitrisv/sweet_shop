<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainPageController extends Controller
{
    public function index(Request $request){
        $posts = Item::all()->where('count',">",0);

        $query = Item::query();

        if($request->filled('category')){
            $posts = Item::all()->where('category','=',$request->category);
        }
        if($request->filled('sort_by')){
            $posts = $posts->sortBy($request->sort_by);
        }
        return view('main',compact(['posts']));
    }
    public function profile()
    {
        $user = Auth::user();

        return view('profile',compact('user'));
    }

    public function viewproduct(Request $request)
    {
        $item = Item::find($request->id);
        return view('product',compact('item'));
    }

    public function cart()
    {
        $cart = auth()->user()->get_items_cart;
        return view('cart',compact('cart'));
    }
}
