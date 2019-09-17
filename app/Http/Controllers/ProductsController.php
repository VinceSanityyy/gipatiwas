<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Damage;
use App\Supplier;
class ProductsController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {

    //     $products = DB::select(
    //         "SELECT products.id, products.price, products.product_name, products.description, products.quantity, suppliers.name
    //          FROM products
    //          JOIN suppliers ON products.supplier_id = suppliers.id
    //          WHERE products.deleted_at is null"
    //          );


    //     $suppliers = Supplier::all();

    //    return view('products', compact('products','suppliers'));

    // }

    public function getProducts()
    {

        $products = DB::select(
            "SELECT products.id, products.price, products.product_name, products.description, products.quantity, suppliers.name
             FROM products
             JOIN suppliers ON products.supplier_id = suppliers.id
             WHERE products.deleted_at is null"
             );


        $suppliers = Supplier::all();

       return view('products', compact('products','suppliers'));

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
        $data = $request->all();

        $data['product_name'] = ($data['product_name']);
        $data['description'] = ($data['description']);

        $data['supplier_id'] = ($data['supplier_id']);
        $data['price'] = ($data['price']);

        Product::create($data);

        return response()->json($data);
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
        $product = Product::findOrFail($id);
        $data = $request->all();

        $product['product_name'] = ($data['product_name']);
        $product['description'] = ($data['description']);
        $product['price'] = ($data['price']);
        $product['supplier_id'] = ($data['supplier_id']);

        $product->save();

        return response()->json($data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }

    public function stockIn(Request $request, $id){


        $product = Product::findOrFail($id);
        $data = $request->all();

        $product->increment('quantity', request('quantity'));

        $product->save();

        return response()->json($data);

    }

    public function addtoDamaged(Request $request, $id){

        $product = Product::findOrFail($id);

        $data = $request->all();
        $product->decrement('quantity', request('quantity'));
        $data['product_id'] = ($id);
        $data['price'] = ($data['price']);
        $data['quantity'] = ($data['quantity']);


        Damage::create($data);

        return response()->json($data);
    }
}
