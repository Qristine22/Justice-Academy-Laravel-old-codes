<?php

namespace App\Http\Controllers;

use App\Models\News;

// Models
use App\Models\Header;
use App\Models\Report;
use App\Models\Worker;
use App\Models\Gallery;
use App\Models\Library;
use App\Models\Graduate;
use App\Models\Candidate;
use App\Models\SitesLink;
use App\Models\Subheader;
use App\Models\MassMedium;
use App\Models\GalleryVideo;
use App\Models\VideoLecture;
use App\Models\GoverningBoardDecree;

class SearchResultController extends Controller
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




    // search result
    // about
    public function reports(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $reportYears = Report::orderBy('id', 'DESC')->get()->groupBy('year');
        $reports = Report::where('year', $reportYears->keys()[0])->get();

        return view('report', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'reports' => $reports,
            'reportYears' => $reportYears,
            'year' => $reportYears->keys()[0],
        ]);
    }
    public function workers($id){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', $id)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function candidates($id){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $prosecutorsCandidate = Candidate::findOrFail($id);

        return view('candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'candidate' => $prosecutorsCandidate,
        ]);
    }
    public function galleries(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = Gallery::all()->groupBy('year')->reverse();
        $galleries = Gallery::galleryAll($years->keys()[0]);

        return view('gallery', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'galleries' => $galleries,
            'years' => $years,
            'year' => $years->keys()[0],
        ]);
    }
    public function galleryVideos(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = GalleryVideo::all()->groupBy('year')->reverse();
        $galleryVideos = GalleryVideo::where('year', $years->keys()[0])->get();

        return view('gallery', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'galleryVideos' => $galleryVideos,
            'years' => $years,
            'year' => $years->keys()[0],
        ]);
    }
    public function governingBoardDecrees(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = GoverningBoardDecree::all()->groupBy('year');
        $governingBoardDecrees = GoverningBoardDecree::where('year', $years->keys()[0])->get();

        return view('governing-board-decree', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'governingBoardDecrees' => $governingBoardDecrees,
            'governingBoardDecreesYears' => $years,
            'year' => $years->keys()[0],
        ]);
    }
    public function graduates(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $graduateYears = Graduate::orderBy('id', 'DESC')->get()->groupBy('year');
        $judgeGraduates = Graduate::where('year', $graduateYears->keys()[0])->where('position', 'judge')->get();
        $prosecutorGraduates = Graduate::where('year', $graduateYears->keys()[0])->where('position', 'prosecutor')->get();
        $investigatorGraduates = Graduate::where('year', $graduateYears->keys()[0])->where('position', 'investigator')->get();

        return view('graduates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'graduateYears' => $graduateYears,
            'judgeGraduates' => $judgeGraduates,
            'prosecutorGraduates' => $prosecutorGraduates,
            'investigatorGraduates' => $investigatorGraduates,
            'year' => $graduateYears->keys()[0],
        ]);
    }
    public function massMedia(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = MassMedium::all()->groupBy('year')->reverse();
        $massMedia = MassMedium::massMidiaYear($years->keys()[0]);

        return view('mass-media', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'massMedia' => $massMedia,
            'years' => $years,
            'year' => $years->keys()[0],
        ]);
    }







    // library
    public function libraryPdfs(){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $manuals = Library::all();

        return view('library', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $manuals,
        ]);
    }
    public function videoLectures($id){
        $headersBot = Subheader::where('parent_id', 5)->get();
        $videoLecture = VideoLecture::findOrFail($id);

        return view('video-lecture-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'videoLecture' => $videoLecture,
        ]);
    }
}
