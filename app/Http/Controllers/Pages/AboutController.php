<?php

namespace App\Http\Controllers\Pages;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\News;
use App\Models\Home;
use App\Models\About;
use App\Models\Header;
use App\Models\Report;
use App\Models\Worker;
use App\Models\Gallery;
use App\Models\Graduate;
use App\Models\SitesLink;
use App\Models\Admission;
use App\Models\Subheader;
use App\Models\Candidate;
use App\Models\MassMedium;
use App\Models\RectorsPage;
use App\Models\GalleryVideo;
use App\Models\RectorsDecree;
use App\Models\AcademyStructure;
use App\Models\RectorsBiography;
use App\Models\GoverningBoardPage;
use App\Models\GoverningBoardStaff;
use App\Models\GoverningBoardDecree;
use App\Models\FormerRectorsBiography;
use phpDocumentor\Reflection\Types\Collection;

class AboutController extends Controller
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




    // home *********************************************************************************
    public function home(){
        $home = Home::first();
        $lastNews = News::latest()->take(3)->get();

        return view('home', [
            'headers' => $this->getHeader(),
            'home' => $home,
            'lastNews' => $lastNews,
            'sitesLinks' => $this->getSitesLinks(),
        ]);
    }





    // about *********************************************************************************
    public function about(){
        $about = About::first();
        $headersBot = Subheader::where('parent_id', 1)->get();

        return view('about', [
            'headers' => $this->getHeader(),
            'sitesLinks' => $this->getSitesLinks(),
            'about' => $about,
            'headersBot' => $headersBot,
        ]);
    }

    public function governingBoard(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $governingBoardPage = GoverningBoardPage::first();
        $governingBoardDecreesYears = GoverningBoardDecree::all()->groupBy('year');
        $governingBoardDecreesYears = Helpers::datesSortHelper($governingBoardDecreesYears);

        $governingBoardMembers = GoverningBoardStaff::get();

        return view('governing-board', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'governingBoardPage' => $governingBoardPage,
            'governingBoardDecreesYears' => $governingBoardDecreesYears,
            'governingBoardMembers' => $governingBoardMembers,
        ]);
    }

    public function governingBoardDecree($year){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $governingBoardDecrees = GoverningBoardDecree::where('year', $year)->orderBy('id', 'DESC')->get();
        $governingBoardDecreesYears = GoverningBoardDecree::all()->groupBy('year');
        $governingBoardDecreesYears = Helpers::datesSortHelper($governingBoardDecreesYears);

        return view('governing-board-decree', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'governingBoardDecrees' => $governingBoardDecrees,
            'governingBoardDecreesYears' => $governingBoardDecreesYears,
            'year' => $year,
        ]);
    }

    public function governingBoardBiography($id){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = GoverningBoardStaff::findOrFail($id);

        return view('governing-board-biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }

    public function rector(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $text = RectorsPage::first();

        return view('rector', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'text' => $text,
        ]);
    }
    public function rectorsBiography(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $person = RectorsBiography::first();
        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person
        ]);
    }
    public function formerRectorsBiography(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $person = FormerRectorsBiography::first();
        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person
        ]);
    }
    public function rectorsDecrees(){
        $headersBot = Subheader::where('parent_id', 1)->get();

        $decrees = RectorsDecree::orderBy('id', 'DESC')->paginate(10);
        return view('rectors-decrees', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'decrees' => $decrees,
        ]);
    }






    public function academyStructure(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $academyStructure = AcademyStructure::all();

        return view('academy-structure', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'academyStructure' => $academyStructure,
        ]);
    }
    public function VICERector(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function chiefOfStaff(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 2)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function distanceLearningChief(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 3)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function rectorsAdvisor(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 4)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function programmaticMethodologicalActivities(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 5)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function trainingForTrainees(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 6)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function trainingOrganization(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 7)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function unitOfFinance(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 8)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function cooperationAndPublicRelation(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 9)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function staffAndDocumentManagement(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 10)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function tehchnicalAndEconomicActivities(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 11)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }
    public function hotel(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $person = Worker::where('id', 12)->first();

        return view('biography', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'person' => $person,
        ]);
    }








    public function report($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $reportYears = Report::orderBy('id', 'DESC')->get()->groupBy('year');
        $reportYears = Helpers::datesSortHelper($reportYears);

        if(empty($year)){
            $year = $reportYears->keys()[0];
        }
        $reports = Report::where('year', $year)->get();

        return view('report', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'reports' => $reports,
            'reportYears' => $reportYears,
            'year' => $year,
        ]);
    }






    public function graduates($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $graduateYears = Graduate::orderBy('id', 'DESC')->get()->groupBy('year');
        $graduateYears = Helpers::datesSortHelper($graduateYears);

        if(empty($year)){
            $year = $graduateYears->keys()[0];
        }
        $judgeGraduates = Graduate::where('year', $year)->where('position', 'judge')->get();
        $prosecutorGraduates = Graduate::where('year', $year)->where('position', 'prosecutor')->get();
        $investigatorGraduates = Graduate::where('year', $year)->where('position', 'investigator')->get();

        return view('graduates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'graduateYears' => $graduateYears,
            'judgeGraduates' => $judgeGraduates,
            'prosecutorGraduates' => $prosecutorGraduates,
            'investigatorGraduates' => $investigatorGraduates,
            'year' => $year,
        ]);
    }
    public function graduatesJudges($year){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $judgeGraduates = Graduate::where('year', $year)->where('position', 'judge')->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'graduates' => $judgeGraduates,
            'position' => 'judge',
            'year' => $year,
        ]);
    }
    public function graduatesProsecutors($year){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $prosecutorGraduates = Graduate::where('year', $year)->where('position', 'prosecutor')->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'graduates' => $prosecutorGraduates,
            'position' => 'prosecutor',
            'year' => $year,
        ]);
    }
    public function graduatesInvestigators($year){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $investigatorGraduates = Graduate::where('year', $year)->where('position', 'investigator')->get();

        return view('graduates-profession', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'graduates' => $investigatorGraduates,
            'position' => 'investigator',
            'year' => $year,
        ]);
    }








    public function admission(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $admission = Admission::first();

        return view('admission', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'admission' => $admission,
        ]);
    }
    public function judgesCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $judgesCandidate = Candidate::first();

        return view('candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'candidate' => $judgesCandidate,
        ]);
    }
    public function prosecutorsCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $prosecutorsCandidate = Candidate::findOrFail(2);

        return view('candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'candidate' => $prosecutorsCandidate,
        ]);
    }
    public function investigatorsCandidates(){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $investigatorsCandidate = Candidate::findOrFail(3);

        return view('candidates', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'candidate' => $investigatorsCandidate,
        ]);
    }





    public function gallery($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = Gallery::all()->groupBy('year')->reverse();
        $years = Helpers::datesSortHelper($years);

        if(empty($year)){
            $year = $years->keys()[0];
        }
        $galleries = Gallery::galleryAll($year);

        return view('gallery', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'galleries' => $galleries,
            'years' => $years,
            'year' => $year,
        ]);
    }
    public function galleryVideo($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = GalleryVideo::all()->groupBy('year')->reverse();
        $years = Helpers::datesSortHelper($years);

        if(empty($year)){
            $year = $years->keys()[0];
        }
        $galleryVideos = GalleryVideo::where('year', $year)->get();

        return view('gallery', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'galleryVideos' => $galleryVideos,
            'years' => $years,
            'year' => $year,
        ]);
    }



    public function massMedia($year = null){
        $headersBot = Subheader::where('parent_id', 1)->get();
        $years = MassMedium::all()->groupBy('year')->reverse();
        $years = Helpers::datesSortHelper($years);

        if(empty($year)){
            $year = $years->keys()[0];
        }
        $massMedia = MassMedium::massMidiaYear($year);

        return view('mass-media', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'massMedia' => $massMedia,
            'years' => $years,
            'year' => $year,
        ]);
    }
}
