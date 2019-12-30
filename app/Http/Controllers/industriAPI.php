<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industri;


class industriAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industri = Industri::all();
        $original_data = json_decode($industri, true);
        $coordinates = array();
        $i = 0;
        $j = 0;
        foreach($original_data as $key => $value) {
            $coordinates[] = array(
                'type'=> 'Feature',
                'id' => $i++,
                'geometry'=> array(
                    'type'=> 'Point',
                    'coordinates'=> array(
                        $value['y'],
                        $value['x'],
                    ),  
                ),
                'properties'=>array(
                    'FID' => $j++,
                    'No_'=> $value['No'],
                    'Nama'=> $value['nama'],
                    'Y'=> $value['x'],
                    'X'=> $value['y'],
                    'Foto' => $value['foto'],
                ),
            );
            
        }
        $new_data = array(
            'type' => 'FeatureCollection',
            'crs'=>array(
                'type'=>'name',
                'properties'=>array(
                    'name'=>'EPSG:4326'
                ),
            ),
            'features' => $coordinates
        );
        
        $final_data = json_encode($new_data, JSON_PRETTY_PRINT);
        
        print_r($final_data);
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
