<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helpers;

// Models
use App\Models\Header;
use App\Models\SitesLink;
use App\Models\Subheader;
use App\Models\BehaviorRule;
use App\Models\DormitoryRule;
use App\Models\ConductingExam;
use App\Models\ProvideDeferral;
use App\Models\TrainingProgram;
use App\Models\ConductingPractice;
use App\Models\ConductingExamVideo;

class FullTimeEducationController extends Controller
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






    // full time education *********************************************************************************
    // training programs
    public function fullTimeEducation(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $trainingProgramJodgeYears = TrainingProgram::where('category', 'judge')->get()->groupBy('year')->reverse();
        $trainingProgramJodgeYears = Helpers::datesSortHelper($trainingProgramJodgeYears);

        $trainingProgramProsecutorYears = TrainingProgram::where('category', 'prosecutor')->get()->groupBy('year')->reverse();
        $trainingProgramProsecutorYears = Helpers::datesSortHelper($trainingProgramProsecutorYears);

        $trainingProgramInvestigatorYears = TrainingProgram::where('category', 'investigator')
            ->get()->groupBy('year')->reverse();
        $trainingProgramInvestigatorYears = Helpers::datesSortHelper($trainingProgramInvestigatorYears);

        return view('training-programs', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'trainingProgramJodgeYears' => $trainingProgramJodgeYears,
            'trainingProgramProsecutorYears' => $trainingProgramProsecutorYears,
            'trainingProgramInvestigatorYears' => $trainingProgramInvestigatorYears,
        ]);
    }
    public function trainingPrograms(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $trainingProgramJodgeYears = TrainingProgram::where('category', 'judge')->get()->groupBy('year')->reverse();
        $trainingProgramJodgeYears = Helpers::datesSortHelper($trainingProgramJodgeYears);

        $trainingProgramProsecutorYears = TrainingProgram::where('category', 'prosecutor')->get()->groupBy('year')->reverse();
        $trainingProgramProsecutorYears = Helpers::datesSortHelper($trainingProgramProsecutorYears);

        $trainingProgramInvestigatorYears = TrainingProgram::where('category', 'investigator')
            ->get()->groupBy('year')->reverse();
        $trainingProgramInvestigatorYears = Helpers::datesSortHelper($trainingProgramInvestigatorYears);

        return view('training-programs', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'trainingProgramJodgeYears' => $trainingProgramJodgeYears,
            'trainingProgramProsecutorYears' => $trainingProgramProsecutorYears,
            'trainingProgramInvestigatorYears' => $trainingProgramInvestigatorYears,
        ]);
    }
    public function trainingProgramSingle($year, $category){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $trainingPrograms = TrainingProgram::where('category', $category)->where('year', $year)->orderBy('id', 'DESC')
            ->get();

        return view('training-program-single', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'trainingPrograms' => $trainingPrograms,
            'year' => $year,
            'category' => $category,
        ]);
    }




    // conducting exams
    public function conductingExams(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $conductingExams = ConductingExam::all();
        $conductingExamVideos = ConductingExamVideo::all();

        return view('conducting-exams', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'conductingExams' => $conductingExams,
            'conductingExamVideos' => $conductingExamVideos,
        ]);
    }
    public function conductingPractice(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $conductingPractices = ConductingPractice::paginate(10);

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $conductingPractices,
            'downloadLink' => 'conductingPracticeDownload',
        ]);
    }
    public function rulesOfBehavior(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $data = BehaviorRule::paginate(10);

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $data,
            'downloadLink' => 'rulesOfBehaviorDownload',
        ]);
    }
    public function dormitoryRules(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $data = DormitoryRule::paginate(10);

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $data,
            'downloadLink' => 'dormitoryRulesDownload',
        ]);
    }
    public function provideDeferral(){
        $headersBot = Subheader::where('parent_id', 3)->get();
        $data = ProvideDeferral::paginate(10);

        return view('pdfs-download', [
            'headers' => $this->getHeader(),
            'headersBot' => $headersBot,
            'sitesLinks' => $this->getSitesLinks(),
            'data' => $data,
            'downloadLink' => 'provideDeferralDownload',
        ]);
    }
}
