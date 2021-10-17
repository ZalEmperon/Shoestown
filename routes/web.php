<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ["title" => "Beranda"]);
});

Route::get('/about', function () {
    return view('about', ["title"=>"Tentang"]);
});

Route::get('/catalog', function () {
    $blog_post=[
        [
            "title"=>"Nella Monika",
            "author"=>"Nemoni",
            "isi"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quo, aliquid illo adipisci placeat laborum. Ratione rerum in quaerat, porro repellat dolor quas, quae reprehenderit non ipsam a facere hic explicabo, delectus adipisci voluptate earum harum suscipit. Magnam magni distinctio autem, cupiditate repellat repudiandae at nisi aspernatur exercitationem harum nemo non provident, tenetur culpa eius voluptatibus. Distinctio, dolor et. Voluptate repellat perspiciatis est alias porro sit modi libero quos maxime saepe? Adipisci quidem officiis rerum animi quo suscipit molestias eius?"
        ],
        [
            "title"=>"Nella Monarki",
            "author"=>"Nemono Mion",
            "isi"=>"Lorem Qui quo, aliquid illo adipisci placeat laborum. Ratione rerum in quaerat, porro repellat dolor quas, quae reprehenderit non ipsam a facere hic explicabo, delectus adipisci voluptate earum harum suscipit. Magnam magni distinctio autem, cupiditate repellat repudiandae at nisi aspernatur exercitationem harum nemo non provident, tenetur culpa eius voluptatibus. Distinctio, dolor et. Voluptate repellat perspiciatis est alias porro sit modi libero quos maxime saepe? Adipisci quidem officiis rerum animi quo suscipit molestias eius?"
        ]
    ];
    return view('catalog',[
        "nama" => "Nella Monika",
        "title" => "Katalog",
        "posts" => $blog_post
    ]);
});
