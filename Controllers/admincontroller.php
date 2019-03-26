<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //
    public function imageupload(Request $request) {


        $validator = Validator::make($request->all(), [

            'parent_selection' => 'required',

            'child_selection' => 'required',

            'img_type' => [
                'required',
                'image',
                'mimes:jpg,png'
            ],

            'img_file' => 'required',




        ]);
        if ($validator->fails()) {
            return response(['message'=>$validator->errors()->first()], 400);
        }

    }
    public function categorydata(Request $request) {


        $validator = Validator::make($request->all(), [

            'category' => 'required',

            'description' => 'required',

            'parent_category' => 'required',




        ]);
        if ($validator->fails()) {
            return response(['message'=>$validator->errors()->first()], 400);
        }

    }


    public function projectdata(Request $request) {


        $validator = Validator::make($request->all(), [

            'project_name' => 'required',

            'project_description' => 'required',

            'category_id' => 'required',




        ]);
        if ($validator->fails()) {
            return response(['message'=>$validator->errors()->first()], 400);
        }

    }




}
