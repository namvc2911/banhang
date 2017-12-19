<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class PagerController extends Controller
{
    public function getIndex()
    {
    	$slide = Slide::all();
    	$new_product = Product::where('new',1)->paginate(8);
    	$sanpham_Km = Product::where('promotion_price','<>',0)->paginate(8);
    	// dd($new_product);
    	return view('page.trangchu',compact('slide','new_product','sanpham_Km'));
    }
    public function getLoaiSp($type)
    {
    	$sp_theoLoai = Product::where('id_type',$type)->get();
    	$sp_khac = Product::where('id_type','<>',$type)->paginate(9);
    	$loai = ProductType::all();
    	$loai_sp = ProductType::where('id',$type)->first();
    	return view('page.loaisanpham',compact('sp_theoLoai','sp_khac','loai','loai_sp'));
    }
    public function getChiTietSanPham($type)
    {

    	$sanpham = Product::where('id_type',$type)->first();
    	$sanpham_tuongtu = Product::where('id_type','<>',$type)->paginate(3);
    	return view('page.chitietsanpham',compact('sanpham','sanpham_tuongtu'));

    }
     public function getGioiThieu()
    {
    	return view('page.gioithieu');
    }
    public function getLienHe()
    {
    	return view('page.lienhe');
    }
}


