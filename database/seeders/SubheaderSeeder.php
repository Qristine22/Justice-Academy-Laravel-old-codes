<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubheaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subheaders')->insert([
            [
                'name_en' => 'Governing Board of the Academy',
                'name_am' => 'Ակադեմիայի կառավարման խորհուրդ',
                'name_ru' => 'Совет правления Академии',
                'link' => 'about/governing-board',
                'parent_id' => 1,
            ],
            [
                'name_en' => 'Rector of Academy',
                'name_am' => 'Ակադեմիայի ռեկտոր',
                'name_ru' => 'Ректор Академии',
                'link' => 'about/rector',
                'parent_id' => 1,
            ],
            [
                'name_en' => 'Structure of Academy',
                'name_am' => 'Ակադեմիայի կառուցվածք',
                'name_ru' => 'Структура Академии',
                'link' => 'about/academy-structure',
                'parent_id' => 1,
            ],
            [
                'name_en' => 'Reports and audit conclusion',
                'name_am' => 'Հաշվետվություններ և աուդիտորական եզրակացություններ',
                'name_ru' => 'Отчёты и аудиторские заключения',
                'link' => 'about/report',
                'parent_id' => 1,
            ],
            [
                'name_en' => 'Graduates of Academy',
                'name_am' => 'Ակադեմիայի շրջանավարտներ',
                'name_ru' => 'Выпускники Академии',
                'link' => 'about/graduates',
                'parent_id' => 1,
            ],
            [
                'name_en' => 'Admission',
                'name_am' => 'Ընդունելություն',
                'name_ru' => 'Приём',
                'link' => 'about/admission',
                'parent_id' => 1,
            ],
            [
                'name_en' => 'Gallery',
                'name_am' => 'Տեսադարան',
                'name_ru' => 'Галерея',
                'link' => 'about/gallery',
                'parent_id' => 1,
            ],
            [
                'name_en' => 'Mass Media about us',
                'name_am' => 'ԶԼՄ-ները մեր մասին',
                'name_ru' => 'СМИ о нас',
                'link' => 'about/mass-media',
                'parent_id' => 1,
            ],
            [
                'name_en' => 'Training programs',
                'name_am' => 'Ուսուցման ծրագրեր',
                'name_ru' => 'Учебные программы',
                'link' => 'full-time-education/training-programs',
                'parent_id' => 3,
            ],
            [
                'name_en' => 'Order for conducting exams',
                'name_am' => 'Քննությունների անցկացման կարգ',
                'name_ru' => 'Порядок проведения экзаменов',
                'link' => 'full-time-education/conducting-exams',
                'parent_id' => 3,
            ],
            [
                'name_en' => 'Order for conducting practice',
                'name_am' => 'Փորձաշրջանի անցկացման կարգ',
                'name_ru' => 'Порядок проведения практики',
                'link' => 'full-time-education/conducting-practice',
                'parent_id' => 3,
            ],
            [
                'name_en' => 'Rules of trainee\'s behavior',
                'name_am' => 'Ունկնդրի վարքագծի կանոններ',
                'name_ru' => 'Правила поведения слушателя',
                'link' => 'full-time-education/rules-of-behavior',
                'parent_id' => 3,
            ],
            [
                'name_en' => 'Order for making use of the hotel complex',
                'name_am' => 'Հանրակացարանային համալիրից օգտվելու կարգ',
                'name_ru' => 'Порядок пользования гостиничным комплексом',
                'link' => 'full-time-education/dormitory-rules',
                'parent_id' => 3,
            ],
            [
                'name_en' => 'Order of providing deferment to the trainees',
                'name_am' => 'Ունկնդիրներին տարկետում տրամադրելու կարգ',
                'name_ru' => 'Порядок предоставления отсрочки слушателям',
                'link' => 'full-time-education/provide-deferral',
                'parent_id' => 3,
            ],
            [
                'name_en' => 'Instructional Video Materials',
                'name_am' => 'Տեղեկատվական տեսանյութեր',
                'name_ru' => 'Информационныe видеоматериалы',
                'link' => 'distance-learning/video-materials',
                'parent_id' => 4,
            ],
            [
                'name_en' => 'Courses',
                'name_am' => 'Դասընթացներ',
                'name_ru' => 'Курсы',
                'link' => 'distance-learning/courses',
                'parent_id' => 4,
            ],
            [
                'name_en' => 'Publications of the Academy of Justice',
                'name_am' => 'Արդարադատության ակադեմիայի հրատարակություններ',
                'name_ru' => 'Публикации Академии юстиции',
                'link' => 'library/academy-publications',
                'parent_id' => 5,
            ],
            [
                'name_en' => 'Manuals',
                'name_am' => 'Ուսումնական ձեռնարկներ',
                'name_ru' => 'Учебные пособия',
                'link' => 'library/manuals',
                'parent_id' => 5,
            ],
            [
                'name_en' => 'A booklist of professional literature',
                'name_am' => 'Մասնագիտական գրականության ցանկ',
                'name_ru' => 'Список специализированной литературы',
                'link' => 'library/professional-literature',
                'parent_id' => 5,
            ],
            [
                'name_en' => 'Order for organizing of library activities',
                'name_am' => 'Գրադարանի գործունեության կազմակերպման կարգ',
                'name_ru' => 'Порядок организации деятельности библиотеки',
                'link' => 'library/organizing-library-activities',
                'parent_id' => 5,
            ],
            [
                'name_en' => 'Training materials',
                'name_am' => 'Ուսումնաօժանդակ նյութեր',
                'name_ru' => 'Учебные материалы',
                'link' => 'library/training-materials',
                'parent_id' => 5,
            ],
            [
                'name_en' => 'ECHR resources on jurisprudence',
                'name_am' => 'ՄԻԵԴ իրավաբանության վերաբերյալ ռեսուրսներ',
                'name_ru' => 'Юридические материалы ЕСПЧ',
                'link' => 'library/ECHR-resources',
                'parent_id' => 5,
            ],
            [
                'name_en' => 'Video Lectures',
                'name_am' => 'Տեսադասախոսություններ',
                'name_ru' => 'Видео лекции',
                'link' => 'library/video-lectures',
                'parent_id' => 5,
            ],
            [
                'name_en' => 'Modules for training of specialized investigators of cases involving juvenile',
                'name_am' => 'Անչափահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ',
                'name_ru' => 'Модули для переподготовки следователей, специализацией которых является расследование дел с участием несовершеннолетних',
                'link' => 'library/investigator-training-modules',
                'parent_id' => 5,
            ],
            [
                'name_en' => 'International',
                'name_am' => 'Միջազգային',
                'name_ru' => 'Международныe',
                'link' => 'partners?#international',
                'parent_id' => 7,
            ],
            [
                'name_en' => 'Foreign',
                'name_am' => 'Օտարերկրյա',
                'name_ru' => 'Иностранные',
                'link' => 'partners?#foreign',
                'parent_id' => 7,
            ],
            [
                'name_en' => 'Armenian and Artsakh’s',
                'name_am' => 'Հայաստանյան և Արցախյան',
                'name_ru' => 'Армянскиe и Арцахскиe',
                'link' => 'partners?#arm&artsakh',
                'parent_id' => 7,
            ],
        ]);
    }
}
