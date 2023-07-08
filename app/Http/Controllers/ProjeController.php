<?php

namespace App\Http\Controllers;

use App\Models\categorys;
use App\Models\products;
use App\Models\files;
use Illuminate\Http\Request;

class ProjeController extends Controller
{
    public function categorys(){
        $categorys=categorys::all();
        return view('categorys',[
            "categorys"=>$categorys
        ]);
    }
    public function categoryadd(){
        $categorys=categorys::all();
        return view('categoryadd',[
            "categorys"=>$categorys
        ]
        );
    }
    public function categoryupdate($id){
        $categorys = categorys::where('id', $id)->first();
        return view('categoryupdate',[
            "categorys"=> $categorys,
            ]);
    }
    public function products(){
        $products=products::all();
        $categorys=categorys::all();
        return view('products',[
            "products"=> $products,
            "categorys"=>$categorys
        ]);
    }
    public function productadd(){
        $categorys=categorys::all();
        return view('productadd',[
            "categorys"=> $categorys
        ]);
    }
    public function productupdate($id){
        $products = products::where('id', $id)->first();
        return view('productupdate',[
            "products"=> $products
        ]);
    }
    public function categorysave(Request $request){
        $categorys = categorys::create([
            "cat_name" => $request->get('cat_name'),
        ]);
        return redirect()->route('admin.categorys')->with(['message'=> "Başarıyla eklendi"]);
    }
    public function productsave(Request $request){

        $product = products::create([
            "name" => $request->get('name'),
            "size"=> $request->get('size'),
            "materials" => $request->get('materials'),
            "pressure_class" => $request->get('pressure_class'),
            "connections" => $request->get('connections'),
            "characteristic" => $request->get('characteristic'),
            "process_temperature" => $request->get('process_temperature'),
            "design_standard" => $request->get('design_standard'),
            "cat_id"=> $request->get('cat_name'),
            "description"=> $request->get('description')
        ]);
        if ($request->hasFile('files')){
            foreach($request->file('files') as $key => $file)
            {
                $fileName = time().rand(1,99).'.'.$file->extension();
                $file->move(public_path('uploads'), $fileName);
                files::create([
                    'product_id' => $product->id,
                    'file_url' => $fileName,
                ]);
            }
        }
        return redirect()->route('admin.products')->with(['message'=> "Başarıyla eklendi"]);
    }
    public function categoryUpdatePost($id, Request $request){
     $update=categorys::where('id',$id)->update([
         "cat_name"=> $request->get('cat_name'),
     ]);
        return redirect()->route('admin.categorys')->with(['message'=> "Başarıyla güncellendi"]);
    }
    public function categoryDeletePost($id){
        $delete=categorys::where('id',$id)->delete();

        return redirect()->route('admin.categorys')->with(['message'=> "Başarıyla silindi."]);
    }
    public function productUpdatePost($id, Request $request){
        $update=products::where('id',$id)->update([
            "name"=> $request->get('name'),
            "size"=> $request->get('size'),
            "materials"=> $request->get('materials'),
            "pressure_class"=> $request->get('pressure_class'),
            "connections"=> $request->get('connections'),
            "characteristic"=> $request->get('characteristic'),
            "process_temperature"=> $request->get('process_temperature'),
            "design_standard"=> $request->get('design_standard'),
            "cat_id"=> $request->get('cat_id'),
            "description"=> $request->get('description'),
        ]);
        return redirect()->route('admin.products')->with(['message'=> "Başarıyla güncellendi"]);
    }
    public function productDeletePost($id){
        $delete=products::where('id',$id)->delete();
        return redirect()->route('admin.products')->with(['message'=> "Başarıyla silindi."]);
    }
    public function productapi(){
        return products::query()->get();
    }
    public function categoryapi(Request $request){

        return categorys::query()->get();
    }


}
