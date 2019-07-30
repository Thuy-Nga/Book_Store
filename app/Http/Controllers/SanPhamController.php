<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\Loai;
use Validator;
use App\Http\Requests\SanPhamCreateRequest;
use Barryvdh\DomPDF\Facade as PDF;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsSanPham = SanPham::all();

        return view('backend.sanpham.index')
            ->with('dsSanPham', $dsSanPham);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsLoai = Loai::all();

        return view('backend.sanpham.create')
            ->with('dsLoai', $dsLoai);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SanPhamCreateRequest $request)
    {
        // Cách 1 để ràng buộc dữ liệu phía Serve

        /* $validator = Validator::make($request->all(), [
            'sp_ten' => 'required|min:3|max:50|unique:sanpham',
            'sp_gia' => 'required',
            'sp_giamGia' => 'required',
            'sp_thongTin' => 'min:10',
        ]);

        if($validator->fails()){
            return redirect()
                ->route('admin.sanpham.create')
                ->withErrors($validator)
                ->withInput();
        }
        */
        $sp = new SanPham();

        $sp->sp_ten = $request->sp_ten;
        $sp->sp_gia = $request->sp_gia;
        $sp->sp_giamGia = $request->sp_giamGia;
        $sp->sp_mota = $request->sp_mota;
        $sp->sp_taoMoi = $request->sp_taoMoi;
        $sp->sp_capNhat = $request->sp_capNhat;
        $sp->l_ma = $request->l_ma;
        if($request->hasFile('sp_hinh')){
            $file = $request->sp_hinh;

            $sp->sp_hinh = $file->getClientOriginalName();

            // Chép file vào thư mục photos
            $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        }
        $sp->save();

        return redirect()->route('admin.sanpham.index');
            
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
        $sp = SanPham::find($id);
        $dsLoai = Loai::all();

        return view('backend.sanpham.edit')
            ->with('sp', $sp)
            ->with('dsLoai', $dsLoai);
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
        $sp = SanPham::find($id);

        $sp->sp_ten = $request->input('sp_ten');
        $sp->sp_gia = $request->input('sp_gia');
        $sp->sp_giamgia = $request->input('sp_giamGia');
        $sp->sp_taoMoi = $request->input('sp_taoMoi');
        $sp->sp_capNhat = $request->input('sp_capNhat');
        $sp->sp_mota = $request->input('sp_mota');
        $sp->sp_trangThai = $request->input('sp_trangThai');
        $sp->l_ma = $request->input('l_ma');

        if($request->hasFile('sp_hinh')){
            $file = $request->sp_hinh;

            $sp->sp_hinh = $file->getClientOriginalName();

            // Chép file vào thư mục photos
            $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        }

        $sp->save();

        return redirect()->route('admin.sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp = SanPham::find($id)->delete();

        return redirect()->route('admin.sanpham.index');
    }

    public function pdf(){

        $dsSanPham = SanPham::all();
        $dsLoai = Loai::all();
        $data = [
            'danhsachloai'=>$dsLoai,
            'danhsachsanpham'=>$dsSanPham
        ];

        $pdf = PDF::loadView('backend.sanpham.pdf', $data);
        return $pdf->download('SanPham.pdf');
    }

    public function print(){
        $danhsachsanpham = SanPham::all();

        return view('backend.sanpham.print')
            ->with('danhsachsanpham', $danhsachsanpham);
    }
}
