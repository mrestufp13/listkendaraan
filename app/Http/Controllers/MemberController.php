<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
use Validator, Input, Redirect, Session;

use Illuminate\Http\Request;

class MemberController extends Controller
{
  public function index()
  {
    $kendaraans = Member::all();

return view('member.index', ["kendaraans" => $kendaraans]);
  }

  public function create()
  {
      return view('member.create');
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
$kendaraan = new Member;

$kendaraan->id = $request->id;
$kendaraan->jenis = $request->jenis;

$kendaraan->save();

return redirect('member')->with('message', 'List Kendaraan Sudah di Update');
    }
    
     public function show($id)
    {
		
        $kendaraan = Kendaraan::find($id);		
		
		
		if(!$kendaraan){
			
			abort(404);
			
		}
		
		
		
		return view('kendaraan.single')->with('kendaraan', $kendaraan);
		
		
		
    }
    
    
    
    
    
    
}
