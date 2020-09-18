<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ApiController extends Controller
{
    public function create(Request $request){
        $students = new Student();

        $students->nama = $request->input('nama');
        $students->email = $request->input('email');
        $students->nomorhp = $request->input('nomorhp');
        $students->pekerjaan = $request->input('pekerjaan');

        $students->save();
        try {
            return response()->json(["Penyimpanan data berhasil dilakukan !"]);
        } 
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    
    public function show(){
        $students = Student::all();
        return response()->json($students);
    }

    public function showById($id){
        $students = Student::find($id);
        return response()->json($students);
    }

    public function updateById(Request $request, $id){
        $students = Student::find($id);
        $students->nama = $request->input('nama');
        $students->email = $request->input('email');
        $students->nomorhp = $request->input('nomorhp');
        $students->pekerjaan = $request->input('pekerjaan');

        $students->save();
        try {
            return response()->json(["Penyimpanan data berhasil diperbarui !"]);
        } 
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function deleteById($id){
        $students = Student::find($id);
        $students->delete();
        try {
            return response()->json(["Data berhasil dihapus !"]);
        } 
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
