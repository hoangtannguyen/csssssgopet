<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acce;
class AcceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $access = Acce::all();
        return view('access.index' , compact('access'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('access.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atribute = $request->all();

        if($request->hasFile('image')){
            // lấy file image
            $image = base64_encode(file_get_contents($request->file('image')));
            $atribute['image'] = 'data:image/;base64,'.$image; //gán thêm đuôi
        }
        // note : form create image phải có enctype="multipart/form-data"
         Acce::create($atribute);


        return redirect()->route('acce.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acce = Acce::findOrFail($id);
        return view('access.show' , compact('acce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acce = Acce::findOrFail($id);
        return view('access.edit' , compact('acce'));
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
        $acce =  Acce::findOrFail($id);
        $atribute = $request->all();

        if($request->hasFile('image')){
            // lấy file image
            $image = base64_encode(file_get_contents($request->file('image')));
            $atribute['image'] = 'data:image/;base64,'.$image; //gán thêm đuôi
        }
        // note : form create image phải có enctype="multipart/form-data"
         $acce->update($atribute);
        return redirect()->route('acce.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acce = Acce::findOrFail($id);
        $acce->delete();

        return redirect()->route('acce.index');
    }

    public function search(Request $request)
    {

        $keyword = $request->keyword;

        if(!$keyword){
            return redirect()->route('acce.index');
        }


        $access = Acce::where('name','LIKE','%' . $keyword . '%')->paginate();

        return view('access.index' , compact('access'));

    }

}
