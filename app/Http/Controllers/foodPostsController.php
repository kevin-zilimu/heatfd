<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Foodpost;
use DB;
class foodPostsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $foodposts = Foodpost::orderBy('Created_at','desc')->paginate(10);
        return view('cookPosts.posts.index')->with('foodposts',$foodposts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('cookPosts.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Title'=>'required',
            'Description'=>'required',
            'Quantity'=>'required',
            'Price'=>'required',
            'Image1'=>'image|nullable|max:1999',
            'Image2'=>'image|nullable|max:1999',
            'Image3'=>'image|nullable|max:1999',
            'Image4'=>'image|nullable|max:1999',
            'User_Id'=>'required'
        ]);

        if($request->hasFile('Image1')){
            //get file name with extension
            $fileNameWithExt = $request->file('Image1')->getClientOriginalName();
            //get file Name
            $filename = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('Image1')->getClientOriginalExtension();

            //store file
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //store image
            $path = $request->file('Image1')->storeAs('public/cover_images',$fileNameToStore);

        }else{

            $fileNameToStore = 'noimage.jpg';
        }
        if($request->hasFile('Image2')){
            //get file name with extension
            $fileNameWithExt = $request->file('Image2')->getClientOriginalName();
            //get file Name
            $filename = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('Image2')->getClientOriginalExtension();

            //store file
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            //store image
            $path = $request->file('Image2')->storeAs('public/cover_images',$fileNameToStore2);

        }
        else{

            $fileNameToStore2 = 'noimage.jpg';
        }
        if($request->hasFile('Image3')){
            //get file name with extension
            $fileNameWithExt = $request->file('Image3')->getClientOriginalName();
            //get file Name
            $filename = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('Image3')->getClientOriginalExtension();

            //store file
            $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
            //store image
            $path = $request->file('Image3')->storeAs('public/cover_images',$fileNameToStore3);

        }
        else{

            $fileNameToStore3 = 'noimage.jpg';
        }
        if($request->hasFile('Image4')){
            //get file name with extension
            $fileNameWithExt = $request->file('Image4')->getClientOriginalName();
            //get file Name
            $filename = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('Image4')->getClientOriginalExtension();

            //store file
            $fileNameToStore4 = $filename.'_'.time().'.'.$extension;
            //store image
            $path = $request->file('Image4')->storeAs('public/cover_images',$fileNameToStore4);

        }
        else{

            $fileNameToStore4 = 'noimage.jpg';
        }

      $foodpost = new Foodpost;
      $foodpost->Title = $request->input('Title');
      $foodpost->Description = $request->input('Description');
      $foodpost->Quantity = $request->input('Quantity');
      $foodpost->Price = $request->input('Price');
      $foodpost->Image1 = $fileNameToStore;
      $foodpost->Image2 = $fileNameToStore2;
      $foodpost->Image3 = $fileNameToStore3;
      $foodpost->Image4 = $fileNameToStore4;
      $foodpost->User_Id = $request->input('User_Id');
      $foodpost->save();

      return redirect('/cookPosts')->with('success','Post Created');
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
        $foodposts = Foodpost::find($id);
        //check for correct user to Post
        if(auth()->user()->id !== $foodposts->User_Id)
        {
            return redirect('/cookPosts.posts')->with('error','Unauthorized Page'); 
        }
        return view('cookPosts.posts.edit')->with('foodposts',$foodposts);
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
            'Title'=>'required',
            'Description'=>'required',
            'Quantity'=>'required',
            'Price'=>'required',
            'Image1'=>'image|nullable|max:1999',
            'Image2'=>'image|nullable|max:1999',
            'Image3'=>'image|nullable|max:1999',
            'Image4'=>'image|nullable|max:1999',
            'User_Id'=>'required'
        ]);

        if($request->hasFile('Image1')){
            //get file name with extension
            $fileNameWithExt = $request->file('Image1')->getClientOriginalName();
            //get file Name
            $filename = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('Image1')->getClientOriginalExtension();

            //store file
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //store image
            $path = $request->file('Image1')->storeAs('public/cover_images',$fileNameToStore);

        }
        if($request->hasFile('Image2')){
            //get file name with extension
            $fileNameWithExt = $request->file('Image2')->getClientOriginalName();
            //get file Name
            $filename = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('Image2')->getClientOriginalExtension();

            //store file
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            //store image
            $path = $request->file('Image2')->storeAs('public/cover_images',$fileNameToStore2);

        }
        if($request->hasFile('Image3')){
            //get file name with extension
            $fileNameWithExt = $request->file('Image3')->getClientOriginalName();
            //get file Name
            $filename = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('Image3')->getClientOriginalExtension();

            //store file
            $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
            //store image
            $path = $request->file('Image3')->storeAs('public/cover_images',$fileNameToStore3);

        }
        if($request->hasFile('Image4')){
            //get file name with extension
            $fileNameWithExt = $request->file('Image4')->getClientOriginalName();
            //get file Name
            $filename = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('Image4')->getClientOriginalExtension();

            //store file
            $fileNameToStore4 = $filename.'_'.time().'.'.$extension;
            //store image
            $path = $request->file('Image4')->storeAs('public/cover_images',$fileNameToStore4);

        }
     
    $foodpost = Foodpost::find($id);
        $foodpost->Title = $request->input('Title');
        $foodpost->Description = $request->input('Description');
        $foodpost->Quantity = $request->input('Quantity');
        $foodpost->Price = $request->input('Price');
        if($request->hasFile('Image1')){
            $foodpost->Image1 = $fileNameToStore;
        }
        if($request->hasFile('Image2')){
            $foodpost->Image2 = $fileNameToStore2;
        }
        if($request->hasFile('Image3')){
            $foodpost->Image3 = $fileNameToStore3;
        }
        if($request->hasFile('Image4')){
            $foodpost->Image4 = $fileNameToStore4;
        }
     
        $foodpost->User_Id = $request->input('User_Id');
        $foodpost->save();

        

      return redirect('/cookPosts')->with('success','User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodpost = Foodpost::find($id);
        if($foodpost->Image1 != 'noimage.jpg'){

            Storage::delete('public/cover_images/'.$foodpost->Image1);
        }
        $foodpost->delete();
        return redirect('/cookPosts')->with('success','User Removed');
    }
}
