<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Employee::where('noanggota','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Employee::paginate(5);
        }
        return view('dataanggota', compact('data'));
    }

    public function tambahanggota(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Employee::create($request->all());
        return redirect()->route('anggota')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampildata($id){
        $data = Employee::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('anggota')->with('success','Data Berhasil Diperbarui');
    }

    public function deletedata($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('anggota')->with('success','Data Berhasil Dihapus');
    }
}
