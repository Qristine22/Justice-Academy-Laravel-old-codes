<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(SubheaderSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(GoverningBoardPageSeeder::class);
        $this->call(GoverningBoardDecreeSeeder::class);
        $this->call(GoverningBoardStaffSeeder::class);
        $this->call(RectorsPageSeeder::class);
        $this->call(RectorsDecreeSeeder::class);
        $this->call(RectorsBiographySeeder::class);
        $this->call(FormerRectorsBiographySeeder::class);
        $this->call(AcademyStructureSeeder::class);
        $this->call(WorkersSeeder::class);
        $this->call(WorkersImgsSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(GraduateSeeder::class);
        $this->call(AdmissionSeeder::class);
        $this->call(CandidateSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(GalleryImgSeeder::class);
        $this->call(GalleryVideoSeeder::class);
        $this->call(MassMediaSeeder::class);
        $this->call(MassMediaLinkSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(NewsImgSeeder::class);
        $this->call(TrainingProgramSeeder::class);
        $this->call(ConductingExamSeeder::class);
        $this->call(ConductingExamVideoSeeder::class);
        $this->call(ConductingPracticeSeeder::class);
        $this->call(BehaviorRuleSeeder::class);
        $this->call(DormitoryRuleSeeder::class);
        $this->call(ProvideDeferralSeeder::class);
        $this->call(DistanceLearningSeeder::class);
        $this->call(DistanceLearningVideoSeeder::class);
        $this->call(DistanceLearningBookSeeder::class);
        $this->call(DistanceLearningBookPdfSeeder::class);
        $this->call(DistanceLearningAssignmentSeeder::class);
        $this->call(MotivationalVideoSeeder::class);
        $this->call(DistanceLearningAdditionalMaterialSeeder::class);
        $this->call(DistanceLearningAdditionalMaterialLinkSeeder::class);
        $this->call(VideoMaterialSeeder::class);
        $this->call(LibrarySeeder::class);
        $this->call(VideoLectureSeeder::class);
        $this->call(DistanceLearningGuideSeeder::class);
        $this->call(DistanceLearningCourseSeeder::class);
        $this->call(ECHRLinkSeeder::class);
        $this->call(LibraryPdfSeeder::class);
        $this->call(BulletinInfoSeeder::class);
        $this->call(BulletinSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(PartnerLinkSeeder::class);
        $this->call(ContactPageSeeder::class);
        $this->call(ContactStaffSeeder::class);
        $this->call(FAQSeeder::class);
        $this->call(SitesLinkSeeder::class);
    }
}
