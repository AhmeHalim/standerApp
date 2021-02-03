<?php

namespace Admin\Http\Controllers\Api;

use Admin\Http\Requests\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function index(){
        /* note that routeView helper funcion accept 2 param
        'fileName' and 'folderName' if file located  inside folder */
        return view(viewRoute('index'));
    }

 
}
