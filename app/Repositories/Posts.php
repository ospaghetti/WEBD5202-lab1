<?php

namespace App\Repositories;

use App\Models\Post;

use App\Redis;

class Posts

{
    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis= $redis;
    }
    public function all()
    {
        // return all posts
        // return Post::select()->get();
        return Post::all();
    }

    // public function find()
    // {

    // }
}
