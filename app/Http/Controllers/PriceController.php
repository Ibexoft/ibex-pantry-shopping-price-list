<?php

namespace App\Http\Controllers;

use App\Price;
use App\Store;
use App\ProductVariant;
use Illuminate\Http\Request;

class PriceController extends Controller
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
        $prices = auth()->user()->prices;
        return view('prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = auth()->user()->products;
        $stores = Store::all();
        return view('prices.create', compact(['products', 'stores']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'product_id' => ['required'],
            'store_id' => ['required'],
            'price' => ['required', 'min:0']
        ]);

        $variantAttributes = request()->validate([
            'product_id' => ['required'],
            'unit' => ['required'],
            'quantity' => ['required']
        ]);

        $variant = ProductVariant::create($variantAttributes);
        // TODO: check if variant is created

        $attributes['variant_id'] = $variant->id;
        $attributes['user_id'] = auth()->id();

        $price = Price::create($attributes);
        
        return redirect('prices');
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
