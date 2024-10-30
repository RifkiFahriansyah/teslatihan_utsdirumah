<?php

namespace App\Http\Controllers;

use App\Models\namaOrang;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NamaOrangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $namaOrang = namaOrang::all();
       $data['success'] = true;
       $data['result'] = $data;
       return response()->json($data, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
        ]);

        $result = namaOrang::Create($validate);
        if($result){
            $data['success'] = true;
            $data['message'] = 'Data berhasil dibuat';
            $data['result'] = $result;
            return response()->json($data, Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(namaOrang $namaOrang)
    {
        $namaOrang = namaOrang::find($namaOrang);
        $data['success'] = true;
        $data['message'] = "Detail data nama";
        $data['result'] = $namaOrang;
        return response()->json($data,Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(namaOrang $namaOrang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $validate = $request->validate([
        'nama' => 'required',
       ]);

       $result = namaOrang::where('id', $id)->update($validate);
       if($result){
        $data['success'] = true;
        $data['message'] = "Data berhasil diupdate";
        $data['result'] = $result;
        return response()->json($data,Response::HTTP_OK);
       }
     }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $namaOrang = namaOrang::find($id);
        if($namaOrang){
            $namaOrang->delete();
            $data['success'] = true;
            $data['message'] = "Data Berhasil dihapus";
            return response()->json($data, Response::HTTP_OK);
        }else{
            $data['success'] = false;
            $data['message'] = "Data tidak ditemukan";
            return response()->json($data, Response::HTTP_NOT_FOUND);
        }
    }
}
