<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Roadtanker;
use Excel;


class RoadtankerController extends Controller
{
    
    public function RoadtankerImport(Request $request){

        if($request->hasFile('roadtankers')){

            $path = $request->file('roadtankers')->getRealPath();
            $data = \Excel::load($path)->get();

            if($data->count()){

                foreach($data as $key => $value){

                    $rt_list[] = [
                        
                        'plate' => $value->plate,
                        'capacity' => $value->capacity,
                        'terminal' => $value->terminal,
                        'hauler_id' => $value->hauler_id,
                        'created_at' => date("Y-m-d h:i:s"),
                        'updated_at' => date("Y-m-d h:i:s")

                    ];
                }    

                if(!empty($rt_list)){

                    Roadtanker::insert($rt_list);
                    \Session::flash('success' , 'File imported successfully !!');
                }
                elseif(empty($rt_list)){                        
                    Session::flash('error', 'Error inserting the data..');
                    return back();
                }
            }
        }else {
            \Session::flash('warning', 'There is no file to import !!');
        }
        return Redirect::back();
    }

    public function RoadtankerExport($type){

        //$rt = Roadtanker::select('plate', 'capacity', 'terminal')->get()->toArray();
        $rt = Roadtanker::join('haulers', 'roadtankers.hauler_id', '=', 'haulers.id')->select('plate', 'capacity', 'terminal', 'haulers.name as Hauler')->get()->toArray();
        
        return \Excel::create('rt-list' , function($excel) use ($rt) {

            $excel->sheet('Roadtanker-List', function($sheet) use ($rt){

                $sheet->fromArray($rt);

            });

        })->download($type);
    }


}
