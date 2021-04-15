<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    public function getList(){
        $guitars = Guitar::all();
        return view ('listGuitars', ['guitars' => $guitars]);
    }

    public function getRegister(){
        return view ('createGuitar');
    }

    public function postRegister(Request $request, Guitar $guitar){
        //$guitar = new Guitar();
        $emptyfield = 0;
        
        $guitar->brand = $request->brand;
            if ($guitar->brand == ""){$emptyfield++;}
        $guitar->model = $request->model;
            if ($guitar->model == ""){$emptyfield++;}
        $guitar->year = $request->year;
            if ($guitar->year ==""){$emptyfield++;}
        $guitar->price = $request->price;
            if ($guitar->price == ""){$emptyfield++;}
        $guitar->photo = $request->photo;
            if ($guitar->photo == ""){$emptyfield++;}
        $guitar->color = $request->color;
            if ($guitar->color == ""){$emptyfield++;}
        $guitar->description = $request->description;
            if ($guitar->description == ""){$emptyfield++;}

        if ($emptyfield <= 7 && $emptyfield >0){
            return view('index', ['emptyfield'=> $emptyfield]);
        }else {
            $guitar->save();
            return redirect('guitar/list');  
        }
    }

    public function editList(Guitar $guitar){
        return view ('createGuitar',['guitar' => $guitar]);
    }

    public function putEdit(Request $request, Guitar $guitar){
        
        $emptyfield = 0;
        
        $guitar->brand = $request->brand;
            if ($guitar->brand == ""){$emptyfield++;}
        $guitar->model = $request->model;
            if ($guitar->model == ""){$emptyfield++;}
        $guitar->year = $request->year;
            if ($guitar->year ==""){$emptyfield++;}
        $guitar->price = $request->price;
            if ($guitar->price == ""){$emptyfield++;}
        $guitar->photo = $request->photo;
            if ($guitar->photo == ""){$emptyfield++;}
        $guitar->color = $request->color;
            if ($guitar->color == ""){$emptyfield++;}
        $guitar->description = $request->description;
            if ($guitar->description == ""){$emptyfield++;}

        if ($emptyfield <= 7 && $emptyfield >0){
            return view('index', ['emptyfield'=> $emptyfield]);
        }else {
            $guitar->save();
            return redirect('guitar/list');  
        }
    }

    public function modalDelete($id){
        $guitars = Guitar::all();
        return view ('listGuitars', ['guitars' => $guitars, 'id' => $id]);
    }

    public function deleteRegister(Guitar $guitar){
        $guitar->delete();
        return redirect('guitar/list');
    }
}
