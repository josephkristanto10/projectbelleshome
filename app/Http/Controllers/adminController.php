<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Category;
use App\Models\Product;
use App\Models\MainWebsite;
use DataTables;
use Hash;
use Session;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login_index()
    {
        return view("admin.pages.signin");    
    }
    public function belle_home_centre_index(){
        if(Session::has("superuser")){
            $menu = "dashboard";
            return view("admin.pages.dashboard", compact("menu"));    
        }
        else{
            return redirect("/bellecentre");
        }
    }
    public function belle_home_centre_index_category(){
        if(Session::has("superuser")){
            $menu = "category";
            return view("admin.pages.category", compact("menu"));    
        }
        else{
            return redirect("/bellecentre");
        }
    }
    public function belle_home_centre_index_mainhome(){
        if(Session::has("superuser")){
            $all_Data = MainWebsite::all();
            $menu = "mainhome";
            return view("admin.pages.mainhome", compact("menu", "all_Data"));    
        }
        else{
            return redirect("/bellecentre");
        }
    }
    public function belle_home_centre_index_product(){
        if(Session::has("superuser")){
            $category = Category::where("status","=","on")->get();
            $menu = "product";
            return view("admin.pages.product", compact("menu","category"));    
        }
        else{
            return redirect("/bellecentre");
        }
    }

    public function update_image_section_1(Request $request){
        $image = $request->file('file_image');
        $image_name = "image_section_1.".$image->getClientOriginalExtension();
        $update_product = MainWebsite::where("id","=",1)->update(["img_section_1" => $image_name]);
        // $image->storeAs('public/assets/images/product_from_db', $image_name);
        $image->move(public_path()."/all_image/mainhome_from_db",$image_name);
        return response()->json(['status' => "200", 'message' => $image_name]);
    }
    public function update_image_section_2(Request $request){
        $image = $request->file('file_image');
        $image_name = "image_section_2.".$image->getClientOriginalExtension();
        $update_product = MainWebsite::where("id","=",1)->update(["img_section_2" => $image_name]);
        // $image->storeAs('public/assets/images/product_from_db', $image_name);
        $image->move(public_path()."/all_image/mainhome_from_db",$image_name);
        return response()->json(['status' => "200", 'message' => $image_name]);
    }
    public function update_image_section_3(Request $request){
        $image = $request->file('file_image');
        $image_name = "image_section_3.".$image->getClientOriginalExtension();
        $update_product = MainWebsite::where("id","=",1)->update(["img_section_3" => $image_name]);
        // $image->storeAs('public/assets/images/product_from_db', $image_name);
        $image->move(public_path()."/all_image/mainhome_from_db",$image_name);
        return response()->json(['status' => "200", 'message' => $image_name]);
    }
    


    public function see_table_all_category(){
        $data = Category::orderBy("id","desc")->get();
        return DataTables::of($data)->make(true);
    }
    public function see_table_all_product(){
        // $data = Product::orderBy("id","desc")->get();
        $data = Product::join("category","category.id","=","product.category_id")->select("product.*", "category.name as category_name")->orderBy("product.id","desc")->get();
        return DataTables::of($data)->make(true);
    }

    public function upload_new_product(Request $request){
        $status = "";
        $errormes = "";
        
        if($request->file('add_product_image') != "" && $request->add_product_name != "" && $request->add_product_price != "" && $request->add_product_desc != "" && $request->id_category != ""){
            $status = "200";

            $insert_product = Product::create([
                'category_id' => $request->id_category,
                'img'     => "-",
                'name'     => $request->add_product_name,
                'description'     => $request->add_product_desc,
                'price'     => $request->add_product_price,
                'status'   => "on",
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $image = $request->file('add_product_image');
            $image_name = "product_".$insert_product->id."_1.".$image->getClientOriginalExtension();

            $update_product = Product::where("id","=",$insert_product->id)->update(["img" => $image_name]);
            // $image->storeAs('public/assets/images/product_from_db', $image_name);
            $image->move(public_path()."/all_image/product_from_db",$image_name);
            $errormes = "ok";
        }
        else{
            $status = "500";
            $errormes = "Please fill all the requirement";
        }

        return response()->json(['status' => $status, 'message' => $errormes]);
    }

    public function delete_product(Request $request){
        $myid = $request->data_product;
        $status_product = Product::where("id","=",$myid)->get();
        $set_status = "on";
        if($status_product[0]->status == "on"){
            $set_status = "off";
        }
        $delete_product = Product::where("id","=",$myid)->update(["status"=>$set_status]);
        return response()->json(['status' => "200", 'message' => "ok"]);
    }

    

    
    public function upload_new_category(Request $request){
        $insert_product = Category::create([
            'name' => $request->add_category_name,
            'status'     => "on",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return response()->json(['status' => "200", 'message' => "ok"]);
    }

    public function delete_category(Request $request){
        $myid = $request->data_category;
        $status_product = Category::where("id","=",$myid)->get();
        $set_status = "on";
        if($status_product[0]->status == "on"){
            $set_status = "off";
        }
        $delete_product = Category::where("id","=",$myid)->update(["status"=>$set_status]);
        return response()->json(['status' => "200", 'message' => "ok"]);
    }

    
    public function cek_login(Request $request){
        $username = $request->username;
        $password = $request->pwd;
        // $encrypted = bcrypt($request->password);
        $status = "500";
        $errormes = "error";
        $usercheck_fromdb = Login::where("user", "=",$username)->select("*")->first();
        if($usercheck_fromdb){
            if (Hash::check($password, $usercheck_fromdb->pass)) {
                $status = "200";
                $errormes = "ok";
                Session::flush();
                Session::put('superuser', "yes");
                
            }
            else{
                $status = "500";
                $errormes = "error";
            }
        
        }
        return response()->json(['status' => $status, 'message' => $errormes]);
    }
    
    public function index()
    {
        
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