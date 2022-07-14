<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;


// Models
use App\Models\News;
use App\Models\About;
use App\Models\Header;
use App\Models\Report;
use App\Models\Worker;
use App\Models\Gallery;
use App\Models\Library;
use App\Models\Partner;
use App\Models\Bulletin;
use App\Models\EchrLink;
use App\Models\Graduate;
use App\Models\Admission;
use App\Models\Candidate;
use App\Models\SitesLink;
use App\Models\LibraryPdf;
use App\Models\MassMedium;
use App\Models\ContactPage;
use App\Models\RectorsPage;
use App\Models\BehaviorRule;
use App\Models\BulletinInfo;
use App\Models\ContactStaff;
use App\Models\GalleryVideo;
use App\Models\VideoLecture;
use App\Models\DormitoryRule;
use App\Models\RectorsDecree;
use App\Models\ConductingExam;
use App\Models\ProvideDeferral;
use App\Models\TrainingProgram;
use App\Models\AcademyStructure;
use App\Models\DistanceLearning;
use App\Models\RectorsBiography;
use App\Models\MotivationalVideo;
use App\Models\ConductingPractice;
use App\Models\GoverningBoardPage;
use App\Models\GoverningBoardStaff;
use App\Models\DistanceLearningBook;
use App\Models\GoverningBoardDecree;
use App\Models\DistanceLearningGuide;
use App\Models\DistanceLearningVideo;
use App\Models\DistanceLearningCourse;
use App\Models\FormerRectorsBiography;
use App\Models\FrequentlyAskedQuestion;
use App\Models\DistanceLearningBooksPdf;
use App\Models\DistanceLearningAssignment;
use App\Models\DistanceLearningVideoMaterial;
use App\Models\DistanceLearningAdditionalMaterial;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if (isset($request->search) && !empty($request->search)) {
            $query = $request->search;
        } else {
            return redirect()->back();
        }

        $news = News::where('title_en', 'LIKE', "%$query%")
            ->orwhere('title_am', 'LIKE', "%$query%")
            ->orwhere('title_ru', 'LIKE', "%$query%")
            ->orwhere('description_en', 'LIKE', "%$query%")
            ->orwhere('description_am', 'LIKE', "%$query%")
            ->orwhere('description_ru', 'LIKE', "%$query%")
            ->orwhere('date', 'LIKE', "%$query%")
            ->get();

        $abouts = About::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->get();

        $reports = Report::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('year', 'LIKE', "%$query%")
            ->get();

        $workers = Worker::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('position_en', 'LIKE', "%$query%")
            ->orwhere('position_am', 'LIKE', "%$query%")
            ->orwhere('position_ru', 'LIKE', "%$query%")
            ->orwhere('biography_en', 'LIKE', "%$query%")
            ->orwhere('biography_am', 'LIKE', "%$query%")
            ->orwhere('biography_ru', 'LIKE', "%$query%")
            ->get();

        $partners = Partner::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('description_en', 'LIKE', "%$query%")
            ->orwhere('description_am', 'LIKE', "%$query%")
            ->orwhere('description_ru', 'LIKE', "%$query%")
            ->orwhere('category', 'LIKE', "%$query%")
            ->get();

        $bulletins = Bulletin::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $galleries = Gallery::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->orwhere('year', 'LIKE', "%$query%")
            ->orwhere('full_date', 'LIKE', "%$query%")
            ->get();

        $echrLinks = EchrLink::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $graduates = Graduate::where('name', 'LIKE', "%$query%")
            ->orwhere('info', 'LIKE', "%$query%")
            ->orwhere('year', 'LIKE', "%$query%")
            ->orwhere('position', 'LIKE', "%$query%")
            ->get();

        $admissions = Admission::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->get();

        $candidates = Candidate::where('text', 'LIKE', "%$query%")->get();

        $libraryPdfs = LibraryPdf::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('category', 'LIKE', "%$query%")
            ->get();

        $massMedia = MassMedium::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->orwhere('year', 'LIKE', "%$query%")
            ->get();

        $contactPages = ContactPage::where('address_en', 'LIKE', "%$query%")
            ->orwhere('address_am', 'LIKE', "%$query%")
            ->orwhere('address_ru', 'LIKE', "%$query%")
            ->orwhere('mail', 'LIKE', "%$query%")
            ->orwhere('phone', 'LIKE', "%$query%")
            ->get();

        $rectorsPages = RectorsPage::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->get();

        $behaviorRules = BehaviorRule::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $bulletinInfos = BulletinInfo::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $contactStaffs = ContactStaff::where('position_en', 'LIKE', "%$query%")
            ->orwhere('position_am', 'LIKE', "%$query%")
            ->orwhere('position_ru', 'LIKE', "%$query%")
            ->orwhere('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('phone', 'LIKE', "%$query%")
            ->orwhere('mail', 'LIKE', "%$query%")
            ->get();

        $GalleryVideos = GalleryVideo::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->orwhere('full_date', 'LIKE', "%$query%")
            ->orwhere('year', 'LIKE', "%$query%")
            ->get();

        $videoLectures = VideoLecture::where('topic_en', 'LIKE', "%$query%")
            ->orwhere('topic_am', 'LIKE', "%$query%")
            ->orwhere('topic_ru', 'LIKE', "%$query%")
            ->orwhere('lecturer_en', 'LIKE', "%$query%")
            ->orwhere('lecturer_am', 'LIKE', "%$query%")
            ->orwhere('lecturer_ru', 'LIKE', "%$query%")
            ->get();

        $dormitoryRules = DormitoryRule::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $rectorsDecree = RectorsDecree::where('info_en', 'LIKE', "%$query%")
            ->orwhere('info_am', 'LIKE', "%$query%")
            ->orwhere('info_ru', 'LIKE', "%$query%")
            ->orwhere('pdf_name', 'LIKE', "%$query%")
            ->get();

        $conductingExams = ConductingExam::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $provideDeferrals = ProvideDeferral::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $trainingPrograms = TrainingProgram::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('description', 'LIKE', "%$query%")
            ->orwhere('year', 'LIKE', "%$query%")
            ->orwhere('category', 'LIKE', "%$query%")
            ->get();

        $academyStructures = AcademyStructure::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('link', 'LIKE', "%$query%")
            ->get();

        $distanceLearnings = DistanceLearning::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->get();

        $rectorsBiographies = RectorsBiography::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('position_en', 'LIKE', "%$query%")
            ->orwhere('position_am', 'LIKE', "%$query%")
            ->orwhere('position_ru', 'LIKE', "%$query%")
            ->orwhere('biography_en', 'LIKE', "%$query%")
            ->orwhere('biography_am', 'LIKE', "%$query%")
            ->orwhere('biography_ru', 'LIKE', "%$query%")
            ->get();

        $conductingPractices = ConductingPractice::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $governingBoardPages = GoverningBoardPage::where('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->get();

        $governingBoardStaffs = GoverningBoardStaff::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('position_en', 'LIKE', "%$query%")
            ->orwhere('position_am', 'LIKE', "%$query%")
            ->orwhere('position_ru', 'LIKE', "%$query%")
            ->orwhere('biography', 'LIKE', "%$query%")
            ->get();

        $distanceLearningBooks = DistanceLearningBook::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $governingBoardDecrees = GoverningBoardDecree::where('info_en', 'LIKE', "%$query%")
            ->orwhere('info_am', 'LIKE', "%$query%")
            ->orwhere('info_ru', 'LIKE', "%$query%")
            ->orwhere('pdf_name', 'LIKE', "%$query%")
            ->orwhere('year', 'LIKE', "%$query%")
            ->get();

        $distanceLearningGuides = DistanceLearningGuide::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $distanceLearningVideos = DistanceLearningVideo::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->get();

        $distanceLearningCourses = DistanceLearningCourse::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('syllabus_en', 'LIKE', "%$query%")
            ->orwhere('syllabus_am', 'LIKE', "%$query%")
            ->orwhere('syllabus_ru', 'LIKE', "%$query%")
            ->orwhere('syllabus_pdf_name_en', 'LIKE', "%$query%")
            ->orwhere('syllabus_pdf_name_am', 'LIKE', "%$query%")
            ->orwhere('syllabus_pdf_name_ru', 'LIKE', "%$query%")
            ->get();

        $formerRectorsBiographies = FormerRectorsBiography::where('name_en', 'LIKE', "%$query%")
            ->orwhere('name_am', 'LIKE', "%$query%")
            ->orwhere('name_ru', 'LIKE', "%$query%")
            ->orwhere('position_en', 'LIKE', "%$query%")
            ->orwhere('position_am', 'LIKE', "%$query%")
            ->orwhere('position_ru', 'LIKE', "%$query%")
            ->orwhere('biography_en', 'LIKE', "%$query%")
            ->orwhere('biography_am', 'LIKE', "%$query%")
            ->orwhere('biography_ru', 'LIKE', "%$query%")
            ->get();

        $frequentlyAskedQuestions = FrequentlyAskedQuestion::where('title_en', 'LIKE', "%$query%")
            ->orwhere('title_am', 'LIKE', "%$query%")
            ->orwhere('title_ru', 'LIKE', "%$query%")
            ->orwhere('text_en', 'LIKE', "%$query%")
            ->orwhere('text_am', 'LIKE', "%$query%")
            ->orwhere('text_ru', 'LIKE', "%$query%")
            ->get();




        $data = Collection::wrap(array($news))->concat(array($contactStaffs))->concat(array($contactPages))
            ->concat(array($workers))->concat(array($partners))->concat(array($massMedia))->concat(array($abouts))
            ->concat(array($rectorsPages))->concat(array($echrLinks))->concat(array($academyStructures))->concat(array($graduates))
            ->concat(array($bulletinInfos))->concat(array($admissions))->concat(array($candidates))->concat(array($libraryPdfs))
            ->concat(array($behaviorRules))->concat(array($galleries))->concat(array($GalleryVideos))
            ->concat(array($reports))->concat(array($videoLectures))->concat(array($dormitoryRules))
            ->concat(array($rectorsDecree))->concat(array($conductingExams))->concat(array($provideDeferrals))
            ->concat(array($trainingPrograms))->concat(array($distanceLearnings))->concat(array($rectorsBiographies))
            ->concat(array($conductingPractices))->concat(array($governingBoardPages))->concat(array($governingBoardStaffs))
            ->concat(array($distanceLearningBooks))->concat(array($governingBoardDecrees))->concat(array($distanceLearningGuides))
            ->concat(array($distanceLearningVideos))->concat(array($distanceLearningCourses))
            ->concat(array($formerRectorsBiographies))->concat(array($frequentlyAskedQuestions));






        $headers = Header::headers();
        $sitesLinks = SitesLink::all();
        return view('search', [
            'headers' => $headers,
            'sitesLinks' => $sitesLinks,
            'searchResults' => $data,
        ]);
    }
}
