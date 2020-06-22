<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\FundRaiser;
use App\Sponsor;


class PagesController extends Controller
{

    public function index(){

        $fundraisers = FundRaiser::orderby('id', 'asc')->paginate(12);
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3); 

        return view('index', compact('fundraisers',$fundraisers, 'blogs',$blogs));
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
    public function details(){

        return view('details');
    }


}
