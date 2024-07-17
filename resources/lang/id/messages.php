<?php
use App\Models\Client;
use App\Models\CoreValue;
use App\Models\CompanyProfile;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\User;

$about = CompanyProfile::where('name', 'about')->first()->description_indo;
$aboutImage = CompanyProfile::where('name', 'about_image')->first()->description_indo;
$vision = CompanyProfile::where('name', 'vision')->first()->description_indo;
$mission = CompanyProfile::where('name', 'mission')->first()->description_indo;
$product = CompanyProfile::where('name', 'product_description')->first()->description_indo;
$coreValues = CoreValue::all();
$clients = Client::all();

return [
    'menu_about' => 'Tentang ETI',
    'menu_product' => 'Produk & Layanan',
    'menu_contact' => 'Hubungi Kami',
    'language' => 'bahasa',
    'eti_profile' => 'eti profil',
    'commercial_defense' => 'Komersial & Pertahanan',
    'explore' => 'jelajahi',
    // ==========================
    // mainmenu
    'mainmenu_home' => 'beranda',
    'mainmenu_about' => 'tentang',
    'mainmenu_products' => 'produk',
    'mainmenu_gallery' => 'galeri',
    'mainmenu_contact' => 'kontak',
    // ==========================
    // about page
    'about_us' => 'Tentang Kami',
    'vision' => 'VISI',
    'mission' => 'MISI',
    'work_partners' => 'MITRA KERJA',
    'product_spec' => 'SPESIALISASI PRODUK',
    'comp_core_value' => 'Nilai Inti Perusahaan',
    'lets_talk' => "mari berdiskusi",
    // about page - value
    'about_val' => $about,
    'vision_val' => $vision,
    'mission_val' => $mission,
    // ==========================
    //products page
    'product_service' => 'Produk & Layanan',
    'more' => 'Selengkapnya',
    //products page - value
    'product_service_val' => $product,
    // ==========================
    //contact page
    'head_contact' => 'hubungi kami',
    'sub_contact' => 'selalu siap bekerja',
    'at' => 'di',
    'find_map' => 'temukan kami di peta',
    // ==========================
    //gallery page
    'head_gallery' => 'kami melakukan sihir',
    'sub_gallery' => 'kejar minat Anda',
    'all' => 'semua',
    'commercial' => 'komersial',
    'defense' => 'pertahanan',
];
