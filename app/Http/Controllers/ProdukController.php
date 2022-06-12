<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validate = $request->validate([
            'name_produk' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'image' => 'required',
        ]);

        Produks::create($validate);

        // retrun redirect()
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
        $rules = [
            'name_produk' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'image' => 'required',
        ];

        $validateData = $request->validate($rules);

        Produks::where('id', $id)
                ->update($validateData);

        // return redirect()
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produks::destroy($id);

        // return redirect()
    }
}
