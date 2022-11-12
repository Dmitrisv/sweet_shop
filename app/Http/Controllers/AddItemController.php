<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;


class AddItemController extends Controller
{
    public function store(Request $request)
    {
        if(auth()->user()->is_root){
            $name_photo = $request->file('photo');
            $hashname=$name_photo->hashName();
            Item::query()->create([
                'title'=>$request->title,
                'price'=>$request->price,
                'contry'=>$request->contry,
                'count'=>$request->count,
                'image'=>$hashname,
                'category'=>$request->category,
                "ingredients"=>$request->ingredients
            ]);
            $name_photo->storeAs(
                'products',
                $hashname,
                'public',
            );
        }
    return redirect('/');
    }
}
