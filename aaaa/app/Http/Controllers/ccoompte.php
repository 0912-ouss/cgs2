<?php

namespace App\Http\Controllers;
use App\Models\mcompte;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

class ccoompte extends Controller
{
    function index(){
        //$dt = moption::all();
         //return "ousaam";
          //return $dt;
          $dt=mcompte::paginate(2);
         return view("configcomptes",["dt"=>$dt]);
        // return view("configcomptes");

     }
     function aj(Request $r){
    
       if($r->has('img')){
          $o = new mcompte();
          $imgex=$r->img->getClientOriginalExtension();
          $imgname=time().'.'.$imgex;
          $path='img';
          $r->img->move($path,$imgname);
          $o->Photo= $imgname;
           $o->nom= $r->nom;
            $o->email= $r->email;
            $o->psw= $r->psw;
            $o->Tel= $r->tel;
            $o->adresse= $r->adresse;
            $o->typee= $r->typee;
           
            $o->save();
           
   
           return redirect("mescomptes");
           
          
       }
       else {
           return"dddddd";
       }
    }
    function remove($pk){
        $o = mcompte::where("idUser",$pk);
        if($o)
        {
            $o->delete();
            return redirect("mescomptes");
        }
        //return "oussama";
        
    }
    function show($code){
        $o = mcompte::where("idUser",$code)->first();
       // return $o;
        return view("upcompte",["o"=>$o]);
    }
    function save(Request $r ){
        
        $o = mcompte::where("idUser", $r->id)->first();
        $o->nom= $r->nom;
        $o->email= $r->email;
        $o->psw= $r->psw;
        $o->Tel= $r->tel;
        $o->adresse= $r->adresse;
        $o->typee= $r->typee;

        if($r->has('img')){
            $imgex=$r->img->getClientOriginalExtension();
            $imgname=$o->idUser.'.'.$imgex;
            $path='img';
            $r->img->move($path,$imgname);
            $o->Photo= $imgname;
        }
      
        
        $o->save();
         return redirect("mescomptes");
         
              
               
     }

    
}
