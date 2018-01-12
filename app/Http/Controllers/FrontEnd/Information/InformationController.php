<?php

namespace App\Http\Controllers\FrontEnd\Information;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class InformationController extends Controller
{
    /**
     * Display Information
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (isset($id)) {
            $information_id = $id;
        } else {
            $information_id = 0;
        }
        $information_info = $this->getInformation($information_id);
        // if ($information_info) {

        //     $informationInfor_arr = array();
        //     foreach ($information_info as $information_infos) {
        //         $informationInfor_arr[] = array(
        //             'title' => $information_infos->title,
        //             'description' => $information_infos->description
        //         );
        //     }

        //     return response()->json(['data' => $informationInfor_arr,'success' => true, 'message' => 'Success']);
        // }
        return response()->json(['data' => $information_info,'success' => true, 'message' => 'Success']);
    }

    public function getInformation($information_id) {
        $query = DB::table('information')
                ->leftJoin('information_description','information.information_id','=','information_description.information_id')
                ->leftJoin('information_to_store','information.information_id','=','information_to_store.information_id')
                ->where('information.information_id',$information_id)
                ->where('information_description.language_id',1)
                ->where('information_to_store.store_id',0)
                ->where('information.status',1)
                ->distinct()
                ->get();

        return $query;
    }

}
