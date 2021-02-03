<?php

namespace Admin\Http\Controllers;

use Admin\Http\Requests\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index(){
        /* note that routeView helper funcion accept 2 param
        'fileName' and 'folderName' if file located  inside folder */
        dd(auth('admin')->user());
        return view(viewRoute('index'));
    }

 
}
