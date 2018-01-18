<?php

namespace App\Http\Controllers\Backend\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Models\BackEnd\User\User;
use App\Http\Models\BackEnd\UserGroup\UserGroup;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Backend\commons\ImageMaker;
/*
    this controller use for create any validation function
    currently it have one function to validate data if exist or not yet exist
    then return the json to pass to axios.get() in veujs
    this function there are 3 parameter(tablename,fieldname,value)
        - tablename: table that we want to check
        - fieldname: field of that table we want to filter
        - value: value of field we want to check
*/
use App\Http\Controllers\Backend\commons\ValidateDataController;
/*
    DataAction class use for any action the data from any table
    For more detail i have comment in DataAction class in commons folder
*/
use App\Http\Controllers\Backend\commons\DataAction;

class UsersController extends Controller
{
    public function index()
    {

        $Users = User::AllUser();
        return response()->json($Users);
    }

    public function store(Request $request)
    {

      //$ImageMaker=new ImageMaker;
      //$ImageMaker->base64ToImage("imagesss",$request->userImage);
      //     if( preg_match('/data:image/', $request->userImage) ){                
      //     preg_match('/data:image\/(?<mime>.*?)\;/', $request->userImage , $groups);
      //     $mimetype = $groups['mime'];
                       
      //     $image='images/TestImage.'.$mimetype;
      //     $image = Image::make($request->userImage)
      //       ->fit(400, 500) 
      //       ->encode($mimetype, 100) 
      //       ->save(public_path($image));                
      // }
        
        $data=array();
        $condition=array();
        foreach($request->all() as $key=>$value){
            $data[]=$value;
            $condition=[
                'username'=>$value['username'],
                'email'=>$value['email']
            ];
        }

        

        return (new DataAction)->StoreData(User::class,$condition,"or",$data->toArray());
        //return response()->json($data->toArray());

    }
    public function edit($id)
    {

        return (new DataAction)->EditData(User::class,$id);

    }
    
    public function update(Request $request,$id)
    {
        // if( preg_match('/data:image/', $request->userImage) ){             
     //      preg_match('/data:image\/(?<mime>.*?)\;/', $request->userImage , $groups);
     //      $mimetype = $groups['mime'];
                       
     //      $firstname='images/testpost.'.$mimetype;
     //      $image = Image::make($request->userImage)
     //        // ->fit(400, 500) 
     //        ->encode($mimetype, 100) 
     //        ->save(public_path($firstname));                
     //    } 
        $data=[
            'user_group_id'=>$request->user_group_id,
            'username'=>$request->username,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'code'=>$request->code,
            'image'=>'',
            'status'=>$request->status,
            'ip'=>$request->ip(),
            'salt'=>'xy390xz',
            'date_added'=>date('Y-m-d H:i:s')
        ];
        $data=$request->all();

        return (new DataAction)->UpdateData(User::class,$data,'user_id',$id);
    }
    public function destroy($id)
    {
        return (new DataAction)->DeleteData(User::class,'user_id',$id);
    }
    public function UserGroup()
    {
        return response()->json(UserGroup::Groups());
    }
    public function ValidateData($field,$value){
        
        $existed=false;

        //instant the object
        $validate=new ValidateDataController;
        if($field=="username"){
            //return data json to vuejs when axios request
            return $validate->CheckDataExist('user','username',$value);    
        }elseif($field=="email"){
            //return data json to vuejs when axios request
            return $validate->CheckDataExist('user','email',$value);
        }
        
    }
}
