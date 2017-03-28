<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    private $rules = [
        'name' => 'required',
        'catalog' => 'required',
        'unit' => 'required',
        'amount' => array('required', 'regex:/^\d*(\.\d{2})?$/'),
        'price' => array('required', 'regex:/^\d*(\.\d{2})?$/'),
    ];

     private $messages = [
        'name.required' => "Pole 'Nazwa produktu' jest wymagane",
        'catalog.required' => "Pole 'Numer katalogu' jest wymagane",
        'unit.required' => "Pole 'Jesnostka miary' jest wymagane",
        'amount.required' => "Pole 'Ilość' jest wymagane",
        'price.required' => "Pole 'Cena' jest wymagane",
        'amount.regex' => "Pole 'Ilość' ma zły format, dopuszczalna jest liczba, np. 1, 10, 21, 154, 20.40, 44.03 itd. Format xxx lub xxx.xx ",
        'price.regex' => "Pole 'Cena' ma zły format, dopuszczalna jest liczba, np. 1, 10, 21, 154, 20.40, 44.03 itd. Format xxx lub xxx.xx  ",
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();     
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $this->validate($request, $this->rules, $this->messages);

        $product = new Product;
        $product->name = request('name');
        $product->catalog = request('catalog');
        $product->unit = request('unit');
        $product->amount = request('amount');
        $product->price = request('price');        
        $product->save();

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
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
        //dd($request->all());        
        $this->validate($request, $this->rules, $this->messages);

        $product = Product::find($id);
        $product->name = request('name');
        $product->catalog = request('catalog');
        $product->unit = request('unit');
        $product->amount = request('amount');
        $product->price = request('price');        
        $product->save();

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //dd($request->all());
        $product = Product::find($id);
        $product->delete();

        return redirect('/products');
    }
}
