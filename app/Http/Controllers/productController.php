<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->id)){
            $products = Product::where("product.status","=","on")->where("category_id", "=", $request->id)->paginate(20);
        }
        else{
            $products = Product::where("product.status","=","on")->paginate(20);
        }
        $category = Category::all();
     
        return view('main.product', compact("category", "products"));
    }

    public function fetch_data(Request $request){
        $idcategory = $request->category;
        $kata_kunci = "";
        if($request->keyword){
            $kata_kunci = $request->keyword;
        }
        
            if($request->ajax())
            {
          
                    if($idcategory == 0){
                        // All Product
                      
                        if($kata_kunci == "") {
                              // All Product, no keyword, no category
                              $products =  Product::leftJoin("category", "category.id",'=',"product.category_id")->where("product.status", "=","on")->latest('product.id')->select("product.*","category.name as category_name", "category.id")->paginate(20);
                        }
                        else{
                               // All Product, with keyword, no category
                               $products =  Product::leftJoin("category", "category.id",'=',"product.category_id")->where("product.status", "=","on")->where("product.name",'like',"%".$kata_kunci."%")->latest('product.id')->select("product.*","category.name as category_name", "category.id")->paginate(20);

                        }
                    }
                    else{
                        // All Product, no keyword, with Category
                        if($kata_kunci == "") {
                            $products =  Product::leftJoin("category", "category.id",'=',"product.category_id")->where("category.id","=", $idcategory)->where("product.status", "=","on")->latest('product.id')->select("product.*","category.name as category_name", "category.id")->paginate(20);    
                        }
                        else{
                            $products =  Product::leftJoin("category", "category.id",'=',"product.category_id")->where("category.id","=", $idcategory)->where("product.status", "=","on")->where("product.name",'like',"%".$kata_kunci."%")->latest('product.id')->select("product.*","category.name as category_name", "category.id")->paginate(20);    
                        }
                    }

                return view('product_card', compact('products'))->render();
            }
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
        //
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