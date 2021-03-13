<?php

namespace App\Http\Controllers\Employee;

use App\FileManagement;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class FileManagementController extends Controller
{



   public function show($id){

       if (auth()->user()->role == 'employee'){
           $data['users'] = User::with('fileManagements')->findOrFail($id);
           $data['files'] = FileManagement::where('user_id','=',$data['users']->id)->orderBy('id','DESC')->limit(4)->get();

       }

       return view('employee.file-management',$data);
   }
}
