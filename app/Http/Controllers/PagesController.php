<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\Header;

class PagesController extends Controller
{
    public $headers;

    public function getHeader(){
        return $this->headers;
    }
    public function setHeader($headers){
        $this->headers = $headers;
    }
    public function __construct(){
        $headers = Header::headers();
        $this->setHeader($headers);
    }





    //login *********************************************************************************
    public function login(){
        return view('admin.login', [
            'headers' => $this->getHeader(),
        ]);
    }
}