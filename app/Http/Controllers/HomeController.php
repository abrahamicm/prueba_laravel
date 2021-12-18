<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function search_vechicles(Request $q)
    {
        $i= $q->i;
        $l= $q->l;
        $o= $q->o;
        $vs =Vehicle::with('client')
        ->with('type_vehicle')
        ->with('brand')
        ->identification($i)
        ->license($l)
        ->owner($o)
        ->get();
        return $vs;
    }

    public function list_brands()
    {
        $a = [];
        foreach (Vehicle::all() as $k => $v) {
            $marca = ucfirst($v->brand->name);
            $v->brand_name = $marca;
            $a[] = $v;
        }
        $c = collect($a);

        return  $c->countBy("brand_name");
    }

}
