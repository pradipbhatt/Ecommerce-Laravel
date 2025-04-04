<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == 'admin') {
            return view('admin.home');
        } else {
            $data = Product::all(); // Fetch products for users
            return view('user.home', compact('data'));
        }
    }

    public function index()
    {
        if (Auth::check()) {
            return redirect('redirect');
        } else {
            $data = Product::paginate(6); // Fetch products with pagination (10 per page)
            return view('user.home', compact('data')); // Pass to the view
        }
    }
}
