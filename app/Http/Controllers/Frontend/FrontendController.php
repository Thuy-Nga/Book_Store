<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\Loai;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function shop()
    {
        $dssp = SanPham::all();
        $dsLoai = Loai::all();

        return view('frontend.pages.shop')
            ->with('dssp', $dssp)
            ->with('dsLoai', $dsLoai);
    }
    public function index(Request $request)
    {
        $deal_of = DB::table('sanpham')->orderby('sp_giamgia','desc')->take(1)->get();
        $dssp = SanPham::all();
        $dsloai = Loai::all();

        return view('frontend.index')
            ->with('dssp',$dssp)
            ->with('dsloai',$dsloai)
            ->with('deal_of',$deal_of);
    }
    public function about()
    {
    	return view('frontend.pages.about');
    }
    public function contact()
    {
    	return view('frontend.pages.contact');
    }
	public function cart()
    {
    	return view('frontend.pages.shopping-cart');
    }
	public function productInfo(Request $request, $id)
    {
        $sp = SanPham::find($id);
        return view('frontend.pages.product-detail')
            ->with('sp',$sp);
    }

}
