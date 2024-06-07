<?php

use App\Models\Client;
use App\Models\CoreValue;
use App\Models\CompanyProfile;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\User;

$about = CompanyProfile::where('name', 'about')->first()->description;
$aboutImage = CompanyProfile::where('name', 'about_image2')->first()->description;
$vision = CompanyProfile::where('name', 'vision')->first()->description;
$mission = CompanyProfile::where('name', 'mission')->first()->description;
$coreValues = CoreValue::all();
$clients = Client::all();

return [
    'menu_about' => 'About ETI',
    'menu_product' => 'Product & Service',
    'explore' => 'explore',
    'about_us' => 'About Us',
    'vision' => 'VISION',
    'mission' => 'MISSION',
    'work_partners' => 'WORK PARTNERS',
    'product_spec' => 'PRODUCT SPECIALIZATION',
    'comp_core_value' => 'Company Core Value',
    'lets_talk' => "ayo bicara",
    //about page value
    'about_val' => $about,
    'vision_val' => $vision,
    'mission_val' => $mission,

];
