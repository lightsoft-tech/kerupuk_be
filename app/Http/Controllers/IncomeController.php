<?php

namespace App\Http\Controllers;

use App\Models\Incomes;
use App\Models\Produks;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income = Incomes::join('produks', 'produks.id', '=', 'incomes.produk_id')
                            ->latest('incomes.created_at');
        return view('dashboard.rekapitulasi.pendapatan.index', [
            'incomes' => $income->get(['produks.name_produk',
                                        'produks.price',
                                        'incomes.quantity',
                                        'incomes.date'
            ])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produks::latest();
        return view('dashboard.rekapitulasi.pendapatan.add', [
            'produks' => $produk->get()
        ]);
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
            'produk_id' => 'required',
            'quantity' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Incomes::create($validate);

        return redirect('/admin/incomes');
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
            'produk_id' => 'required|max:255',
            'quantity' => 'required',
            'date' => 'required',
        ];

        $validateData = $request->validate($rules);

        Incomes::where('id', $id)
                ->update($validateData);

        // return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Incomes::destroy($id);
    }
}
