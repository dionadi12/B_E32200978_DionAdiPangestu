<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
        //public function index ()
    //{
        //return "menthod ini nantinya akan digunakan untuk mengambil semua data user.";
    //}   
    //public function create ()
    //{
        //return "menthod ini nantinya akan digunakan untuk menampilkan form untuk menambahkan data user.";
    //}        
    //public function store (Request $request)
    //{
        //return "menthod ini nantinya akan digunakan untuk menciptakan,data user yang baru";
    //}     
    //public function show ($id)
    //{
        //return "menthod ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    //}   
    //public function edit ($id)
    //{
        //return "menthod ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    //}   
    //public function update (Request $request)
    //{
        //return "menthod ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    ///}  
    //public function destroy ($id)
    //{
        //return "menthod ini nantinya akan digunakan untuk menghapus data user dengan id=" . $id;
    //}
    public function index ()
    {
        $nama="DION ADI PANGESTU";

        $pelajaran=["pemograman lanjut"];

        return view ('coba', compact('nama','pelajaran'));
    }
}

