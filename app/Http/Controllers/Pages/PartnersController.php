<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Header;
use App\Models\SitesLink;
use App\Models\Partner;
use App\Models\Subheader;

class PartnersController extends Controller
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





    
    // partners *********************************************************************************
    public function partners(){
        $internationals = Partner::where('category', 'international')->get();
        $foreigns = Partner::where('category', 'foreign')->get();
        $armArtsakhs = Partner::where('category', 'arm&artsakh')->get();

        return view('partners', [
            'headers' => $this->getHeader(),
            'sitesLinks' => $this->getSitesLinks(),
            'internationals' => $internationals,
            'foreigns' => $foreigns,
            'armArtsakhs' => $armArtsakhs,
        ]);
    }
    public function partnerSingle($id){
        $headersBot = Subheader::where('parent_id', 7)->get();
        $partner = Partner::findOrFail($id);

        return view('partner-single', [
            'headers' => $this->getHeader(),
            'sitesLinks' => $this->getSitesLinks(),
            'headersBot' => $headersBot,
            'partner' => $partner,
        ]);
    }
}
