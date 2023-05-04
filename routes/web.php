<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => 'Home'
    ]);
});


Route::get('/about', function () {
    return view('about',[
        "name" => "Cepi Yoga Asmara",
        "email" => "cepiyoga@gmail.com",
        "image" => "cepi.jpg",
        "title" => 'About'
    ]);
});



Route::get('/blog', function () {
    $blog_post = [[
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Cepi Yoga Asmara",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officiis non modi accusantium omnis dolore, delectus nulla ab necessitatibus provident ipsam quos dolor, animi blanditiis ad, et dolores eligendi ipsum sunt odio natus mollitia sit vel nostrum. Omnis dignissimos veritatis velit expedita officia cupiditate quisquam, fugit possimus? Delectus facilis fugiat nobis voluptatem, vel quas aperiam at atque amet molestias reiciendis repudiandae minus, architecto veritatis, dolorem suscipit error laudantium quis? Quo quas consequuntur eius nisi dolor dolorem quos neque adipisci officia?"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Naufal Yoga",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem reprehenderit in pariatur! Quis dignissimos eius facilis iure itaque omnis iusto esse blanditiis numquam ducimus, nulla ullam fuga fugit, fugiat nobis pariatur, et exercitationem necessitatibus. Nobis, illo, ullam atque harum accusamus culpa non debitis deserunt, reprehenderit ex adipisci? Nesciunt perspiciatis itaque perferendis obcaecati blanditiis quod qui, voluptatum dolorum doloremque non consequatur maiores laboriosam facilis totam, veniam recusandae suscipit ratione! Sit magni suscipit mollitia animi incidunt nam unde odio omnis optio nulla. Impedit, deleniti totam! Consectetur, consequatur maxime neque, accusamus reprehenderit sunt iste doloribus veritatis quo molestias perspiciatis magni dolore dolor laboriosam."
    ]];

    return view('posts',[
        "title" => 'Blog',
        "posts" => $blog_post
    ]);
});


Route::get('post/{slug}',function($slug){
    $blog_post = [[
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Cepi Yoga Asmara",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officiis non modi accusantium omnis dolore, delectus nulla ab necessitatibus provident ipsam quos dolor, animi blanditiis ad, et dolores eligendi ipsum sunt odio natus mollitia sit vel nostrum. Omnis dignissimos veritatis velit expedita officia cupiditate quisquam, fugit possimus? Delectus facilis fugiat nobis voluptatem, vel quas aperiam at atque amet molestias reiciendis repudiandae minus, architecto veritatis, dolorem suscipit error laudantium quis? Quo quas consequuntur eius nisi dolor dolorem quos neque adipisci officia?"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Naufal Yoga",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem reprehenderit in pariatur! Quis dignissimos eius facilis iure itaque omnis iusto esse blanditiis numquam ducimus, nulla ullam fuga fugit, fugiat nobis pariatur, et exercitationem necessitatibus. Nobis, illo, ullam atque harum accusamus culpa non debitis deserunt, reprehenderit ex adipisci? Nesciunt perspiciatis itaque perferendis obcaecati blanditiis quod qui, voluptatum dolorum doloremque non consequatur maiores laboriosam facilis totam, veniam recusandae suscipit ratione! Sit magni suscipit mollitia animi incidunt nam unde odio omnis optio nulla. Impedit, deleniti totam! Consectetur, consequatur maxime neque, accusamus reprehenderit sunt iste doloribus veritatis quo molestias perspiciatis magni dolore dolor laboriosam."
    ]];

   $new_post=[];

    foreach ($blog_post as $post) {

        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title"=>"Single Post",
        "post" => $new_post
    ]);
});