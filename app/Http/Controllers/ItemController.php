<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('item.index' , compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create' );
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


        Item::create($atribute);

        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('item.show' , compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('item.edit' , compact('item'));
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
        $item = Item::findOrFail($id);
        $atribute = $request->all();

        if($request->hasFile('image')){
            // lấy file image
            $image = base64_encode(file_get_contents($request->file('image')));
            $atribute['image'] = 'data:image/;base64,'.$image; //gán thêm đuôi
        }
        $item->update($atribute);

        return redirect()->route('item.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();


        return redirect()->route('item.index');

    }

    public function search(Request $request)

{

    $keyword = $request->keyword;

    if (!$keyword) {

        return redirect()->route('item.index');

    }

    $items = Item::where('name', 'LIKE', '%' . $keyword . '%')

        ->paginate();






    return view('item.index', compact('items'));


}



}
