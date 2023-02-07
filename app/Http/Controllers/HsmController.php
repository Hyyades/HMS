<?php

namespace App\Http\Controllers;

use App\Models\hsm;
use Illuminate\Http\Request;
use DB;

class HsmController extends Controller
{
    public function getdata()
    {
        $D=DB::table('hsms')->get();
        return view('getdata',compact('D'));
    }

    public function Insert(Request $r)
    {
        $variable= new hsm;
        $variable->b_cnic=$r->input('cnic');
        $variable->b_name=$r->input('name');
        $variable->b_contact=$r->input('contact');
        $variable->b_bookdays=$r->input('bookdays');
        $variable->b_arrivaldate=$r->input('dd/mm/yyyy');
        $variable->b_departuredate=$r->input('ddd/mm/yyyy');
        $variable->b_email=$r->input('email');
        $variable->save();
    }
    
    public function deletedata($id)
    {
        $D=DB::table('hsms')->where('b_cnic',$id)->delete();
        return view('getdata',compact('D'));
    }

    public function editdata($id)
    {
        $D=DB::table('hsms')->where('b_cnic',$id)->get();
        return view('getdata',compact('D'));
    }
    
    public function update(Request $r)
    {
        $variable= new hsm;
        $variable->b_cnic=$r->input('cnic');
        $variable->b_name=$r->input('name');
        $variable->b_contact=$r->input('contact');
        $variable->b_bookdays=$r->input('bookdays');
        $variable->b_arrivaldate=$r->input('dd/mm/yyyy');
        $variable->b_departuredate=$r->input('ddd/mm/yyyy');
        $variable->b_email=$r->input('email');
        $variable->save();
    }
}
