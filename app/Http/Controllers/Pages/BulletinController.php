<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Header;
use App\Models\SitesLink;
use App\Models\Bulletin;
use App\Models\BulletinInfo;


class BulletinController extends Controller
{
    public $headers;
    public $sitesLinks;

    public function getHeader(){
        return $this->headers;
    }
    public function setHeader($headers){
        $this->headers = $headers;
    }
    public function getSitesLinks(){
        return $this->sitesLinks;
    }
    public function setSitesLinks($sitesLinks){
        $this->sitesLinks = $sitesLinks;
    }
    public function __construct(){
        $headers = Header::headers();
        $sitesLinks = SitesLink::all();
        $this->setHeader($headers);
        $this->setSitesLinks($sitesLinks);
    }

    



    // bulletin *********************************************************************************
    public function bulletin(){
        $bulletinInfos = BulletinInfo::all();
        $bulletins = Bulletin::all();

        return view('bulletin', [
            'headers' => $this->getHeader(),
            'sitesLinks' => $this->getSitesLinks(),
            'bulletinInfos' => $bulletinInfos,
            'bulletins' => $bulletins,
            'downloadLink' => 'bulletinInfoDownload',
        ]);
    }
}
