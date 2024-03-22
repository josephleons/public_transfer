<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostsController extends Controller
{

    // configure access control
    public function __construct()
    {
        $this->middleware('auth',['except'=>['posts']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // $posts = Post::all();
        // return view('posts.index', ['posts'=>$posts]);

        $users = User::with('posts')->get();
        return view('posts.index', ['users' => $users]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('posts.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // dd($request->all());
        // $this->authorize('create',Post::class);
       
        $this->validate($request,[
                'title'=>'required',
                'photo'=>'image|nullable|max:1999',
                'location'=>'required',
                'Description'=>'required|max:100',
            
            ]);

            if($request->hasFile('photo')){
                // get filename to upload
                $filenameWithExt =$request->file('photo')->getClientOriginalName();
                // get just filename
                $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
                // GET JUST EXTENT
                $exten =$request->file('photo')->getClientOriginalExtension();
    
                // fileToSore
                $fileNameToStore = $Filename.'_'.time().'.'.$exten;
                $path=$request->file('photo')->storeAs('public/profile_image', $fileNameToStore);
    
            }else{
                $fileNameToStore ='noimage.jpeg';
            }
            
          
           
            $posts=new Post;
            $posts->title=$request->input('title');
            $posts->location=$request->input('location');
            $posts->Description=$request->input('Description');
            $posts->user_id=auth()->user()->id;
            $posts->photo=$fileNameToStore;
            $posts->save();
            
            return redirect('/posts/show')->with('success','Post Created, View Posts history');
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

        if (!auth()->check()) {
            // If not authenticated, redirect to the login page
            return redirect()->route('login');
        }
        $user_id=auth()->user()->id;
        $user = User::with('posts')->find($user_id);
        return view('posts.show', compact('user'));
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
        $this->validate($request,[
        //    if($status == 'paid'){
        //     $status ='paid'
        //    }
        
        ]);
        // create post
        $posts=Post::find($id);
        // $posts->status= $status;
        $posts->save();
        return redirect('/posts')->with('success','Post update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        // $company = new Company();
        // $result=$company->find($id);
        // $result->delete();

        // return redirect('/posts')->with('success' ,'Company Post remove');
        //
    }
   
}
