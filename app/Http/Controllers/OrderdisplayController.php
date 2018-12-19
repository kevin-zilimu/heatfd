<?php

namespace App\Http\Controllers;

use App\Orderdisplay;
use App\Foodpost;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use DB;
class OrderdisplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderdisplays = Orderdisplay::orderBy('Created_at','desc')->paginate(3);
        return view('main')->with('orderdisplays',$orderdisplays);
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $food_Id=orderdisplays()->food_Id;
       // $orderdisplay = Orderdisplay::find($food_Id);
          //  if($orderdisplay->food_Id == $request->input('food_Id')){
           //     return redirect('/cookPosts')->with('danger','Post Already exist');
           // }
            $orderdisplay =new Orderdisplay;
            $orderdisplay->food_Id = $request->input('food_Id');
            $orderdisplay->save();
            
            return redirect('/cookPosts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orderdisplay  $orderdisplay
     * @return \Illuminate\Http\Response
     */
    public function show(Orderdisplay $orderdisplay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orderdisplay  $orderdisplay
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderdisplay $orderdisplay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orderdisplay  $orderdisplay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderdisplay $orderdisplay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orderdisplay  $orderdisplay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderdisplay $orderdisplay)
    {
        //
    }
}
