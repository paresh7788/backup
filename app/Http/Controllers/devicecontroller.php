<?php
//  this com=ntroller is used for api purpose
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;

class devicecontroller extends Controller
{

    //  GET api to get all user information
    function list()
    {
        return upload::all();

    }
    //  GET api to get selected user information
    function specificlist($id = null)
    {
        return upload::find($id);

    }

    //  PUT api to submit user information

    // {
	//   "id":2,
    //     "name":"updatedps",
    //     "email":"updatedps@gmail.com"
    // }

    function update(Request $req){
        $upload= upload::find($req->id);
        $upload->name=$req->name;
        $upload->email=$req->email;
        $reult=$upload->save();


        if ($reult){
            return ['success'=>"updated"];
        }else{
            return ["msg"=> "failed to upload"];
        }

    }
    function delete($id){

        $delete= upload::find($id);
        $reult=$delete->delete();


        if ($reult){
            return ['success'=>"record has been deleted "];
        }else{
            return ["msg"=> "delete operation failed"];
        }


    }


    //  POST api to submit user information
    function add(Request $req)
    {

        return ['name' => $req->input('name'),'email' => $req->input('email'),];
    }
}
