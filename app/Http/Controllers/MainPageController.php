<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User_item;
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
        if(Auth::check()){
            $cart = auth()->user()->get_items_cart;
            return view('cart',compact('cart'));
        }
        else{
            return view("cart");
        }

    }
    public function addtocart(Request $request)
    {

        $cart = User_item::query()->create([
            'user_id'=>$request->product_id,
            'item_id'=>$request->product_id,
            'count'=>$request->count
            
        ]);
        return redirect()->intended('/');
    }


    public function about()
    {
        $posts = Item::all()->where('created_at','<=',now())->take(5);
        return view('about',compact('posts'));
    }

    public function locate()
    {
        return view('location');
    }

    public function editable(Request $request)
    {
        if(auth()->user()->is_root){
        $posts = Item::all();
        return view('editable',compact(['posts']));
        }        
    }

    public function edit(Request $request)
    {
        $item = Item::find($request->id);
        return view('edit',compact('item'));
    }    
    
    public function edit_item(Request $request)
    {
        $item = Item::find($request->id);
        $item->update([
                'title'=>$request->title,
                'price'=>$request->price,
                'contry'=>$request->contry,
                'count'=>$request->count,
                'category'=>$request->category,
                "ingredients"=>$request->ingredients
        ]);
        return redirect('/edit');
    }
    public function delete(Request $request)
    {
        $item = Item::find($request->id);
        $item->delete();
        return redirect('/edit');
    }
}
