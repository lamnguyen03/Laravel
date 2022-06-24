<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Providers\AppServiceProvider;




class PageController extends Controller
{
    //
    public function getIndex(){
        $slide = Slide ::all();
        $new_product = Product::where('new',1)->paginate(8);
        $noibat_pro = Product::where('new',0)->paginate(8);
        $countnoibat_Pro = Product::where('new',0)->count();
        $countNewPro = Product::where('new',1)->count();
        return view('page.trangchu', compact('slide','new_product','countNewPro','countnoibat_Pro','noibat_pro'));
    }
    public function getLoaiSp($type){
        $type_product = ProductType::all();
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac =  Product::where ('id_type','<>',$type)->paginate(3);
        return view ('page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));
    }

    public function getAdminpage(){
        return view ('AdminPage.AddForm');
    }

    public function postAdminAdd(Request $request){
        $product= new Product();
        if ($request->hasFile('inputImage')){
            $filename=$file->getClientOriginalName('inputImage');
            $file->move('source/image/product',$fileName);
        }
        $fileName=null;
        if ($request->file('inputImage')!=null){
            $filen_name=$request->file('inputImage')->getClientOriginalName();

        }
        $product->name=$request->inputName;
        $product->image=$file_name;
        $product->description=$request->inputDescription;
        $product->unit_price=$request->inputPrice;
        $product->promotion_price=$request->inputPromotionPrice;
        $product->unit=$request->inputUnit;
        $product->new=$request->inputNew;
        $product->id_type=$request->inputType;
        $product->save();
        return $this->getAdminpage();
    
    }
}
