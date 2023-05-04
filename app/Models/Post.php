<?php

namespace App\Models;



class Post{
    private static $blog_post = [[
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

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);

    }
};


