<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kendaraan;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraans = Kendaraan::all();
			return view('kendaraan.index', ['kendaraans' => $kendaraans]);
			
			
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
        'id' => 'required',
        'jenis' => 'required',
    ]);
	
		
        // Validate the request...

        $kendaraan = new Kendaraan;

        $kendaraan->id = $request->id;
		$kendaraan->jenis = $request->jenis;

        $kendaraan->save();
		
		
		return redirect('kendaraan')->with('message', 'List Kendaraan Sudah Di Update !');
    
	
	
	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
        $kendaraan = Kendaraan::find($id);		
		
		
		if(!$kendaraan){
			
			abort(404);
			
		}
		
		
		
		return view('kendaraan.single')->with('kendaraan', $kendaraan);
		
		
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
		 $kendaraan = Kendaraan::find($id);		
		
		
		if(!$kendaraan){
			
			abort(404);
			
		}
		
		
		
		return view('kendaraan.edit')->with('kendaraan', $kendaraan);
		
		
		
		
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
        
		{
         $this->validate($request, [
        'id' => 'required',
        'jenis' => 'required',
    ]);
	
		
        // Validate the request...

        $kendaraan = Kendaraan::find($id);

        $kendaraan->id = $request->id;
		$kendaraan->jenis = $request->jenis;

        $kendaraan->save();
		
		
		return redirect('kendaraan')->with('message', 'List Kendaraan Sudah Di Edit !');
    
	
	
	
    }
		
		
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
         $kendaraan = Kendaraan::find($id);
		 $kendaraan->delete();
		 
		 return redirect('kendaraan')->with('message', 'List Kendaraan Sudah Di Hapus !');
		 
    }
}
