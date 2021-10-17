<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Alert;
use App\Events\CreateProductEvent;
use App\Jobs\CreateProductJob;
use App\Mail\CreateProductMail;
use App\User;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $req)
    {
        $products = Product::all();
        return  view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->user_id = $request->user_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->isAvailable = true;
        $product->save();

        $user = User::all();
        CreateProductJob::dispatch($user, $product);
        CreateProductEvent::dispatch($product);

        return back();
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        Alert::success('Success!', 'Product Successfully Deleted');
        return back();
    }
}
