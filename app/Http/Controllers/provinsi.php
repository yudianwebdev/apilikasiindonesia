<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class provinsi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provinsi()
    {
        //
         $Provinsi = DB::table('reg_provinces')->get();
        
        $res = [
            "massage" => "List Data",
            'data' => $Provinsi
        ];

        return response()->json($res, Response::HTTP_OK);
    }
     public function kota_kab($id)
    {
        //
        $KotaKab = DB::table('reg_regencies')->where('province_id', $id)->get();
        $res = [
            'massage' => 'Data Ditemukan',
            'Data' => $KotaKab
        ];
        return response()->json($res, Response::HTTP_OK);
    }
     public function kecamatan($id)
    {
        //
        $Kecamatan = DB::table('reg_districts')->where('regency_id', $id)->get();
        $res = [
            'massage' => 'Data Ditemukan',
            'Data' => $Kecamatan
        ];
        return response()->json($res, Response::HTTP_OK);
    } 
    public function kel_desa($id)
    {
        //
        $kel_desa = DB::table('reg_villages')->where('district_id', $id)->get();
        $res = [
            'massage' => 'Data Ditemukan',
            'Data' => $kel_desa
        ];
        return response()->json($res, Response::HTTP_OK);
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
