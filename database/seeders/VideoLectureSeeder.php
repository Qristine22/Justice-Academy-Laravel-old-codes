<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoLectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_lectures')->insert([
            [
                'topic_en' => '“Sociology of mafias”',
                'topic_am' => '«Մաֆիայի սոցիոլոգիա»',
                'topic_ru' => '«Социология мафии»',
                'lecturer_en' => 'Georgi Derluguian',
                'lecturer_am' => 'պրոֆեսոր Գեորգի Դերլուգյան',
                'lecturer_ru' => 'професcор Георгий Дерлугьян',
                'video' => '<iframe width="672" height="378" src="https://www.youtube.com/embed/Rlb6vGChevE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'topic_en' => '"Error in making strategic decisions"',
                'topic_am' => '«Սխալը՝ ռազմավարական որոշումներ ընդունելիս»',
                'topic_ru' => '«Ошибка при принятии стратегических решений»',
                'lecturer_en' => 'General Director of Beeline in Armenia Andrey Pyatakhin',
                'lecturer_am' => 'Հայաստանում Beeline-ի գլխավոր տնօրեն Անդրեյ Պյատախին',
                'lecturer_ru' => 'Генеральный директор Beeline в Армении Андрей Пятахин',
                'video' => '<iframe width="672" height="378" src="https://www.youtube.com/embed/21Nr_E2oElA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'topic_en' => '"Reforms of state service in Prosecutor General’s Office of Ukraine"',
                'topic_am' => '«Ուկրաինայի դատախազության մարմիններում պետական ծառայության բարեփոխումները»',
                'topic_ru' => '«Реформирование государственной службы в органах прокуратуры Украины»',
                'lecturer_en' => 'Head of the unit of advanced training of public servants of the prosecutor\'s office of National Prosecution Academy of Ukraine Natalia Naulik',
                'lecturer_am' => 'Ուկրաինայի դատախազության ազգային ակադեմիայի դատախազության պետական ծառայողների որակավորման բարձրացման բաժնի պետ Նատալյա Նաուլիկ',
                'lecturer_ru' => 'Начальник отдела повышения квалификации государственных служащих органов прокуратуры Национальной академии прокуратуры Украины Наталия Наулик',
                'video' => '<iframe width="672" height="378" src="https://www.youtube.com/embed/ApZn59536ls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'topic_en' => '"Ways of prevention of corruption risks in the activity of state servants of Prosecutor General\'s Office of Ukraine”',
                'topic_am' => '«Ուկրաինայի դատախազության պետական ծառայողների գործունեության մեջ կոռուպցիոն ռիսկերի առաջացման կանխարգելման ուղիները»',
                'topic_ru' => '«Способы предотвращения возникновения коррупционных рисков деятельности государственных служащих органов прокуратуры Украины»',
                'lecturer_en' => 'Head of the unit of raising of qualification of prosecutors\' for corruption prevention of National Prosecution Academy of Ukraine Zoya Zaginey',
                'lecturer_am' => 'Ուկրաինայի դատախազության ազգային ակադեմիայի կոռուպցիայի կանխարգելման հարցերով դատախազների որակավորման բարձրացման բաժնի պետ Զոյա Զագինեյ',
                'lecturer_ru' => 'Начальник отдела повышения квалификации прокуроров по вопросам предотвращения коррупции Национальной академии прокуратуры Украины Зоя Загиней',
                'video' => '<iframe width="772" height="478" src="https://www.youtube.com/embed/tfHLmn67z94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'topic_en' => '"The peculiarities of judicial system and the activity of Academy of Justice of Croatia"',
                'topic_am' => '«Խորվաթիայի դատական համակարգի և Արդարադատության ակադեմիայի գործունեության առանձնահատկությունները»',
                'topic_ru' => '«Особенности деятельности судебной системы и Академии юстиции Хорватии»',
                'lecturer_en' => 'Chairman of the Supreme Court Duro Sessa and Director of the Academy of Justice Andrea Posavec Franić',
                'lecturer_am' => 'Խորվաթիայի գերագույն դատարանի նախագահ Դուրո Սեսա և Արդարադատության ակադեմիայի տնօրեն Անդրեա Պոսավեց Ֆրանիչ',
                'lecturer_ru' => 'Председатель Верховного суда Дуро Сеса и Директор Академии юстиции Андреа Посавец Франич',
                'video' => '<iframe width="672" height="378" src="https://www.youtube.com/embed/cepArXl4C3Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'topic_en' => '"The role of international legal norms in ensuring the uniform perception and application of EAEU law in the daily activities of law enforcement bodies of the EAEU Court "',
                'topic_am' => '«Միջազգային իրավական նորմերի դերը իրավապահ մարմինների և ԵԱՏՄ դատարանի ամենօրյա գործունեության մեջ՝ ԵԱՏՄ իրավունքի միատեսակ ընկալման և կիրառման ապահովման գործում»',
                'topic_ru' => '«Роль международно-правовых норм в повседневной деятельности органов правопорядка и правосудия и деятельность Суда Евразийского экономического союза в деле обеспечения единообразного понимания и применения права ЕАЭС»',
                'lecturer_en' => 'President of the EAEU Court Erna Hayriyan and Judge Alexander Fedortsov',
                'lecturer_am' => 'ԵԱՏՄ դատարանի նախագահ Էռնա Հայրիյան և դատավոր Ալեքսանդր Ֆեդորցով',
                'lecturer_ru' => 'председатель Суда ЕАЭС Эрна Айриян и судья Александр Федорцов',
                'video' => '<iframe width="772" height="478" src="https://www.youtube.com/embed/zGWhWeamVGY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'topic_en' => '"Possible Mechanisms for Punishing War Crimes"',
                'topic_am' => '«Պատերազմական հանցագործությունների պատժելիության հնարավոր մեխանիզմները»',
                'topic_ru' => '«Возможные механизмы наказания за военные преступления»',
                'lecturer_en' => 'Head of the International Criminal Law Research Group of Friedrich–Alexander University Erlangen–Nurnberg Gurgen Petrosyan',
                'lecturer_am' => 'Ֆրիդրիխ-Ալեքսանդր Էռլանգեն-Նյուրնբերգի համալսարանի միջազգային քրեական իրավունքի հետազոտման խմբի ղեկավար Գուրգեն Պետրոսյան',
                'lecturer_ru' => 'Руководитель исследовательской группы международного уголовного права университета им. Фридриха-Александра в Эрлангене и Нюрнберге Гурген Петросян',
                'video' => '<iframe width="772" height="478" src="https://www.youtube.com/embed/mme4h9XfJkI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'topic_en' => '"The issues of application of the new Criminal Code of the RA"',
                'topic_am' => '«ՀՀ քրեական նոր օրենսգրքի կիրառման հիմնախնդիրները»',
                'topic_ru' => '«Проблемы применения нового Уголовного кодекса РА»',
                'lecturer_en' => 'national expert, professor of chair of Criminal law of YSU Anna Margaryan',
                'lecturer_am' => 'ԵՊՀ քրեական իրավունքի ամբիոնի պրոֆեսոր Աննա Մարգարյան',
                'lecturer_ru' => 'национальный эксперт, профессор кафедры уголовного права ЕГУ Анна Маргарян',
                'video' => '<iframe width="772" height="478" src="https://www.youtube.com/embed/FqDvl1WtXCo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'topic_en' => '«ՀՀ քրեական դատավարության նոր օրենսգրքի կիրառման հիմնախնդիրները»',
                'topic_am' => '«ՀՀ քրեական դատավարության նոր օրենսգրքի կիրառման հիմնախնդիրները»',
                'topic_ru' => '«ՀՀ քրեական դատավարության նոր օրենսգրքի կիրառման հիմնախնդիրները»',
                'lecturer_en' => 'Իրավաբանական գիտությունների թեկնածու, դոցենտ Հրայր Ղուկասյան',
                'lecturer_am' => 'Իրավաբանական գիտությունների թեկնածու, դոցենտ Հրայր Ղուկասյան',
                'lecturer_ru' => 'Իրավաբանական գիտությունների թեկնածու, դոցենտ Հրայր Ղուկասյան',
                'video' => '<iframe width="772" height="478" src="https://www.youtube.com/embed/1lGRmuwj_lc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
        ]);
    }
}
