<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\FundRaiser;
use App\Sponsor;
use App\Gallery;


class PagesController extends Controller
{

    public function index(){

        $fundraisers = FundRaiser::orderby('id', 'asc')->paginate(12);
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);
        $slider = Gallery::all()->take(10);

        return view('index')
            ->with('slider', $slider)
            ->with('fundraisers', $fundraisers)
            ->with('blogs', $blogs);

    }

    public function gallery(){
        
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(10);
        $slider = Gallery::all();
        return view('gallery')
            ->with('gallery', $gallery)
            ->with('slider', $slider);
    }

    
    public function about(){
        
        $sponsers = Sponsor::all();
        return view('about', compact('sponsers', $sponsers));
    }

    public function news(){

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(9);  
        
        return view('news')->with('blogs', $blogs);
    }

    public function contact(){
        
        return view('contact');
    }

    public function donate(){
        
        return view('donate');
    }
    public function details($id){
        $post = Blog::find($id);
        
        return view('details')
            ->with('post', $post);
    }


}
