<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contoh extends Controller
{
    function index(){
		echo 'controller contoh fix index';
	}
	function tambah(){
		echo 'controller contoh fix tambah';
	}
	function view(){
		echo 'controller contoh fix view';
	}
	function halaman2(){
		return view('halamandua');
	}
	function halaman3(){
		 return view('halamantiga');
	}
}
