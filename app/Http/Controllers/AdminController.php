<?php 
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data = new Product;
        
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('productimage'), $imagename);
            $data->image = $imagename;
        } else {
            return back()->with('error', 'Image upload failed!');
        }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_product()
    {
        $products = Product::all();
        return view('admin.show_product', compact('products'));
    }

    public function update_product($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }
        return view('admin.update_product', compact('product'));
    }
}
