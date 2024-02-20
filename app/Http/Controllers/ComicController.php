<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data= $request-> all();

        $new_comic = new Comic();
        $new_comic-> title = $form_data['title'];
        $new_comic-> description = $form_data['description'];
        $new_comic-> thumb = $form_data['thumb'];
        $new_comic-> price = $form_data['price'];
        $new_comic-> series = $form_data['series'];
        $new_comic-> sale_date = $form_data['sale_date'];
        $new_comic-> type = $form_data['type'];
        $new_comic-> artists= json_encode(explode(',', $form_data['artists']));
        $new_comic-> writers = json_encode(explode(',', $form_data['writers']));
        
        $new_comic-> save();

        return redirect()->route('comics.show', ['comic'=>$new_comic]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic= Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('comics.edit', compact('comic'));
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
        $form_data = $request-> all();

        $new_comic = Comic::find($id);
        $new_comic-> title = $form_data['title'];
        $new_comic-> description = $form_data['description'];
        $new_comic-> thumb = $form_data['thumb'];
        $new_comic-> price = $form_data['price'];
        $new_comic-> series = $form_data['series'];
        $new_comic-> sale_date = $form_data['sale_date'];
        $new_comic-> type = $form_data['type'];
        $new_comic-> artists= json_encode(explode(',', $form_data['artists']));
        $new_comic-> writers = json_encode(explode(',', $form_data['writers']));
        
        $new_comic-> update();

        return redirect()->route('comics.show', ['comic'=>$new_comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('comic.index')
    }
}
