<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{

    public function index()
    {

//        Tag::all();

//        $tags = Tag::chunk(10000, function ($posts) {
//            //do something with $tags
//        });


        return 'done';


//       Benchmark::dd([
//           'post get'=> fn()=> Post::get(),
//           'post count'=> fn()=> Post::count(),
//       ]);

    }

    public function livewire()
    {
        return view('main');
    }
}
