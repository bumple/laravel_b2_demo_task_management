<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(){
            $customers = [
            [
                "id" => 1,
                "username" => "toilatien",
                "phone" => "12345",
                "email" => "tien@gmail.com"
            ],
            [
                "id" => 2,
                "username" => "nam",
                "phone" => "12345",
                "email" => "nam@gmail.com"
            ]
        ];
        return view('index',compact('customers'));
    }
    public function create(){
        return view('create');
    }
    public function show($id){
        echo "day la trang show co id la $id";
    }
    public function edit($id){

        return view('list',compact('id'));
    }
    public function delete(){
        echo "xoa";
    }
    //
}
