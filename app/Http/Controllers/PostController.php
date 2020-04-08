<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Auth;
// use Illuminate\Http\Concerns\InteractsWithInput;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }


    public function index()
    {
        return view('post.index')
                ->with('posts', Post::orderBy('created_at', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'post_title' => 'required|max:255',
            'post_body' => 'required',
            'post_img' => 'image'
        ]);

        



        // dd($request);

        // $request->has
        if($request->hasFile('post_img')){
            $post_img = $request->post_img;


            // dd($post_img);

            // dd($request->request);
            $post_img_new_name = time() . $post_img->getClientOriginalName();
    
            $post_img->move('uploads/posts', $post_img_new_name);



            Post::create([
                'post_title' => $request->post_title,
                'post_body' => $request->post_body,
                'post_img' => 'uploads/posts/'.$post_img_new_name,
                'code' => $request->code,
                'poster_id' => Auth::user()->id,
                'poster_name' => Auth::user()->name,
                'slug' => str_replace(' ', '-', $request->post_title)
            ]);
        }else {

            // dd($request->post_img);
            Post::create([
                'post_title' => $request->post_title,
                'post_body' => $request->post_body,
                // 'post_img' => 'uploads/posts'.$post_img_new_name,
                'code' => $request->code,
                'poster_id' => Auth::user()->id,
                'poster_name' => Auth::user()->name,
                'slug' => str_replace(' ', '-', $request->post_title)
            ]);
        }

        // str_repla    

        Session::flash('success', 'Post Created Successfully');


        return redirect()->route('posts');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
