<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loai;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\LoaiCreateRequest;

class LoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhsachloai = Loai::all();

        return view('backend.loai.index')
            ->with('danhsachloai',$danhsachloai);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.loai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoaiCreateRequest $request)
    {
        $l = new Loai();
        $l->l_ten = request()->input('l_ten');
        $l->save();

        return redirect()->route('admin.loai.index');
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
        // Sử dụng Query Builder để tìm loại theo id
        /* $l = DB::table('loai')->where('l_ma',"$id")->get();
        foreach ($l as $loai) {
            echo $loai->l_ma . " - " . $loai->l_ten;
            
        } */

        // Sử dụng Eloquent để tìm loại thông qua id 
        $l = Loai::find($id);
        return view('backend.loai.edit')
            ->with('loai',$l);
        
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
        /* Chỉnh sửa với Query Builder
        $loai = DB::table('loai')->where('l_ma',$id)->update(['l_ten'=> $request->input('l_ten')]); */

        // Chỉnh sửa với E loquent
        $loai = Loai::find($id);

        $loai->l_ten = $request->input('l_ten');
        $loai->save();

        return redirect()->route('admin.loai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* destroy() dựa trên primary key để xóa
        Loai::destroy($id); */

        $loai = Loai::find($id)->delete();
        return redirect()->route('admin.loai.index');
    }
}

