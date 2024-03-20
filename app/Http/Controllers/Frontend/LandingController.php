<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CoreValue;
use App\Models\CompanyProfile;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class LandingController extends Controller
{
    public function index()
    {
        $aboutImage = CompanyProfile::where('name', 'about_image')->first()->description;
        $productImage = CompanyProfile::where('name', 'productservice_image')->first()->description;

        return view('pages.frontend.home.index',
        [
            'aboutImage' => $aboutImage,
            'productImage' => $productImage,
        ]);
    }

    public function about()
    {
        $about = CompanyProfile::where('name', 'about')->first()->description;
        $aboutImage = CompanyProfile::where('name', 'about_image2')->first()->description;
        $vision = CompanyProfile::where('name', 'vision')->first()->description;
        $mission = CompanyProfile::where('name', 'mission')->first()->description;
        $coreValues = CoreValue::all();
        $clients = Client::all();

        return view('pages.frontend.about.index',
        [
            'about' => $about,
            'aboutImage' => $aboutImage,
            'vision' => $vision,
            'mission' => $mission,
            'coreValues' => $coreValues,
            'clients' => $clients,
        ]);
    }

    public function products()
    {
        $productDescription = CompanyProfile::where('name', 'product_description')->first()->description;
        $products = Product::all();

        return view('pages.frontend.product.index',
        [
            'productDescription' => $productDescription,
            'products' => $products
        ]);
    }

    public function productCategory(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::where('product_id', $id)->get();

        return view('pages.frontend.product.productCategory', compact('product', 'categories'));
    }

    public function productsCategory()
    {
        return view('pages.frontend.product.category');
    }

     public function productsCategory2()
    {
        return view('pages.frontend.product.category2');
    }

    public function productDetail(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('pages.frontend.product.productDetail', compact('category'));
    }

    public function detailProduct()
    {
        return view('pages.frontend.product.detail');
    }

    public function gallery()
    {
        return view('pages.frontend.gallery.index');
    }

    public function contact()
    {
        $email = CompanyProfile::where('name', 'email')->first()->description;
        $phone = CompanyProfile::where('name', 'phone')->first()->description;
        $address = CompanyProfile::where('name', 'address_one')->first()->description;

        return view('pages.frontend.contact.index',
        [
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        ]);
    }
}
