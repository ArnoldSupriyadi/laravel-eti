<?php
use App\Models\Client;
use App\Models\CoreValue;
use App\Models\CompanyProfile;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\User;

$about = CompanyProfile::where('name', 'about')->first()->description;
$aboutImage = CompanyProfile::where('name', 'about_image')->first()->description;
$vision = CompanyProfile::where('name', 'vision')->first()->description;
$mission = CompanyProfile::where('name', 'mission')->first()->description;
$product = CompanyProfile::where('name', 'product_description')->first()->description;
$coreValues = CoreValue::all();
$clients = Client::all();

return [
    'menu_about' => 'About ETI',
    'menu_product' => 'Product & Service',
    'menu_contact' => 'Contact Us',
    'language' => 'language',
    'eti_profile' => 'eti profile',
    'commercial_defense' => 'eti profile',
    'explore' => 'explore',
    // ==========================
    // mainmenu
    'mainmenu_home' => 'home',
    'mainmenu_about' => 'about',
    'mainmenu_products' => 'products',
    'mainmenu_gallery' => 'gallery',
    'mainmenu_contact' => 'contact',
    // ==========================
    //about page
    'about_us' => 'About Us',
    'vision' => 'VISION',
    'mission' => 'MISSION',
    'work_partners' => 'WORK PARTNERS',
    'product_spec' => 'PRODUCT SPECIALIZATION',
    'comp_core_value' => 'Company Core Value',
    'lets_talk' => "let's talk",
    //about page - value
    'about_val' => $about,
    'vision_val' => $vision,
    'mission_val' => $mission,
    // ==========================
    //products page
    'product_service' => 'Product & Services',
    'more' => 'More',
    //products page - value
    'product_service_val' => $product,
    // ==========================
    //contact page
    'head_contact' => 'get in touch',
    'sub_contact' => 'always ready to work',
    'at' => 'at',
    'find_map' => 'find us on map',
    // ==========================
    //gallery page
    'head_gallery' => 'we do magic',
    'sub_gallery' => 'chase your passion',
    'all' => 'all',
    'commercial' => 'commercial',
    'defense' => 'defense',
];
