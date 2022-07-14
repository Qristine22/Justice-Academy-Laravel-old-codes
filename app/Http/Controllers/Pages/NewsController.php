<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\News;
use App\Models\Header;
use App\Models\SitesLink;

class NewsController extends Controller
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




    // news *********************************************************************************
    public function news(){
        $news = News::orderBy('id', 'DESC')->paginate(10);

        return view('news', [
            'sitesLinks' => $this->getSitesLinks(),
            'headers' => $this->getHeader(),
            'news' => $news,
        ]);
    }
    public function newsSingle($id){
        $news = News::findOrFail($id);
        $lastNews = News::latest()->take(3)->get();

        return view('news-single', [
            'sitesLinks' => $this->getSitesLinks(),
            'headers' => $this->getHeader(),
            'news' => $news,
            'lastNews' => $lastNews,
        ]);
    }
}
