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
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class LandingController extends Controller
{
    public function index()
    {
        $aboutImage = CompanyProfile::where('name', 'about_image')->first()->description;
        $productImage = CompanyProfile::where('name', 'productservice_image')->first()->description;
        $logo = CompanyProfile::where('name', 'logo')->first()->description;

        return view('pages.frontend.home.index',
        [
            'aboutImage' => $aboutImage,
            'productImage' => $productImage,
            'logo' => $logo,
        ]);
    }

    public function about()
    {
        $about = CompanyProfile::where('name', 'about')->first()->description;
        $aboutImage = CompanyProfile::where('name', 'about_image')->first()->description;
        $vision = CompanyProfile::where('name', 'vision')->first()->description;
        $mission = CompanyProfile::where('name', 'mission')->first()->description;
        $coreValues = CoreValue::all();
        $clients = Client::all();
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        // $coreValues = CoreValue::all()->map(function($coreValue) {
        //     return [
        //         'id' => $coreValue->id,
        //         'value' => __('coreval_name' . $coreValue->id)
        //     ];
        // });

        return view('pages.frontend.about.index',
        [
            'about' => $about,
            'aboutImage' => $aboutImage,
            'vision' => $vision,
            'mission' => $mission,
            'coreValues' => $coreValues,
            'clients' => $clients,
            'logo_secondary' => $logo_secondary,
        ]);
    }

    public function products()
    {
        $productDescription = CompanyProfile::where('name', 'product_description')->first()->description;
        $products = Product::all();
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.index',
        [
            'productDescription' => $productDescription,
            'products' => $products,
            'logo_secondary' => $logo_secondary,
        ]);
    }

    public function productCategory(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::where('product_id', $id)->get();
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.productCategory',
            compact('product', 'categories', 'logo_secondary'));
    }

    public function productsCategory()
    {
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.category',
        [
            'logo_secondary' => $logo_secondary,
        ]);
    }

     public function productsCategory2()
    {
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.category2',
        [
            'logo_secondary' => $logo_secondary,
        ]);
    }

    public function productDetail(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.productDetail', compact('category', 'logo_secondary'));
    }

    public function detailProduct()
    {
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.detail',
        [
            'logo_secondary' => $logo_secondary,
        ]);
    }

    public function gallery()
    {
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.gallery.index',
        [
            'logo_secondary' => $logo_secondary,
        ]);
    }

    public function contact()
    {
        $email = CompanyProfile::where('name', 'email')->first()->description;
        $phone = CompanyProfile::where('name', 'phone')->first()->description;
        $address = CompanyProfile::where('name', 'address_one')->first()->description;
        $logo_secondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.contact.index',
        [
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'logo_secondary' => $logo_secondary,
        ]);
    }
}
