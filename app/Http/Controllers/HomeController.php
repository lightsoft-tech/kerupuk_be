<?php

namespace App\Http\Controllers;

use App\Models\DescriptionHome;
use App\Models\Jumbotrons;
use App\Models\ProdukHome;
use App\Models\SuggestionHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit($id)
    {

    }
    // update description home
    public function updateDescription(Request $request, $id)
    {
        $rules = [
            'description' => 'required|max:255',
        ];

        $validateData = $request->validate($rules);

        DescriptionHome::where('id', $id)
                ->update($validateData);
    }
    // update jumbotron image
    public function createJumbotron(Request $request)
    {
        $rules = [
            'image_jumbotron' => 'image',
        ];

        $validateData = $request->validate($rules);

        $date = date('H-i-s');
        $random = \Str::random(5);
        $image = request('image_jumbotron');
        $path = public_path("upload/home/" . $date . $random . $image);
        try {
            unlink($path);
        } catch (\Throwable $th) {
        } finally {
            $request->file('image')->move('upload/home/', $date . $random . $request->file('image_jumbotron')->getClientOriginalName());
            $rules['image_jumbotron'] = $date . $random . $request->file('image_jumbotron')->getClientOriginalName();
        }

        Jumbotrons::create($validateData);
    }
    // public function updateJumbotron(Request $request, $id)
    // {
    //     $rules = [
    //         'image_jumbotron' => 'image',
    //     ];

    //     $validateData = $request->validate($rules);

    //     DescriptionHome::where('id', $id)
    //             ->update($validateData);
    // }
    public function destroyJumbotron($id)
    {
        $jumbotron = Jumbotrons::findOrFail($id);
        $path = public_path("upload/home/" . $jumbotron->image);
        unlink($path);
        Jumbotrons::destroy($id);

        // return redirect()
    }
    // update produk image
    public function createProduk(Request $request)
    {
        $rules = [
            'image_produk' => 'image',
        ];

        $validateData = $request->validate($rules);

        $date = date('H-i-s');
        $random = \Str::random(5);
        $image = request('image_produk');
        $path = public_path("upload/home/" . $date . $random . $image);
        try {
            unlink($path);
        } catch (\Throwable $th) {
        } finally {
            $request->file('image')->move('upload/home/', $date . $random . $request->file('image_produk')->getClientOriginalName());
            $rules['image_produk'] = $date . $random . $request->file('image_produk')->getClientOriginalName();
        }

        ProdukHome::create($validateData);
    }
    public function destroyProduk($id)
    {
        $produk = ProdukHome::findOrFail($id);
        $path = public_path("upload/home/" . $produk->image);
        unlink($path);
        ProdukHome::destroy($id);

        // return redirect()
    }
    // update suggestion image
    public function createSuggestion(Request $request)
    {
        $rules = [
            'image_suggestion' => 'image',
        ];

        $validateData = $request->validate($rules);

        $date = date('H-i-s');
        $random = \Str::random(5);
        $image = request('image_suggestion');
        $path = public_path("upload/home/" . $date . $random . $image);
        try {
            unlink($path);
        } catch (\Throwable $th) {
        } finally {
            $request->file('image')->move('upload/home/', $date . $random . $request->file('image_suggestion')->getClientOriginalName());
            $rules['image_suggestion'] = $date . $random . $request->file('image_suggestion')->getClientOriginalName();
        }

        SuggestionHome::create($validateData);
    }
    public function destroySuggestion($id)
    {
        $suggestion = SuggestionHome::findOrFail($id);
        $path = public_path("upload/home/" . $suggestion->image);
        unlink($path);
        SuggestionHome::destroy($id);

        // return redirect()
    }
}
