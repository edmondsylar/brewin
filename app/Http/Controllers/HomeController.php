<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FundRaiser;
use App\Blog;
use App\Sponsor;
use App\Gallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        $fundraiser = FundRaiser::orderBy('id', 'desc')->paginate(10);
        $sponser = Sponsor::orderBy('id', 'desc')->paginate(10);

        return view('home', compact(
            'blogs', $blogs,
            'fundraiser', $fundraiser,
            'sponser', $sponser
        ));
    }

    public function gallery()
    {
        $slider = Gallery::orderBy('id', 'desc')->take(15);

        return view('gallery')
            ->with('slider', $slider);
    }

    public function all(){

        return view('admin.all');
    }

    public function createBlog(Request $request){

        $blog = new Blog;

        $image = $request->file('image');
        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        $blog->image= $request->input('image');
        $blog->title= $request->input('title');
        $blog->content= $request->input('content');
        $blog->save();
        return redirect('/all');
    }

    public function sponser(Request $request){

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $sponser = new Sponsor;
        $sponser->name = $request->input('name');
        $sponser->image = $imageName;
        $sponser->description = $request->input('description');
        
        if($sponser->save()){
            return redirect('/sponsers');
        }else{

        }
        
    }

    public function fund(Request $request){

        $fund = new FundRaiser;
        $fund->title = $request->input('title');
        $fund->donation = $request->input('donation');
        $fund->description = $request->input('description');


        return redirect('/all');
    }


}
