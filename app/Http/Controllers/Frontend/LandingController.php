<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CoreValue;
use App\Models\CompanyProfile;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryGallery;
use App\Models\ProductType;
use App\Models\ProductTypeGallery;
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
        $clientWorkPartners = Client::where('status', 0)->get();
        $clientProductSpecializations = Client::where('status', 1)->get();
        $logoSecondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

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
            'clientWorkPartners' => $clientWorkPartners,
            'clientProductSpecializations' => $clientProductSpecializations,
            'logoSecondary' => $logoSecondary,
        ]);
    }

    public function products()
    {
        $locale = App::getLocale(); // Get the current locale
        $productDescription = CompanyProfile::where('name', 'product_description')->first()->description;
        $products = Product::all();
        $logoSecondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.index',
        [
            'productDescription' => $productDescription,
            'products' => $products,
            'logoSecondary' => $logoSecondary,
        ]);
    }

    public function categories(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::where('product_id', $id)->get();
        $logoSecondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.category.index',
            compact('product', 'categories', 'logoSecondary'));
    }

    public function productCategoryDetail(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $galleries = ProductCategoryGallery::where('category_id', $id)->get();
        $galleryCount = ProductCategoryGallery::where('category_id', $id)->count();
        $types = ProductType::where('category_id', $id)->get();
        $typeCount = ProductType::where('category_id', $id)->count();
        $logoSecondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        if ($typeCount == 0) {
            return view('pages.frontend.product.category.show',
                compact('category', 'galleries', 'galleryCount', 'logoSecondary'));

        } else {
            return view('pages.frontend.product.category.type.index',
                compact('category', 'types', 'galleryCount', 'logoSecondary'));
        }
    }

    public function productTypeDetail(string $id)
    {
        $type = ProductType::findOrFail($id);
        $galleries = ProductTypeGallery::where('type_id', $id)->get();
        $galleryCount = ProductTypeGallery::where('type_id', $id)->count();
        $logoSecondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;

        return view('pages.frontend.product.category.type.show',
            compact('type', 'galleries', 'galleryCount', 'logoSecondary'));
    }

    public function gallery()
    {
        $logoSecondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;
        $gallerySubtitle = CompanyProfile::where('name', 'gallery_subtitle')->first()->description;
        $galleryHeader = CompanyProfile::where('name', 'gallery_header')->first()->description;
        $gallerySubtitleIndo = CompanyProfile::where('name', 'gallery_subtitle')->first()->description_indo;
        $galleryHeaderIndo = CompanyProfile::where('name', 'gallery_header')->first()->description_indo;
        $galleries = Gallery::all();

        return view('pages.frontend.gallery.index',
        [
            'logoSecondary' => $logoSecondary,
            'gallerySubtitle' => $gallerySubtitle,
            'galleryHeader' => $galleryHeader,
            'gallerySubtitleIndo' => $gallerySubtitleIndo,
            'galleryHeaderIndo' => $galleryHeaderIndo,
            'galleries' => $galleries,
        ]);
    }

    public function contact()
    {
        $email = CompanyProfile::where('name', 'email')->first()->description;
        $phone = CompanyProfile::where('name', 'phone')->first()->description;
        $addressOne = CompanyProfile::where('name', 'address_one')->first()->description;
        $addressTwo = CompanyProfile::where('name', 'address_two')->first()->description;
        $logoSecondary = CompanyProfile::where('name', 'logo-secondary')->first()->description;
        $mapsOne = CompanyProfile::where('name', 'maps_one')->first()->description;
        $mapsTwo = CompanyProfile::where('name', 'maps_two')->first()->description;
        $waLink = CompanyProfile::where('name', 'wa_link')->first()->description;

        return view('pages.frontend.contact.index',
        [
            'email' => $email,
            'phone' => $phone,
            'addressOne' => $addressOne,
            'addressTwo' => $addressTwo,
            'mapsOne' => $mapsOne,
            'mapsTwo' => $mapsTwo,
            'waLink' => $waLink,
            'logoSecondary' => $logoSecondary,
        ]);
    }
}
