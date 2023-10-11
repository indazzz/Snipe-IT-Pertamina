<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Component;
use App\Models\Consumable;
use App\Models\Accessory;
use App\Models\AssetModel;

class PrintOutController extends Controller
{
    public function index($page){
        $data=null;
        if ($page=="categories"){
            $data=Category::all();
            return view('printout/categories', ['data_table'=>$data]);
        }
        elseif ($page=="manufacturers"){
            $data=Manufacturer::all();
            return view('printout/manufacturers', ['data_table'=>$data]);
        }
        elseif ($page=="components"){
            $data=Component::all();
            return view('printout/components', ['data_table'=>$data]);
        }
        elseif ($page=="consumables"){
            $data=Consumable::all();
            return view('printout/consumables', ['data_table'=>$data]);
        }
        elseif ($page=="accessories"){
            $data=Accessory::all();
            return view('printout/accessories', ['data_table'=>$data]);
        }
        elseif ($page=="models"){
            $data=AssetModel::all();
            return view('printout/models', ['data_table'=>$data]);
        }
        else{
            $data=[];
        }
    }
}