<?php


namespace App\Http\Controllers;


class PostsController
{
    public function show($post)
    {
        $posts = [
        'first-post' => 'First post text',
        'second-post' => 'Second post text here'
    ];

    if (! array_key_exists($post,$posts)){
        abort(404,' Sorry, no post available.');
    }

    return view('post',[
        'post' => $posts[$post]
    ]);
    }

}
