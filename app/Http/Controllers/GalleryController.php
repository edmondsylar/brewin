<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Inline\Element\Strong;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // This is the authentication delcaration.
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.gallery')
            ->with('gallery', $gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return 'Restricted Route';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'image'=> 'required|image|mimes:jpeg,png,jpg,svg,gif|max:5000',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $up = new Gallery;
        $up->title = $request->input('title');
        $up->description = $request->input('description');
        $up->image = $imageName;
        
        if($up->save()){
            return back()
                ->with('success', 'You have successfully upload image.')
                ->with('image', $imageName);
        }
        return back()
            ->with('error', 'Somthing went wrong, Data not uploaded');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return 'restricted Route';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return 'Restricted Route';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return 'Restricted Route';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Gallery::where('id', $id)->delete();
        return back();
        //
    }
}
