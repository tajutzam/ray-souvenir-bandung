<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoryProduct;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Testimonie;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }


    public function about()
    {
        return view('about');
    }

    public function product(Request $request)
    {
        $products = Product::query()
            ->when($request->search, function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            })
            ->when($request->category, function ($q) use ($request) {
                $q->where('category_product_id', $request->category);
            })
            ->when($request->min_price, function ($q) use ($request) {
                $q->where('price', '>=', $request->min_price);
            })
            ->when($request->max_price, function ($q) use ($request) {
                $q->where('price', '<=', $request->max_price);
            })
            ->latest()
            ->paginate(9);

        $categories = CategoryProduct::all();
        return view('product', compact('categories', 'products'));
    }

    public function contact()
    {
        return view('contact');
    }


    public function show(Product $product)
    {
        $product->load('links', 'category');
        return view('product-detail', compact('product'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();

        return view('gallery', compact('galleries'));
    }


    public function detailBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('detail-blog', compact('blog'));
    }


    public function blogs()
    {
        $blogs = Blog::latest()->paginate(5);

        return view('blogs', compact('blogs'));
    }


    public function testimoni()
    {
        $testimonies = Testimonie::all();
        return view('testimonies', compact('testimonies'));
    }

}
