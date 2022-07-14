<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            [
                'name_en' => 'Ashot Hayrapetyan',
                'name_am' => 'Աշոտ Հայրապետյան',
                'name_ru' => 'Ашот Айрапетян',
                'position_en' => 'Vice-rector of the Academy of Justice',
                'position_am' => 'Արդարադատության ակադեմիայի պրոռեկտոր',
                'position_ru' => 'Проректор Академии юстиции',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>29 April 1973, Yerevan</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1998-2000</p>
                <p>Yerevan State University, Master\'s degree at Faculty of International Relations</p>
                </li>
                <li>
                <p>1989-1994</p>
                <p>Yerevan State University, Faculty of Law</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Scientific degree, title</strong></p>
                <h4>Кандидат юридических наук, доцент</h4>
                </div>
                <div>
                <h4><strong>Work Experience</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>August 2021 up to now:</p>
                <p>Vice-rector of the Academy of Justice</p>
                </li>
                <li>
                <p>March 2020 up to now:</p>
                <p>Legal experts of the CoE program "Improving health care and protection of human rights in the prisons of the RA"</p>
                </li>
                <li>
                <p>2019 up to now:</p>
                <p>Deputy Chairman of the Council for Juvenile Justice</p>
                </li>
                <li>
                <p>2019 February-August:</p>
                <p>Associate Professor of Faculty of International Relations of the YSU, Chair of Theory and History of Political Science</p>
                </li>
                <li>
                <p>2016-2021:</p>
                <p>Director of the "Centre for the implementation of legal education and rehabilitation programmes" SNCO</p>
                </li>
                <li>
                <p>2004-2016:</p>
                <p>Director of "Law Institute of the Ministry of Justice of the RA" SNCO</p>
                </li>
                <li>
                <p>2004 February-June:</p>
                <p>Senior lecturer at the Chair of Theory of State and Law of the Armenian-Russian University</p>
                </li>
                <li>
                <p>2000-2004:</p>
                <p>Lecturer of the Armenian Agricultural Academy Department of Legal Basics and Industrial Management</p>
                </li>
                <li>
                <p>1995-2000:</p>
                <p>Leading specialist of the Department of amnesty, citizenship, awards and titles at the Staff of the President of the RA</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Other Information</strong></p>
                <h4>Doctoral Candidate at the Academy of Public Administration of the RA. The topic of the dissertation is &ldquo;Migration policy of the RA: theoretical and practical issues of the constitutional and legal regulation&rdquo;</h4>
                <h4>2021 up to now: Member of the Legal Specialized Council 041 of the Institute of Philosophy, Sociology and Law of the National Academy of Sciences of the RA</h4>
                <h4>2016-2019: Member of the Legal Dissertation Council 041 of the Academy of Public Administration of the RA</h4>
                <h4>2012, 2013, 2015, 2016, 2017, 2021: Chairman of the final attestation commission of the humanities specialties and law department of the Gavar State University</h4>
                <h4>Editor-in-Chief of the scientific journal "Justice", member of the editorial boards of "Messenger of the Ukrainian Penitentiary Association" scientific journal and the network scientific journal "International Penitentiary Journal of the RF&rdquo;</h4>
                <h4>Author of more than three dozen scientific articles, some of which have been published in international scientific journals, including the international databases Scopus and Web of Science, 2 monographs and 1 textbook.</h4>
                <h4>Liable for military service, reserve lieutenant</h4>
                </div>
                <div>
                <p><strong>Foreign Languages</strong></p>
                <h4>Russian, English</h4>
                </div>
                <div>
                <p><strong>Marital Status</strong></p>
                <h4>Married, have a daughter and a son</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>1973 թ., ապրիլ 29, ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1998-2000 թթ.</p>
                <p>ԵՊՀ միջազգային հարաբերությունների ֆակուլտետի մագիստրատուրա</p>
                </li>
                <li>
                <p>1989-1994 թթ.</p>
                <p>ԵՊՀ իրավաբանական ֆակուլտետ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Գիտական աստիճան, կոչում</strong></p>
                <h4>Իրավաբանական գիտությունների թեկնածու, դոցենտ</h4>
                </div>
                <div>
                <h4><strong>Աշխատանքային գործունեություն</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 թ.-ի օգոստոսից</p>
                <p>Արդարադատության ակադեմիայի պրոռեկտոր</p>
                </li>
                <li>
                <p>2020 թ.-ի մարտից</p>
                <p>ԵԽ &laquo;ՀՀ բանտերում առողջապահության և մարդու իրավունքների պաշտպանության բարելավում&raquo; ծրագրի իրավական փորձագետ</p>
                </li>
                <li>
                <p>2019 թ.-ից</p>
                <p>Անչափահասների արդարադատության խորհրդի նախագահի տեղակալ</p>
                </li>
                <li>
                <p>2019 թ.-ի փետրվար-օգոստոս</p>
                <p>ԵՊՀ միջազգային հարաբերությունների ֆակուլտետի քաղաքական գիտության պատմության և տեսության ամբիոնի դոցենտ</p>
                </li>
                <li>
                <p>2016-2021 թթ.</p>
                <p>&laquo;Իրավական կրթության և վերականգնողական ծրագրերի իրականացման կենտրոն&raquo; ՊՈԱԿ-ի տնօրեն</p>
                </li>
                <li>
                <p>2004-2016 թթ.</p>
                <p>&laquo;ՀՀ արդարադատության նախարարության իրավաբանական ինստիտուտ&raquo; ՊՈԱԿ-ի տնօրեն</p>
                </li>
                <li>
                <p>2004 թ.-ի փետրվար-հունիս</p>
                <p>Հայ-ռուսական համալսարանի պետության և իրավունքի տեսության ամբիոնի ավագ դասախոս</p>
                </li>
                <li>
                <p>2000-2004 թթ.</p>
                <p>Հայաստանի գյուղատնտեսական ակադեմիայի իրավաբանության հիմունքների և արտադրության կառավարման ամբիոնի դասախոս</p>
                </li>
                <li>
                <p>1995-2000 թթ.</p>
                <p>ՀՀ նախագահի աշխատակազմի ներման, քաղաքացիության, պարգևների և կոչումների վարչության առաջատար մասնագետ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <h4>ՀՀ պետական կառավարման ակադեմիայի դոկտորանտ, դոկտորական ատենախոսության թեման՝ &laquo;ՀՀ միգրացիոն քաղաքականությունը. սահմանադրաիրավական կարգավորման տեսական և կիրառական հիմնախնդիրները&raquo;</h4>
                <h4>2021 թ.-ից ՀՀ ԳԱԱ Փիլիսոփայության, սոցիոլոգիայի և իրավունքի ինստիտուտի իրավագիտության 041 մասնագիտական խորհրդի անդամ</h4>
                <h4>2016-2019 թթ. ՀՀ պետական կառավարման ակադեմիայի իրավագիտության 041 մասնագիտական խորհրդի անդամ</h4>
                <h4>2012, 2013, 2015, 2016, 2017, 2021 թթ.-ին Գավառի պետական համալսարանի հումանիտար մասնագիտությունների իրավագիտության բաժնի ամփոփիչ ատեստավորման հանձնաժողովի նախագահ</h4>
                <h4>&laquo;Արդարադատություն&raquo; գիտական հանդեսի գլխավոր խմբագիր, &laquo;Ուկրաինայի պենիտենցիար ասոցացիայի սուրհանդակ&raquo; գիտական ամսագրի և &laquo;ՌԴ միջազգային քրեակատարողական ամսագիր&raquo; ցանցային գիտական հանդեսի խմբագրական խորհուրդների անդամ</h4>
                <h4>Հեղինակ է 3 տասնյակից ավելի գիտական հոդվածների, որոնցից մի քանիսը տպագրվել են միջազգային գիտական հանդեսներում, այդ թվում՝ Scopus և Web of Science միջազգային գիտական շտեմարանային ցանկերում, 2 մենագրության և 1 ուսումնական ձեռնարկի</h4>
                <h4>Զինապարտ, պահեստազորի լեյտենանտ</h4>
                </div>
                <div>
                <p><strong>Օտար լեզուների իմացություն</strong></p>
                <h4>Ռուսերեն, անգլերեն</h4>
                </div>
                <div>
                <p><strong>Ընտանեկան դրություն</strong></p>
                <h4>Ամուսնացած է, ունի մեկ դուստր և մեկ որդի</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата и место рождения</strong></p>
                <h4>29 апреля 1974 года, г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1998-2000 гг.</p>
                <p>магистратура факультета Международных отношений Ереванского государственного университета</p>
                </li>
                <li>
                <p>1989-1994 гг.</p>
                <p>Юридический факультет Ереванского государственного университета</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Ученая степень, звание</strong></p>
                <h4>Кандидат юридических наук, доцент</h4>
                </div>
                <div>
                <p><strong>Трудовая деятельность</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>С августа 2021 г.</p>
                <p>по настоящее время проректор Академии юстиции</p>
                </li>
                <li>
                <p>С марта 2020 г.</p>
                <p>по настоящее время эксперт по правовым вопросам программы СЕ &laquo;Улучшение здравоохранения и защиты прав человека в тюрьмах РА&raquo;</p>
                </li>
                <li>
                <p>С 2019 г. по настоящее время</p>
                <p>заместитель председателя Совета юстиции по вопросам несовершеннолетних</p>
                </li>
                <li>
                <p>2019 г. февраль-август</p>
                <p>доцент кафедры истории и теории политической науки факультета международных отношений ЕГУ</p>
                </li>
                <li>
                <p>2016-2021 гг.</p>
                <p>директор &laquo;Центра правового образования и реализации реабилитационных программ&raquo; ГНКО</p>
                </li>
                <li>
                <p>2004-2016 гг.</p>
                <p>директор &laquo;Юридического института министерства юстиции РА&raquo; ГНКО</p>
                </li>
                <li>
                <p>2004 г. февраль-июнь</p>
                <p>старший преподаватель кафедры теории государства и права Армяно-Российского университета</p>
                </li>
                <li>
                <p>2000-2004 гг.</p>
                <p>преподаватель кафедры основы юриспруденции и управления производством Сельскохозяйственной академии Армении</p>
                </li>
                <li>
                <p>1995-2000 гг.</p>
                <p>ведущий специалист управления по вопросам помилований, гражданства, наград и званий аппарата президента РА</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Иные сведения</strong></p>
                <h4>Докторант Академии государственного управления РА. Тема докторской диссертации &laquo;Миграционная политика РА: теоретические и практические проблемы конституционно-правового регулирования&raquo;</h4>
                <h4>С 2021 г. член юридического специализированного совета 041 института философии, социологии и права НАН РА</h4>
                <h4>2016-2019 гг. член юридического диссертационного совета 041 Академии государственного управления РА</h4>
                <h4>2012 г., 2013 г., 2015 г., 2016 г., 2017 г., 2021 г. председатель итоговой аттестационной комиссии юридического отдела гуманитарных профессий Гаварского государственного университета</h4>
                <h4>Главный редактор журнала &laquo;Юстиция&raquo;, член редакционного совета &laquo;Вестник пенитенциарной ассоциации Украины&raquo; и российского научного сетевого журнала &laquo;Международный пенитенциарный журнал РФ&raquo;</h4>
                <h4>Автор более трех десятков научных статей, некоторые из которых были опубликованы в международных научных журналах, в том числе в международных научных журналах Scopus и Web of Science, 2-х монографий и 1-го учебного пособия.</h4>
                <h4>Военнообязанный, лейтенант запаса</h4>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>русский, английский</h4>
                </div>
                <div>
                <p><strong>Семейное положение</strong></p>
                <h4>Женат, имеет дочь и сына</h4>
                </div>',
            ],



            // ************************************************************************************************
            [
                'name_en' => 'Robert H. Shahinyan',
                'name_am' => 'Ռոբերտ Շահինյան',
                'name_ru' => 'Роберт Овсепович Шагинян',
                'position_en' => 'Chief of Staff',
                'position_am' => 'Աշխատակազմի ղեկավար',
                'position_ru' => 'Начальник штаба',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>19.01.1979, Yerevan</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2004:</p>
                <p>Faculty of Law, Moscow State Pedagogical University</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Work experience</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>February 2017-present:</p>
                <p>Chief of Staff of the Academy of Justice</p>
                </li>
                <li>
                <p>November 2016 - February 2017:</p>
                <p>Head of the Department of the Full-Time Education of the Academy of Justice</p>
                </li>
                <li>
                <p>2014-2016:</p>
                <p>"Dominant Production" Consultant of negotiation and legal issues at the production of TV programs of Russian-Armenian company, Yerevan</p>
                </li>
                <li>
                <p>2013-2014:</p>
                <p>Executive Director of the "Arsmartsim" Russian-Armenian company in the field of telecommunication, Yerevan</p>
                </li>
                <li>
                <p>2006-2009:</p>
                <p>Director of the "Rosnor Hydro" Investment Company, Republic of Cyprus</p>
                </li>
                <li>
                <p>2006&ndash;2009:</p>
                <p>General Director of the "IMPEX POLARIS" Russian-Norwegian Energy Company, Moscow</p>
                </li>
                <li>
                <p>2005-2006:</p>
                <p>Legal consultant at the "Alliance Projects Construction Company՛՛ LLC, Moscow</p>
                </li>
                <li>
                <p>2005-2006:</p>
                <p>Legal consultant at the "IMPEX POLARIS" Russian-Norwegian Energy Company, Moscow</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Foreign Languages</strong></p>
                <h4>Russian, English, Ukrainian, Turkish</h4>
                </div>
                <div>
                <p><strong>Awards</strong></p>
                <h4>Golden Medal of the Academy of Justice of RA, On the occasion of the 5th anniversary of the foundation of the Academy of Justice of RA, Yerevan 2018 Letter of appreciation, Academy of Justice</h4>
                </div>
                <div>
                <p><strong>Other information</strong></p>
                <h4>Service in the Armed Forces of RA</h4>
                </div>
                <div>
                <p><strong>Marital Status</strong></p>
                <h4>Married, has two daughters</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>19.01.1979, ք․ Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2004 թ.</p>
                <p>Մոսկվայի մանկավարժական պետական համալսարանի իրավաբանական ֆակուլտետ</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Աշխատանքային փորձ</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ. փետրվարի 1-ից</p>
                <p>Արդարադատության ակադեմիայի աշխատակազմի ղեկավար</p>
                </li>
                <li>
                <p>2016 թ. նոյեմբերից-2017թ. փետրվար&nbsp;</p>
                <p>Արդարադատության ակադեմիայի առկա ուսուցման վարչության պետ</p>
                </li>
                <li>
                <p>2014-2016 թթ.</p>
                <p>&laquo;Դոմինանտ պրոդաքշն&raquo; հեռուստահաղորդումների արտադրանք իրականացնող ռուս-հայկական ընկերությունում բանակցային-իրավական հարցերով խորհրդատու, Երևան</p>
                </li>
                <li>
                <p>2013-2014 թթ.</p>
                <p>&laquo;Արսմարթսիմ&raquo; հեռահաղորդակցության ոլորտում աշխատող ռուս-հայկական կազմակերպության գործադիր տնօրեն, Երևան</p>
                </li>
                <li>
                <p>2006-2009 թթ.</p>
                <p>&laquo;Ռոսնոր հիդրո&raquo; ներդրումային կազմակերպության տնօրեն, Կիպրոսի Հանրապետություն</p>
                </li>
                <li>
                <p>2006-2009 թթ.</p>
                <p>&laquo;Իմպեքս Պոլյարիս&raquo; ռուս-նորվեգական էներգետիկ կազմակերպության գլխավոր տնօրեն, ՌԴ, Մոսկվա</p>
                </li>
                <li>
                <p>2005-2006 թթ.</p>
                <p>&laquo;Պրոյեկտնի Ալյանս շինարարական կազմակերպություն&raquo; ՍՊԸ-ում իրավախորհրդատու, ՌԴ, Մոսկվա</p>
                </li>
                <li>
                <p>2005-2006 թթ.</p>
                <p>&laquo;Իմպեքս Պոլյարիս&raquo; ռուս-նորվեգական էներգետիկ կազմակերպության իրավախորհրդատու, ՌԴ, Մոսկվա</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, անգլերեն, ուկրաիներեն, թուրքերեն</h4>
                </div>
                <div>
                <p><strong>Պարգևներ</strong></p>
                <h4>Ոսկե Մեդալ, Արդարադատության ակադեﬕայի հիﬓադրման 5-ամյակի կապակցությամբ, Արդարադատության ակադեմիա, Երևան, 2018 թ. Շնորհակալագիր, Արդարադատության ակադեմիա</h4>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <h4>Ծառայել է ՀՀ զինված ուժերում</h4>
                </div>
                <div>
                <p><strong>Ընտանեկան կարգավիճակ</strong></p>
                <h4>Ամուսնացած է, ունի երկու դուստր</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата, место рождения</strong></p>
                <h4>19.01.1979, г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2004 г.</p>
                <p>Юридический факультет Московского педагогического государственного университета</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Трудовая деятельность&nbsp;</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>С 1-го февраля 2017 г.</p>
                <p>руководитель аппарата Академии юстиции</p>
                </li>
                <li>
                <p>С ноября 2016 г. по февраль 2017 г.</p>
                <p>начальник управления очного обучения Академии юстиции</p>
                </li>
                <li>
                <p>2014-2016 гг.</p>
                <p>консультант по договорно-правовым вопросам ЗАО &laquo;Доминант Продакшн&raquo; (Российско-Армянская компания по производству телерадиопродукции), Ереван</p>
                </li>
                <li>
                <p>2013-2014 гг.</p>
                <p>Директор ООО &laquo;АрСмартСим&raquo; (Российско-Армянская компания мобильной связи), Ереван</p>
                </li>
                <li>
                <p>2006-2009 гг.</p>
                <p>Директор &laquo;ROSNOR HYDRO&raquo; (Инвестиционная компания), Республика Кипр</p>
                </li>
                <li>
                <p>2006-2009 гг.</p>
                <p>Генеральный директор OOO &laquo;ИМПЭКС ПОЛЯРИС&raquo; (ROSNOR) (Российско-Норвежская энергетическая компания), РФ, г. Москва</p>
                </li>
                <li>
                <p>2005-2006 гг.</p>
                <p>Юрисконсульт OOO &laquo;Строительная Компания &laquo;Проектный Альянс&raquo;&raquo; (проектирование, строительство гидротехнических сооружений), РФ, г. Москва</p>
                </li>
                <li>
                <p>2005-2006 гг.</p>
                <p>Юрисконсульт OOO &laquo;ИМПЭКС ПОЛЯРИС&raquo; (Российско-Норвежская энергетическая компания), РФ, г. Москва</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, английский, украинский, турецкий</h4>
                </div>
                <div>
                <p><strong>Награды</strong></p>
                <h4>Медаль Академии юстиции, Академия юстиции, Ереван, 2018 г. Благодарность Академии юстиции</h4>
                </div>
                <div>
                <p><strong>Иные сведения</strong></p>
                <h4>Служил в вооруженных силах РА</h4>
                </div>
                <div>
                <p><strong>Семейное положение</strong></p>
                <h4>Женат, имеет двух дочерей</h4>
                </div>',
            ],



            


            // ************************************************************************************************
            [
                'name_en' => 'Artashes Khurshudyan',
                'name_am' => 'Արտաշես Խուրշուդյան',
                'name_ru' => 'Арташес Хуршудян',
                'position_en' => 'Head of Distance Learning and IT Department',
                'position_am' => 'Հեռաուսուցման և ՏՏ դեպարտամենտի ղեկավար',
                'position_ru' => 'Руководитель департамента дистанционного обучения и информационных технологий',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>13.03.1979, Yerevan, Republic of Armenia</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2011 January &ndash; June:</p>
                <p>Certificate program, International law and Diplomacy: Fletcher school of Diplomacy and International law, Tufts University, Boston, US</p>
                </li>
                <li>
                <p>2005:</p>
                <p>PhD, Department of Sociology, Yerevan State University</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2001:</p>
                <p>Master&rsquo;s Degree: Department of Sociology, Yerevan State University</p>
                </li>
                <li>
                <p>1999:</p>
                <p>Bachelor\'s Degree: Department of Sociology, Yerevan State University</p>
                </li>
                <li>
                <p>1995:</p>
                <p>Gold medal graduation. High school N 147</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Academic degree, title</strong></p>
                <h4>PhD in Social sciences</h4>
                </div>
                <div>
                <p><strong>Topic of the PHD thesis</strong></p>
                <h4>"Introduction issues and development trends of distance education systems in the Republic of Armenia", 013 Professional council, Yerevan, Republic of Armenia</h4>
                </div>
                <div>
                <p><strong>Professional experience</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 February - up to now:</p>
                <p>Head of Distance learning and IT department, Academy of Justice</p>
                </li>
                <li>
                <p>2014-2017:</p>
                <p>Head of Distance learning department, Academy of Justice</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2005 September &ndash; up to now:</p>
                <p>Head of distance learning laboratory, Department of Sociology, Yerevan State University</p>
                </li>
                <li>
                <p>2001 &ndash; 2003:</p>
                <p>Project co-ordinator, "Armenian distance learning network", Tempus Joint European Program</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Trainings</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2014 October- November:</p>
                <p>Certificate, &ldquo;Strengthening the application of the European Convention on Human Rightsand the case law of the European Court of Human Rights in Armenia&rdquo;, Human Rights and Rule of Law, Council of Europe</p>
                </li>
                <li>
                <p>2014 August:</p>
                <p>US consultations on Judicial Education, Publications and Distance learning Programs, Commercial Law Development Program, US.Department of Commerce, Washington, DC</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2006 Januart - February:</p>
                <p>Training program, Modern Electronic Programs in Distance Education: Middlesex University, London, United Kingdom</p>
                </li>
                <li>
                <p>2004:</p>
                <p>Dissertation research, Open University, United Kingdom</p>
                </li>
                <li>
                <p>2003 January:</p>
                <p>Training Program, Educational technologies and concepts: Open University, United Kingdom</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2002 February:</p>
                <p>Training Program, Educational technologies and concepts: Open University, United Kingdom</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Languages</strong></p>
                <h4>Russian, English, French</h4>
                </div>
                <div>
                <p><strong>Articles, e-learning courses and study units</strong></p>
                <h4>Author and co-author of 9 articles and study units, 10 distance learning courses and packages. Learning strategist and instructional designer of 6 English language distance learning courses. Learning strategist and instructional designer of 55 micro learning courses.</h4>
                </div>
                <div>
                <p><strong>Innovative digital learning solutions</strong></p>
                <h4>e-learning interactive courses, linear interactive videos (with option to localize and adapt informative programs into interactive video courses), user experience gamified interactive videos</h4>
                </div>
                <div>
                <p><strong>Awards and prizes</strong></p>
                <h4>Golden Medal of the Academy of Justice of RA, On the occasion of the 5th anniversary of the foundation of the Academy of Justice of RA, Yerevan 2018</h4>
                <h4>Medal of Nerses Shnorhali, For development of distance learning system at Academy of Justice, Ministry of Justice, Yerevan 2016</h4>
                <h4>Letter of Appreciation in the field of university training programs and 95 anniversary of establishment of Yerevan State University, Yerevan 2014</h4>
                <h4>Letter of Appreciation for Personal Contribution in the Establishment of Social Work Institute in the Republic of Armenia, Ministry of Labor and Social Affairs of the Republic of Armenia, Yerevan 2011</h4>
                <h4>Diploma for impeccable work and significant contribution in the development of YSU distance learning training programs, Yerevan State University, Yerevan 2009</h4>
                </div>
                <div>
                <p><strong>Department of Distance Learning and Information Technologies</strong></p>
                <h4>The department implements the annual training of judges and prosecutors in a format of distance learning. About 400 judges and prosecutors are trained annually through distance learning programs. In cooperation with foreign partners the Department has developed and implemented the following distance learning courses:</h4>
                <h4>time and stress management</h4>
                <h4>argumentation and rhetorics</h4>
                <h4>human resource management for legal professionals</h4>
                <h4>refugee law for Administrative Court judges</h4>
                <h4>protection of children&rsquo;s rights in a criminal procedure</h4>
                <h4>refugee law for Criminal Court judges and prosecutors</h4>
                <h4>The Department continuously develops and tests innovative digital learning solutions for judges and prosecutors using gamification techniques, micro learning approaches, digital statistical models, and scenario based learning techniques.</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>13.03.1979 թ., ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2011 թ. հունվար-հունիս</p>
                <p>ԱՄՆ Թաֆթս համալսարանի Ֆլեթչերի իրավունքի և դիվանագիտության դպրոց</p>
                </li>
                <li>
                <p>2001-2004 թթ.</p>
                <p>ԵՊՀ սոցիոլոգիայի ֆակուլտետի ասպիրանտուրա</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>1999-2001 թթ.</p>
                <p>ԵՊՀ սոցիոլոգիայի ֆակուլտետի մագիստրատուրա</p>
                </li>
                <li>
                <p>1995 -1999 թթ.</p>
                <p>ԵՊՀ սոցիոլոգիայի ֆակուլտետի բակալավրիատ</p>
                </li>
                <li>
                <p>1995 թթ.</p>
                <p>N 147 միջնակարգ դպրոց, Ավարտել է ոսկե մեդալով</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Գիտական աստիճան, կոչում</strong></p>
                <h4>Սոցիոլոգիական գիտությունների թեկնածու</h4>
                </div>
                <div>
                <p><strong>Ատենախոսության թեման</strong></p>
                <h4>&laquo;Հեռակրթության համակարգերի ներդրման հիմնախնդիրները և զարգացման միտումները ՀՀ-ում&raquo;</h4>
                </div>
                <div>
                <p><strong>Աշխատանքային փորձ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ. փետրվարի 1-ից</p>
                <p>Արդարադատության ակադեմիայի հեռաուսուցման և ՏՏ դեպարտամենտի ղեկավար</p>
                </li>
                <li>
                <p>2014-2017 թ.</p>
                <p>Արդարադատության ակադեմիայի հեռաուսուցման վարչության պետ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2005 թ.-ից սեպտեմբերից</p>
                <p>ԵՊՀ սոցիոլոգիայի ֆակուլտետի հեռաուսուցման լաբորատորիայի վարիչ</p>
                </li>
                <li>
                <p>2001 &ndash; 2003 թ.</p>
                <p>&laquo;Հայկակական հեռաուսուցման Ցանց&raquo; ծրագրի համակարգող, Տեմպուս Եվրոպական ծրագիր</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Վերապատրաստումներ</strong></p>
                <h4>Մասնակցել է բազմաթիվ մասնագիտական վերապատրաստումների Հայաստանում և արտերկրում</h4>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, անգլերեն, ֆրանսերեն</h4>
                </div>
                <div>
                <p><strong>Հրապարակումներ</strong></p>
                <h4>Հեղինակ և համահեղինակ է 9 ուսումնական ձեռնարկների և հոդվածների, 10 հեռաուսուցման դասընթացների և փաթեթների: 6 անգլիալեզու հեռաուոուցման դասընթացների մեթոդոլոգիայի մշակող: 55 միկրո ուսուցման դասընթացների մեթոդոլոգիայի մշակող և ուսուցման ռազմավարության հեղինակ:</h4>
                </div>
                <div>
                <p><strong>Պատվոգրեր և շնորհակալագրեր</strong></p>
                <h4>Ոսկե Մեդալ, Արդարադատության ակադեﬕայի հիﬓադրման 5 - ամյակի կապակցությամբ, Արդարադատության ակադեմիա, Երևան, 2018</h4>
                <h4>Ներսես Շնորհալի հուշամեդալ, Արդարադատության ակադեմիայում հեռավար ուսուցման համակարգի ներդրման համար, ՀՀ արդարադատության նախարարություն, Երևան, 2016</h4>
                <h4>Պատվոգիր, Երկարատև անբասիր աշխատանքի, համալսարանական կրթության և գիտության ոլորտում ձեռքբերումների, մասնագետների պատրաստման գործում ունեցած ավանդի համար և ԵՊՀ հիմնադրման 95 &ndash; ամյակի կապակցությամբ: Երևանի պետական համալսարան, Երևան, 2014</h4>
                <h4>Շնորհակալագիր, Սոցիալական աշխատանքի ինստիտուտի կայացման գործում ունեցած անձնական ներդրման համար: Հայաստանի Հանրապետության Աշխատանքի և սոցիալական հարցերի նախարարություն, Երևան, 2011</h4>
                <h4>Պատվոգիր, Անբասիր աշխատանքի, մասնագետների պատրաստման գործում ունեցած զգալի ավանդի համար և Երևանի Պետական Համալսարանի 90-ամյա տարեդարձի կապակցությամբ, Երևանի պետական համալսարան, Երևան, 2009</h4>
                </div>
                <div>
                <p><strong>Հեռաուսուցման և ՏՏ դեպարտամենտ</strong></p>
                <h4>Դեպարտամենտն իրականացնում է դատավորների և դատախազների տարեկան վերապատրաստումը հեռաուսուցման ձևաչափով: Հեռաուսուցման ծրագրերի միջոցով տարեկան կտրվածքով շուրջ 400 դատավոր և դատախազ անցնում է վերապատրաստում: Դեպարտամենտը, օտարերկրյա գործընկերների հետ համագործակցելով, մշակել և ներդրել է հետևյալ հեռաուսուցման դասընթացները.</h4>
                <h4>Ժամանակի և սթրեսի կառավարում</h4>
                <h4>Փաստարկում և հռետորիկա</h4>
                <h4>Մարդկային ռեսուրսների կառավարում իրավական ոլորտի մասնագետների համար</h4>
                <h4>Փախստականների իրավունք վարչական դատարանի դատավորների համար</h4>
                <h4>Երեխայի իրավունքների պաշտպանություն քրեական գործերով վարույթի ընթացքում</h4>
                <h4>Փախստականների իրավունք քրեական դատարանի դատավորների և դատախազների համար</h4>
                <h4>Դեպարտամենտը շարունակաբար մշակում և փորձարկում է նորարական թվային ուսուցման լուծումներ դատավորների և դատախազների համար՝ օգտագործելով խաղաֆիկացման տեխնիկաներ, միկրո ուսուցման մոտեցումներ, թվային վիճակագրության մոդելներ, սցենարների վրա հիմնված ուսուցման հնարներ:</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата,место рождения</strong></p>
                <h4>13.03.1979 г., г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2011 г. январь-июнь.</p>
                <p>Школа права и дипломатии Флетчера при Университете Тафтса, США</p>
                </li>
                <li>
                <p>2001-2004 гг.</p>
                <p>Аспирантура социологического факультета ЕГУ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>1999-2001 гг.</p>
                <p>Магистратура социологического факультета ЕГУ</p>
                </li>
                <li>
                <p>1995 -1999 гг.</p>
                <p>Бакалавриат социологического факультета ЕГУ</p>
                </li>
                <li>
                <p>1995 г.</p>
                <p>окончил с золотой медалью среднюю школу N 147</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Ученая степень: звание</strong></p>
                <h4>Кандидат социологических наук</h4>
                </div>
                <div>
                <p><strong>Тема кандидатской диссертации</strong></p>
                <h4>&laquo;Проблемы внедрения и тенденции развития систем дистанционного обучения в РА&raquo;</h4>
                </div>
                <div>
                <p><strong>Трудовая деятельность</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>С 1-го февраля 2017 г.</p>
                <p>руководитель департамента дистанционного обучения и информационных технологий Академии юстиции</p>
                </li>
                <li>
                <p>2014-2017 гг.</p>
                <p>начальник управления дистанционного обучения Академии юстиции</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>С сентября 2005 г.</p>
                <p>заведующий лаборатории дистанционного обучения факультета социологии ЕГУ</p>
                </li>
                <li>
                <p>2001 - 2003 гг.</p>
                <p>координатор проекта &laquo;Армянская сеть дистанционного обучения&raquo;, Европейская программа Темпус</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Переподготовки</strong></p>
                <h4>Участвовал в многочисленных профессиональных тренингах в Армении и зарубежом</h4>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, английский, французский</h4>
                </div>
                <div>
                <p><strong>Публикации</strong></p>
                <h4>Автор и соавтор 9 учебных пособий и статей, 10 курсов и пакетов дистанционного обучения. Разработал 6 методологических дистанционных курсов на английском. Автор стратегии обучения и разработчик методологий 55 микро курсов электронного обучения.</h4>
                </div>
                <div>
                <p><strong>Награды и благодарности</strong></p>
                <h4>Медаль Академии юстиции, Академия юстиции, Ереван, 2018</h4>
                <h4>Памятная медаль Нерсес Шнорали, за внедрение системы дистанционного обучения в Академии юстиции, Министерство юстиции РА, Ереван, 2016</h4>
                <h4>Похвальная грамота, за многолетнюю безупречную работу, вклад в достижения в области университетского образования и науки, подготовку специалистов и 95-летие ЕГУ, Ереванский государственный университет, Ереван, 2014</h4>
                <h4>Благодарность, за личный вклад в создание Института социальной работы. Министерство труда и социальных вопросов РА, Ереван, 2011</h4>
                <h4>Похвальная грамота, за значительный вклад в работе подготовки специалистов и по случаю 90-летия Ереванского государственного университета, Ереванский государственный университет, Ереван, 2009.</h4>
                </div>
                <div>
                <p><strong>Департамент дистанционного обучения и информационных технологий</strong></p>
                <h4>Департамент осуществляет ежегодную переподготовку судей и прокуроров в формате дистанционного обучения. Около 400 судей и прокуроров ежегодно проходят переподготовку по программам дистанционного обучения. В сотрудничестве с иностранными партнерами Департамент разработал и внедрил следующие курсы дистанционного обучения:</h4>
                <h4>Управление временем и стрессом</h4>
                <h4>Аргументация и риторика</h4>
                <h4>Управление человеческими ресурсами для специалистов юридических профессий</h4>
                <h4>Права беженцев для судей Административного суда</h4>
                <h4>Защита прав детей в уголовном процессе</h4>
                <h4>Права беженцев для судей уголовного суда и прокуроров</h4>
                <h4>Департамент занимается разработкой и тестированием инновационных решений в области цифрового обучения для судей и прокуроров, используя методы играфикации и микрообучения, цифровые статистические модели и навыки обучения на основе учебных сценариев.</h4>
                </div>',
            ],

            


            


            // ************************************************************************************************
            [
                'name_en' => 'Gevorg Israyelyan',
                'name_am' => 'Գևորգ Իսրայելյան',
                'name_ru' => 'Геворг Исраелян',
                'position_en' => 'Head of the Unit of Organization of Scientific Research and Programmatic-methodological Activities',
                'position_am' => 'Գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժնի ղեկավար',
                'position_ru' => 'Руководитель отдела по организации научно-исследовательских и программно-методических работ',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth&nbsp;</strong></p>
                <h4>12.01.1979, Yerevan</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2005-2009:</p>
                <p>Post-Graduate Degree (Aspirant) of the Police Academy of the Republic of Armenia</p>
                </li>
                <li>
                <p>1996-2001:</p>
                <p>The Faculty of Law of the Ministry of Internal Affairs of the Republic of Armenia</p>
                </li>
                <li>
                <p>1986-1996:</p>
                <p>Basic school Number 89 named after D.Varujan</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Academic degree, title</strong></h4>
                <h4>Candidate of Legal Sciences, Associate professor</h4>
                </div>
                <div>
                <h4><strong>Topic of PHD Thesis</strong></h4>
                <h4>&ldquo;Sexual crimes and their prevention in the RA&rdquo;</h4>
                </div>
                <div>
                <p><strong>Work experience</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 July up to now:</p>
                <p>Head of the Unit of Organization of Scientific research and Programmatic-methodological activities</p>
                </li>
                <li>
                <p>2020:</p>
                <p>legal advisor at State supervising service of the Republic of Armenia</p>
                </li>
                <li>
                <p>2020-2021:</p>
                <p>Head of the Chair of Civil Law and Civil Procedures at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                <li>
                <p>2018-2020:</p>
                <p>Head of the Unit of Organization of Scientific research and Programmatic-methodological activities</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017- 2017:</p>
                <p>Associate Professor of the Chair of Criminal Law of the Law Faculty of the Saint Petersburg Institute of Foreign Economic Relations, Economics and Law, Yerevan Branch</p>
                </li>
                <li>
                <p>2017:</p>
                <p>Acting Head of the Department of Law and Social Sciences at Yerevan Northern University</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 October - present:</p>
                <p>Advisor of International Security Academy</p>
                </li>
                <li>
                <p>2015-2016:</p>
                <p>Head of the Middle-vocational education Faculty at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                <li>
                <p>2013-2015:</p>
                <p>Head of the Chair of Civil Law and Civil Procedures of the Law Faculty at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                <li>
                <p>2011-2013:</p>
                <p>Associate Professor of the Chair of Administrative Law and Administrative activities of Police Faculty at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2011:</p>
                <p>Lecturer of the Chair of Administrative Law and Administrative activities of Police Faculty at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                <li>
                <p>2002-2008:</p>
                <p>Educational department inspector at the Police Academy of the Republic of Armenia</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2001-2002:</p>
                <p>Investigator in the Shahumyan Division of Criminal Investigation Department of the Yerevan City Department</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Trainings</strong></p>
                <h4>Participation in numerous professional trainings</h4>
                </div>
                <div>
                <p><strong>Foreign languages</strong></p>
                <h4>Russian, French</h4>
                </div>
                <div>
                <p><strong>Publications</strong></p>
                <h4>Author of 40 scientific, methodological and educational publications.</h4>
                </div>
                <div>
                <p><strong>Honors</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2006:</p>
                <p>3rd Degree Medal &ldquo;For Long-Term Service in Police&rdquo;</p>
                </li>
                <li>
                <p>2011:</p>
                <p>2nd Degree Medal &ldquo;For Long-Term Service in Police&rdquo;</p>
                </li>
                <li>
                <p>2012:</p>
                <p>Award Pin &ldquo;For Excellent Service in Police&rdquo;</p>
                </li>
                <li>
                <p>2015:</p>
                <p>Souvenir Mark from Head of Police</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016:</p>
                <p>1st Degree Medal &ldquo;For Long-Term Service in Police&rdquo;</p>
                </li>
                <li>
                <p>2016:</p>
                <p>Medal of International Security Academy "Tigran the Great"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016:</p>
                <p>Medal of International Security Academy "Vardan Mamikonyan"</p>
                </li>
                <li>
                <p>2016:</p>
                <p>Medal "Mother\'s Gratitude to Artsakh Priests"</p>
                </li>
                <li>
                <p>2017:</p>
                <p>Medal of International Security Academy "Marshal Baghramyan"</p>
                </li>
                <li>
                <p>2017:</p>
                <p>Medal of International Security Academy "Zoravar Andranik"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017:</p>
                <p>Medal "Yerkrapah Union of Veterans 20 years"</p>
                </li>
                <li>
                <p>2017:</p>
                <p>Commemorative Medal "Yerkrapah Union of Veterans"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2018:</p>
                <p>Medal "Yerevan 2800"</p>
                </li>
                <li>
                <p>2018:</p>
                <p>Medal &ldquo;Preservation of the Armenian Identity&rdquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2019:</p>
                <p>Commemorative Medal &ldquo;Artsakh&rdquo;</p>
                </li>
                <li>
                <p>2019:</p>
                <p>Commemorative Medal &ldquo; Participated in the anti-terrorist operation in the Caucasus"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2020:</p>
                <p>Medal "Lion of Taron"</p>
                </li>
                <li>
                <p>2021:</p>
                <p>Medal "Poghos Nubar pasha"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2021:</p>
                <p>Medal "Sose mayrik"</p>
                </li>
                <li>
                <p>2021:</p>
                <p>Medal "Saint Gevorg"</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Other information</strong></p>
                <h4>18 years of experience in scientific and pedagogic</h4>
                </div>
                <div>
                <p><strong>Unit of Organization of Scientific Research and Programmatic-methodological Activities</strong></p>
                <h4>The Unit implements scientific research, scientific and educational publications, cooperation with other scientific research organizations or institutions, development and continuous upgrading of training programs, teaching summeries and other teaching methodological materials required research for the development of internal and individual legal acts of the Rector of the Academy, as well as other drafts of legal acts, provides attendance of the trainees in scientific research activities at the Academy, participates in the organization of seminars and conferences, implements other functions.</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>12.01.1979, ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2005-2009 թթ.</p>
                <p>ՀՀ ոստիկանության ակադեմիայի հեռակա ուսուցման ասպիրանտուրա</p>
                </li>
                <li>
                <p>1996-2001 թթ.</p>
                <p>ՀՀ ՆԳՆ ակադեմիայի իրավաբանական ֆակուլտետ</p>
                </li>
                <li>
                <p>1986-1996 թթ.</p>
                <p>Դ. Վարուժանի անվան № 89 միջնակարգ դպրոց</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Գիտական աստիճան, կոչում</strong></h4>
                <h4>Իրավաբանական գիտությունների թեկնածու, դոցենտ</h4>
                </div>
                <div>
                <h4><strong>Ատենախոսության թեման</strong></h4>
                <h4>Սեռական հանցագործությունները և դրանց կանխումը ՀՀ-ում</h4>
                </div>
                <div>
                <p><strong>Աշխատանքային փորձ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2021թ. հուլիսից</p>
                <p>Արդարադատության ակադեմիայի գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժնի ղեկավար</p>
                </li>
                <li>
                <p>2020-2021 թթ.</p>
                <p>ՀՀ ոստիկանության կրթահամալիրի ակադեմիայի քաղաքացիական իրավունքի և քաղաքացիական դատավարության ամբիոնի պետ</p>
                </li>
                <li>
                <p>2020թ.</p>
                <p>ՀՀ պետական վերահսկողության ծառայության իրավախորհրդատու</p>
                </li>
                <li>
                <p>2018-2020թթ.</p>
                <p>Արդարադատության ակադեմիայի գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժնի ղեկավար</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017-2018 թթ.</p>
                <p>Սանկտ-Պետերբուրգի արտաքին տնտեսական կապերի, տնտեսագիտության և իրավունքի ինստիտուտի Երևանի մասնաճյուղի իրավաբանական ֆակուլտետի քրեաիրավական առարկաների ամբիոնի դոցենտ</p>
                </li>
                <li>
                <p>2017 թ.</p>
                <p>Երևանի Հյուսիսային համալսարանի իրավագիտության և հասարակագիտական առարկաների ամբիոնի վարիչի ժամանակավոր պաշտոնակատար</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 թ. հոկտեմբերից</p>
                <p>Միջազգային անվտանգության ակադեմիայի խորհրդական</p>
                </li>
                <li>
                <p>2015-2016 թթ.</p>
                <p>ՀՀ ոստիկանության կրթահամալիրի քոլեջի ոստիկանական միջին մասնագիտական կրթության ֆակուլտետի պետ</p>
                </li>
                <li>
                <p>2013-2015 թթ.</p>
                <p>ՀՀ ոստիկանության կրթահամալիրի ակադեմիայի իրավագիտության ֆակուլտետի քաղաքացիական իրավունքի և քաղաքացիական դատավարության ամբիոնի պետ</p>
                </li>
                <li>
                <p>2011-2013 թթ.</p>
                <p>ՀՀ ոստիկանության կրթահամալիրի ակադեմիայի իրավագիտության ֆակուլտետի վարչական իրավունքի և ոստիկանության վարչական գործունեության ամբիոնի դոցենտ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2011 թթ.</p>
                <p>ՀՀ ոստիկանության ակադեմիայի իրավագիտության ֆակուլտետի վարչական իրավունքի և ոստիկանության վարչական գործունեության ամբիոնի դասախոս</p>
                </li>
                <li>
                <p>2002-2008 թթ.</p>
                <p>ՀՀ ոստիկանության ակադեմիայի ուսումնական բաժնի տեսուչ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2001-2002 թթ.</p>
                <p>ԵՔՎ Շահումյանի բաժնի ՔՀԲ օպերլիազոր</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Վերապատրաստումներ</strong></p>
                <h4>Մասնակցել է մասնագիտական բազմաթիվ վերապատրաստումների</h4>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, ֆրանսերեն</h4>
                </div>
                <div>
                <p><strong>Հրապարակումներ</strong></p>
                <h4>Հեղինակ է 4 տասնյակից ավել գիտական, ուսումնական և մեթոդական հրատարակությունների</h4>
                </div>
                <div>
                <p><strong>Պարգևատրումներ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2006 թ.</p>
                <p>&laquo;Ոստիկանությունում երկարամյա ծառայության համար&raquo; 3-րդ աստիճանի մեդալ</p>
                </li>
                <li>
                <p>2011 թ.</p>
                <p>&laquo;Ոստիկանությունում երկարամյա ծառայության համար&raquo; 2-րդ աստիճանի մեդալ</p>
                </li>
                <li>
                <p>2012 թ.</p>
                <p>&laquo;Ոստիկանությունում գերազանց ծառայության համար&raquo; կրծքանշան</p>
                </li>
                <li>
                <p>2015 թ.</p>
                <p>Ոստիկանության պետի հուշանվեր-նշան</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 թ.</p>
                <p>&laquo;Ոստիկանությունում երկարամյա ծառայության համար&raquo; 1-ին աստիճանի մեդալ</p>
                </li>
                <li>
                <p>2016 թ.</p>
                <p>Միջազգային անվտանգության ակադեմիայի &laquo;Տիգրան Մեծ&raquo; մեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 թ.</p>
                <p>Միջազգային անվտանգության ակադեմիայի &laquo;Վարդան Մամիկոնյան&raquo; մեդալ</p>
                </li>
                <li>
                <p>2016 թ.</p>
                <p>&laquo;Մայրական երախտագիտություն Արցախի քաջորդիներին&raquo; մեդալ</p>
                </li>
                <li>
                <p>2017 թ.</p>
                <p>Միջազգային անվտանգության ակադեմիայի &laquo;Մարշալ Բաղրամյան&raquo; մեդալ</p>
                </li>
                <li>
                <p>2017 թ.</p>
                <p>Միջազգային անվտանգության ակադեմիայի &laquo;Զորավար Անդրանիկ&raquo; մեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ.</p>
                <p>&laquo;ԵԿՄ 20 տարի&raquo; մեդալ</p>
                </li>
                <li>
                <p>2017 թ.</p>
                <p>ԵԿՄ հուշամեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2018 թ.</p>
                <p>&laquo;Երևան 2800&raquo; մեդալ</p>
                </li>
                <li>
                <p>2018 թ.</p>
                <p>&laquo;Հայապահպանության համար&raquo; մեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2019 թ.</p>
                <p>&laquo;Արցախ&raquo; հուշամեդալ</p>
                </li>
                <li>
                <p>2019 թ.</p>
                <p>&laquo;Կովկասում հակաահաբեկչական օպերացիայի մասնակցի&raquo; հուշամեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2020 թ.</p>
                <p>&laquo;Տարոնի առյուծ&raquo; մեդալ</p>
                </li>
                <li>
                <p>2021 թ.</p>
                <p>&laquo;Պողոս Նուբար փաշա&raquo; մեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 թ.</p>
                <p>&laquo;Սոսե մայրիկ&raquo; մեդալ</p>
                </li>
                <li>
                <p>2021 թ.</p>
                <p>&laquo;Սուրբ Գևորգ&raquo; մեդալ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <h4>18 տարվա գիտամանկավարժական գործունեության փորձ</h4>
                </div>
                <div>
                <p><strong>Գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժին</strong></p>
                <h4>Բաժինն իրականացնում է գիտական հետազոտություններ, գիտական և ուսումնական հրատարակություններ, գիտահետազոտական այլ կազմակերպությունների կամ կառույցների հետ համագործակցություն, ուսուցման ծրագրերի, դասավանդման սեղմագրերի և այլ ուսումնամեթոդական նյութերի մշակման և շարունակական նորացման աշխատանքներ, Ակադեմիայի ռեկտորի ներքին և անհատական իրավական ակտերի, ինչպես նաև իրավական այլ ակտերի նախագծերի մշակման համար անհրաժեշտ հետազոտություններ, ապահովում է ունկնդիրների մասնակցությունը Ակադեմիայում անցկացվող գիտահետազոտական աշխատանքներին, մասնակցում է սեմինարների և գիտաժողովների կազմակերպման աշխատանքներին, իրականացնում այլ գործառույթներ:</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата и место рождения</strong></p>
                <h4>12.01.1979, г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2005-2009 гг.</p>
                <p>аспирантура Академии полиции РА (заочно)</p>
                </li>
                <li>
                <p>1996-2001 гг.</p>
                <p>юридический факультет Академии МВД РА</p>
                </li>
                <li>
                <p>1986-1996 гг.</p>
                <p>средняя школа № 89 имени Д. Варужана</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Ученая степень, звание</strong></h4>
                <h4>Кандидат юридических наук, доцент</h4>
                </div>
                <div>
                <h4><strong>Тема кандидатской диссертации</strong></h4>
                <h4>Половые преступления и их предупреждение в РА</h4>
                </div>
                <div>
                <p><strong>Трудовая деятельность</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>C июла 2021г.</p>
                <p>руководитель отдела научно-исследовательских и программно-методических работ Академии юстиции</p>
                </li>
                <li>
                <p>2020-2021 гг.</p>
                <p>начальник кафедры гражданского права и гражданского процесса Академии Образовательного комплекса полиции РА</p>
                </li>
                <li>
                <p>2020г.</p>
                <p>юридический консультант Службы государственной контрольной РА</p>
                </li>
                <li>
                <p>2018-2020 гг.</p>
                <p>руководитель отдела научно-исследовательских и программно-методических работ Академии юстиции</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017-2018 гг.</p>
                <p>доцент кафедры уголовно-правовых дисциплин юридического факультета ереванского филиала Санкт-Петербургского института внешнеэкономических связей, экономики и права</p>
                </li>
                <li>
                <p>2017 г.</p>
                <p>Временно исполняющий обязанности заведующего кафедры Правоведения и общественных дисциплин Ереванского Северного университета</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>C октября 2016 г.</p>
                <p>советник Mеждународной aкадемии безопасности</p>
                </li>
                <li>
                <p>2015-2016 гг.</p>
                <p>начальник факультета полицейского среднего специального образования колледжа Образовательного комплекса полиции РА</p>
                </li>
                <li>
                <p>2013-2015 гг.</p>
                <p>начальник кафедры гражданского права и гражданского процесса факультета правоведения Академии Образовательного комплекса полиции РА</p>
                </li>
                <li>
                <p>2011-2013 гг.</p>
                <p>доцент кафедры административного права и административной деятельности факультета правоведения Образовательного комплекса Академии полиции РА</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2011 гг.</p>
                <p>преподаватель кафедры административного права и административной деятельности факультета правоведения Академии полиции РА</p>
                </li>
                <li>
                <p>2002-2008 гг.</p>
                <p>инспектор учебного отдела Академии полиции РА</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2001-2002 гг.</p>
                <p>оперуполномоченный ОУР Шаумянского РОВД Управления г. Еревана</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Переподготовки</strong></p>
                <h4>Участвовал в многочисленных профессиональных тренинга</h4>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, французский</h4>
                </div>
                <div>
                <p><strong>Публикации</strong></p>
                <h4>Автор более сорока научных, методических и учебных публикаций.</h4>
                </div>
                <div>
                <p><strong>Награды</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2006 г.&nbsp;</p>
                <p>медаль &laquo;За долголетнюю службу в полиции&raquo; 3 степени</p>
                </li>
                <li>
                <p>2011 г.</p>
                <p>медаль &laquo;За долголетнюю службу в полиции&raquo; 2 степени</p>
                </li>
                <li>
                <p>2012 г.</p>
                <p>нагрудный знак &laquo;За отличную службу в полиции&raquo;</p>
                </li>
                <li>
                <p>2015 г.</p>
                <p>нагрудный знак-сувенир начальника Полиции РА</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 г.</p>
                <p>медаль &laquo;За долголетнюю службу в полиции&raquo; 1 степени</p>
                </li>
                <li>
                <p>2016 г.</p>
                <p>медаль Mеждународной aкадемии безопасности &laquo;Тигран Великий&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 г.</p>
                <p>медаль Mеждународной aкадемии безопасности &laquo;Вардан Мамиконян&raquo;</p>
                </li>
                <li>
                <p>2016 г.</p>
                <p>медаль &laquo;Материнская благодарность храбрым сыновям Арцаха&raquo;</p>
                </li>
                <li>
                <p>2017 г.</p>
                <p>медаль Mеждународной aкадемии безопасности &laquo;Маршал Баграмян&raquo;</p>
                </li>
                <li>
                <p>2017 г.</p>
                <p>медаль Mеждународной aкадемии безопасности &laquo;Полководец Андраник&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 г.</p>
                <p>медаль &laquo;20 лет Cоюз добровольцев Eркрапа&raquo;</p>
                </li>
                <li>
                <p>2017 г.</p>
                <p>памятная медаль &laquo;Cоюз добровольцев Eркрапа&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2018 г.</p>
                <p>медаль &laquo;Ереван 2800&raquo;</p>
                </li>
                <li>
                <p>2018 г.</p>
                <p>медаль &laquo;За сохранение армянской идентичности&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2019 г.</p>
                <p>памятная медаль &laquo;Арцах&raquo;</p>
                </li>
                <li>
                <p>2019 г.</p>
                <p>памятная медаль &laquo;Участнику контртеррористической операции на Кавказе&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2020 г.</p>
                <p>медаль &laquo;Лев Тарона&raquo;</p>
                </li>
                <li>
                <p>2021 г.</p>
                <p>медаль &laquo;Погос Нубар паша&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 г.</p>
                <p>медаль &laquo;Сосе майрик&raquo;</p>
                </li>
                <li>
                <p>2021 г.</p>
                <p>Медаль &laquo;Святой Геворг&raquo;</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Иные сведения</strong></p>
                <h4>18 лет научно-преподавательской деятельности</h4>
                </div>
                <div>
                <p><strong>Oтдел по организации научно-исследовательских и программно-методических работ</strong></p>
                <h4>Отдел осуществляет научные исследования, научные и учебные публикации, сотрудничество с иными научно-исследовательскими организациями и учреждениями, разработку и постоянную модернизацию учебных программ, учебно-методологических материалов, проводит необходимые исследования для разработки проектов внутренних и индивидуальных правовых актов ректора Академии, а также иных правовых актов, обеспечивает участие слушателей в научно-исследовательских работах, проводимых в Академии, участвует в работе организации семинаров и конференций, выполняет другие функции.</h4>
                </div>',
            ],








            // ************************************************************************************************
            [
                'name_en' => 'Unit of Organization of Training for Trainees of Judiciary',
                'name_am' => 'Դատական համակարգի ունկնդիրների ուսուցման կազմակերպման բաժին',
                'name_ru' => 'Отдел по организации обучения слушателей судебной системы',
                'position_en' => null,
                'position_am' => null,
                'position_ru' => null,


                'biography_en' => '<div><p><strong>Unit implements the activities in the following directions</strong></p>
                <h4>initial training of persons included in the list of candidates of applicants of judges,</h4>
                <h4>continuous training of judges and persons included in the list of candidates of applicants of judges,</h4>
                <h4>initial training of those who have a scientific degree in the field of jurisprudence included in the list of promotion of candidates of judges for appointment to the position of judge of the Court of Appeal,</h4>
                <h4>continuous training of judicial servants and judicial bailiffs</h4>
                <h4>continuous training of state servants in the staff of the human rights defender of the RA,</h4>
                <h4>special training of judges and judicial bailiffs.</h4></div>',


                'biography_am' => '<div><p><strong>Բաժինն աշխատանքներ է իրականացնում հետևյալ ուղղություններով`</strong></p>
                <h4>դատավորների թեկնածուների հավակնորդների ցուցակում ընդգրկված անձանց մաuնագիտական պատրաստում,</h4>
                <h4>դատավորների և դատավորների թեկնածուների ցուցակում գտնվող անձանց վերապատրաստում,</h4>
                <h4>վերաքննիչ դատարանում դատավոր նշանակվելու համար առաջխաղացման ենթակա դատավորների թեկնածուների ցուցակում ընդգրկված՝ իրավագիտության բնագավառում գիտական աստիճան ունեցող անձանց մաuնագիտական պատրաստում,</h4>
                <h4>դատական ծառայողների և դատական կարգադրիչների վերապատրաստում,</h4>
                <h4>ՀՀ մարդու իրավունքների պաշտպանի աշխատակազմում պետական ծառայության պաշտոն զբաղեցնող անձանց վերապատրաստում,</h4>
                <h4>դատավորների և դատական կարգադրիչների հատուկ ուսուցում:</h4></div>',


                'biography_ru' => '<div><p><strong>Отдел осуществляет деятельность по следующим направлениям:</strong></p>
                <h4>профессиональная подготовка лиц, включенных в список претендентов в кандидаты на должности судей,</h4>
                <h4>переподготовка судей и лиц, включенных в список претендентов в кандидаты на должности судей,</h4>
                <h4>подготовка лиц, включенных в список кандидатов на продвижение по службе судей, имеющих научную степень в области юриспруденции, для назначения на должности судей Апелляционного суда,</h4>
                <h4>переподготовка судебных служащих и судебных приставов,</h4>
                <h4>переподготовка лиц, занимающих государственные должности в аппарате защитника прав человека РА,</h4>
                <h4>специальная подготовка судей и судебных приставов.</h4></div>',
            ],

            
            


            


            // ************************************************************************************************
            [
                'name_en' => 'Hasmik Avetisyan',
                'name_am' => 'Հասմիկ Ավետիսյան',
                'name_ru' => 'Асмик Аветисян',
                'position_en' => 'Head of the Unit of Organization of Training for Trainees of Prosecutorial and Investigative System',
                'position_am' => 'Դատախազության և քննչական համակարգի ունկնդիրների ուսուցման կազմակերպման բաժնի ղեկավար',
                'position_ru' => 'Начальник отдела по организации обучения слушателей органов прокуратуры и следственной системы',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>12.11.1977, Yerevan</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1994-1999:</p>
                <p>Faculty of Law of YSU</p>
                </li>
                <li>
                <p>1994:</p>
                <p>Basic School № 21 named after A.Shirvanzade</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Academic degree, title</strong></h4>
                </div>
                <div>
                <h4>Candidate of Law</h4>
                </div>
                <div>
                <p><strong>Topic of PHD Thesis</strong></p>
                <h4>"Judicial control of pre-trial proceedings as a guarantee of protection of constitutional rights and freedoms of a person"</h4>
                </div>
                <div>
                <p><strong>Work experience</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 February &ndash; present:</p>
                <p>Head of the Unit of Organization of Training for Trainees of Prosecutorial and Investigative System of the &ldquo;Academy of Justice&rdquo; state non-commercial organization</p>
                </li>
                <li>
                <p>2014-2017:</p>
                <p>Head of the Department of Relations with the Prosecutor\'s Office of the Department of Full-time Education of the Academy of Justice of RA SNCO</p>
                </li>
                <li>
                <p>2012-2013:</p>
                <p>Lecturer at the European Regional Education Academy</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2013:</p>
                <p>Senior Researcher at the "School of Prosecutors" of RA state non-commercial organization</p>
                </li>
                <li>
                <p>2008 July- August</p>
                <p>Senior Specialist in the Council of Justice of the Republic of Armenia</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2007-2008:</p>
                <p>Senior Researcher at the "School of Prosecutors" of RA state non-commercial organization</p>
                </li>
                <li>
                <p>2005-2007:</p>
                <p>Researcher at the Scientific and Educational Center of the General Prosecutor\'s Office of the Republic of Armenia</p>
                </li>
                <li>
                <p>2005 March-April</p>
                <p>Assistant of Prosecutor of the Prosecutor&rsquo;s Office of Gegharkunik District</p>
                </li>
                <li>
                <p>2002-2005:</p>
                <p>Assistant of Gavar State University (concurrently)</p>
                </li>
                <li>
                <p>1999-2005:</p>
                <p>Assistant Judge of the Criminal and Military Court of Appeal of the Republic of Armenia</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Membership in non-governmental or other organizations</strong></p>
                <h4>Since 1999 a member of the Law Society of the RA.</h4>
                </div>
                <div>
                <p><strong>Foreign languages</strong></p>
                <h4>Russian, English</h4>
                </div>
                <div>
                <p><strong>Publications</strong></p>
                <h4>Author and co-author of 22 scientific, training manuals, monographs, textbooks and scientific articles.</h4>
                </div>
                <div>
                <p><strong>Marital status</strong></p>
                <h4>Married, has 2 sons and a daughter.</h4>
                </div>
                <div>
                <p><strong>Unit of Organization of Training for Trainees of Prosecutorial and Investigative System&nbsp;</strong></p>
                <h4>The Unit implements the activities in the following directions:</h4>
                <h4>initial training of persons included in the list of candidates of prosecutors,</h4>
                <h4>continuous training of prosecutors,</h4>
                <h4>special training of prosecutors</h4>
                <h4>continuous training of state servants in the staff of the Prosecutor\'s office of the RA</h4>
                <h4>initial training of persons included in the list of candidates for servants of Investigative Committee of the RA</h4>
                <h4>continuous training of investigators of the Investigative Committee of the RA,</h4>
                <h4>special training of investigators of Investigative Committee of the RA,</h4>
                <h4>continuous training of state servants of the Department of Investigative Committee of the RA,</h4>
                <h4>continuous training of investigators of Special Investigation Service of the RA,</h4>
                <h4>special training of investigators of Special Investigation Service of the RA,</h4>
                <h4>continuous training of investigators of the Investigative Department of the National Security Service under the Government of the RA.</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>12.11.1977 թ., ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1994-1999 թթ.</p>
                <p>ԵՊՀ իրավաբանական ֆակուլտետ</p>
                </li>
                <li>
                <p>1994 թ.</p>
                <p>Ալ. Շիրվանզադեի անվան N 21 միջնակարգ դպրոց</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Գիտական աստիճան, կոչում</strong></h4>
                </div>
                <div>
                <h4>Իրավաբանական գիտությունների թեկնածու</h4>
                </div>
                <div>
                <p><strong>Ատենախոսության թեման</strong></p>
                <h4>&laquo;Մինչդատական վարույթի նկատմամբ դատական վերահսկողությունը՝ որպես անձի սահմանադրական իրավունքների և ազատությունների պաշտպանության ապահովման երաշխիք&raquo;</h4>
                </div>
                <div>
                <p><strong>Աշխատանքային փորձ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ. փետրվարից</p>
                <p>Արդարադատության ակադեմիայի դատախազության և քննչական համակարգի ունկնդիրների ուսուցման կազմակերպման բաժնի ղեկավար</p>
                </li>
                <li>
                <p>2014-2017 թթ.</p>
                <p>Արդարադատության ակադեմիայի առկա ուսուցման վարչության դատախազության հետ կապերի բաժնի պետ</p>
                </li>
                <li>
                <p>2012-2013 թթ.</p>
                <p>Եվրոպական կրթական տարածաշրջանային ակադեմիայի դասախոս</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2013 թթ.</p>
                <p>ՀՀ &laquo;Դատախազության դպրոց&raquo; ՊՈԱԿ ավագ գիտաշխատող</p>
                </li>
                <li>
                <p>2008 թ. հուլիս-օգոստոս</p>
                <p>ՀՀ արդարադատության խորհրդի ավագ մասնագետ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2007-2008 թթ.</p>
                <p>ՀՀ &laquo;Դատախազության դպրոց&raquo; ՊՈԱԿ ավագ գիտաշխատող</p>
                </li>
                <li>
                <p>2005-2007 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության գիտաուսումնական կենտրոնի գիտական աշխատող</p>
                </li>
                <li>
                <p>2005 թ. մարտ-ապրիլ</p>
                <p>ՀՀ Գեղարքունիքի մարզի դատախազության դատախազի օգնական</p>
                </li>
                <li>
                <p>2002-2005 թթ.</p>
                <p>Գավառի պետական համալսարանի ասիստենտ (համատեղությամբ)</p>
                </li>
                <li>
                <p>1999-2005 թթ.</p>
                <p>ՀՀ քրեական և զինվորական գործերով վերաքննիչ դատարանի դատավորի օգնական</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Մասնակցությունը հասարակական կամ այլ կառույցների</strong></p>
                <h4>1999 թ.-ից ՀՀ իրավաբանների միության անդամ</h4>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, անգլերեն</h4>
                </div>
                <div>
                <p><strong>Հրապարակումներ</strong></p>
                <h4>Հեղինակ և համահեղինակ է 22 գիտական, ուսումնական ձեռնարկների, մենագրությունների, դասագրքերի և գիտական հոդվածների</h4>
                </div>
                <div>
                <p><strong>Ընտանեկան կարգավիճակ</strong></p>
                <h4>Ամուսնացած է, ունի երկու որդի և մեկ դուստր</h4>
                </div>
                <div>
                <p><strong>Դատախազության և քննչական համակարգի ունկնդիրների ուսուցման կազմակերպման բաժին</strong></p>
                <h4>Բաժինն աշխատանքներ է իրականացնում հետևյալ ուղղություններով՝</h4>
                <h4>Դատախազների վերապատրաստում,</h4>
                <h4>ՀՀ քննչական կոմիտեի քննիչների վերապատրաստում,</h4>
                <h4>ՀՀ հատուկ քննչական ծառայության քննիչների վերապատրաստում,</h4>
                <h4>ՀՀ կառավարությանն առընթեր ազգային անվտանգության ծառայության քննչական դեպարտամենտի քննիչների վերապատրաստում,</h4>
                <h4>ՀՀ դատախազության աշխատակազմում պետական ծառայողների վերապատրաստում,</h4>
                <h4>ՀՀ քննչական կոմիտեի դեպարտամենտի պետական ծառայողների վերապատրաստում,</h4>
                <h4>Դատախազների թեկնածությունների ցուցակում ընդգրկված անձանց մաuնագիտական պատրաստում,</h4>
                <h4>ՀՀ քննչական կոմիտեի ծառայողների թեկնածությունների ցուցակում ընդգրկված անձանց մասնագիտական պատրաստում,</h4>
                <h4>Դատախազների հատուկ ուսուցում,</h4>
                <h4>ՀՀ քննչական կոմիտեի քննիչների հատուկ ուսուցում,</h4>
                <h4>ՀՀ հատուկ քննչական ծառայության քննիչների հատուկ ուսուցում:</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата рождения, место</strong></p>
                <h4>12.11.1977, г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1994-1999&nbsp;гг.</p>
                <p>Юридический факультет ЕГУ</p>
                </li>
                <li>
                <p>1994 г.</p>
                <p>Средняя школа № 21 им. А.Ширванзаде</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Ученая степень</strong></h4>
                </div>
                <div>
                <h4>Кандидат юридических наук</h4>
                </div>
                <div>
                <p><strong>Тема кандидатской диссертации</strong></p>
                <h4>&laquo;Судебный контроль над досудебным производством как гарантия обеспечения конституционных прав и свобод человека&raquo;</h4>
                </div>
                <div>
                <p><strong>Опыт работы</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>С 1-го февраля 2017 г.</p>
                <p>начальник отдела по организации обучения слушателей органов прокуратуры и следственной системы &laquo;Академия юстиции&raquo; РА</p>
                </li>
                <li>
                <p>2014-2017 гг.</p>
                <p>начальник отдела по связям с прокуратурой управления очного обучения Академии юстиции</p>
                </li>
                <li>
                <p>2012-2013 гг.</p>
                <p>преподаватель в Европейской образовательной региональной академии</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2013 гг.</p>
                <p>cтарший научный сотрудник в Г.Н.К.О. &laquo;Школа Прокуроров&raquo; РА</p>
                </li>
                <li>
                <p>2008г. июль-август</p>
                <p>старший специалист в Совете юстиции РА</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2007-2008 гг.</p>
                <p>cтарший научный сотрудник в Г.Н.К.О. &laquo;Школа Прокуроров&raquo; РА</p>
                </li>
                <li>
                <p>2005-2007 гг.</p>
                <p>научный сотрудник в Научно-образовательном центре Генеральной прокуратуры РА</p>
                </li>
                <li>
                <p>2005 март-апрель</p>
                <p>помощник прокурора Гегаркуникского района</p>
                </li>
                <li>
                <p>2002-2005 гг.</p>
                <p>aссистент Гаварского государственного университета (по совместительству)</p>
                </li>
                <li>
                <p>1999-2005 гг.</p>
                <p>помощник судьи апелляционного суда РА по уголовным и военным делам</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Участие в общественных или других структурах</strong></p>
                <h4>С 1999 года является членом общества юристов РА</h4>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, английский</h4>
                </div>
                <div>
                <p><strong>Публикации</strong></p>
                <h4>Автор и соавтор 22 научных, учебных пособий, монографий, учебников и научных статей</h4>
                </div>
                <div>
                <p><strong>Семейное положение</strong></p>
                <h4>Замужем, имеет двух сыновей и одну дочь</h4>
                </div>
                <div>
                <p><strong>Отдел по организации обучения слушателей органов прокуратуры и следственной системы</strong></p>
                <h4>Отдел осуществляет деятельность по следующим направлениям:</h4>
                <h4>профессиональная подготовка лиц, включенных в список кандидатов на должности прокуроров,</h4>
                <h4>переподготовка прокуроров,</h4>
                <h4>специальная подготовка прокуроров,</h4>
                <h4>переподготовка государственных служащих аппарата Прокуратуры РА,</h4>
                <h4>профессиональная подготовка лиц, включенных в список кандидатов на должности служащих Следственного Комитета РА,</h4>
                <h4>переподготовка следователей Следственного комитета РА,</h4>
                <h4>специальная подготовка следователей Следственного комитета РА,</h4>
                <h4>&nbsp;переподготовка государственных служащих департамента Следственного комитета РА,</h4>
                <h4>переподготовка следователей Специальной следственной службы РА,</h4>
                <h4>специальная подготовка следователей Специальной следственной службы РА,</h4>
                <h4>переподготовка следователей Следственного департамента Службы Национальной Безопасности при Правительстве РА.</h4>
                </div>',
            ],

            
            
            


            


            // ************************************************************************************************
            [
                'name_en' => 'Narine Harutyunyan',
                'name_am' => 'Նարինե Հարությունյան',
                'name_ru' => 'Нарине Арутюнян',
                'position_en' => 'Head of the Unit of Finance-senior accountant',
                'position_am' => 'Ֆինանսական բաժնի ղեկավար-գլխավոր հաշվապահ',
                'position_ru' => 'Руководитель финансового отдела-главный бухгалтер',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>23.12.1981, Yerevan</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1999- 2004:</p>
                <p>Yerevan State Institute of Economics Faculty of Management</p>
                </li>
                <li>
                <p>1998:</p>
                <p>Basic school N 168</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Qualifications</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>2012:</p>
                <p>ACCA&nbsp; F6 Taxation</p>
                </li>
                <li>
                <p>2011:</p>
                <p>ACCA&nbsp; F2 Management Accounting</p>
                </li>
                <li>
                <p>2010:</p>
                <p>ACCA&nbsp; F3 Financial Accounting</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2010:</p>
                <p>ACCA&nbsp; F1 Accountant in Business</p>
                </li>
                <li>
                <p>2009:</p>
                <p>Leading servant having classification title of the 2nd class</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Work experience</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2018 August up to now:</p>
                <p>Head of the Unit of Finance-senior accountant of the Academy of Justice&nbsp;</p>
                </li>
                <li>
                <p>2014-2018:</p>
                <p>&ldquo;National Bureau of Expertises&rdquo; Head of the budgeting and finance department-Chief Accountant</p>
                </li>
                <li>
                <p>2012-2014:</p>
                <p>&ldquo;Yerevan Plant of Household Chemicals&rdquo; OJSC Accountant</p>
                </li>
                <li>
                <p>2012-2013:</p>
                <p>&ldquo;Adventure Explorer&rdquo; LLC (Incoming tourism) Chief Accountant</p>
                </li>
                <li>
                <p>2011-2012:</p>
                <p>"Nana &amp; Lusine" LLC (Accounting and consulting) Accountant</p>
                </li>
                <li>
                <p>2009-2011:</p>
                <p>Leading specialist at budget process management department of Ministry of Finance of the RA</p>
                </li>
                <li>
                <p>2007-2009:</p>
                <p>1st class specialist of the financial and economic department of Rescue Service of Ministry of emergency situations of the RA</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Foreign languages</strong></p>
                <h4>Russian, English</h4>
                </div>
                <div>
                <p><strong>Marital status</strong></p>
                <h4>Married, has 3 sons.&nbsp;</h4>
                </div>
                <div>
                <p><strong>Unit of Finance</strong></p>
                <h4>The unit complies with the requirements of legal acts regulating accounting and tax accounting:</h4>
                <h4>implements common accounting complies annual financial reports,</h4>
                <h4>compiles and presents the reports prescribed by the Tax Code of the RA during the reporting period,</h4>
                <h4>implements other current activities.</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>23.12.1981, ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1999-2004 թթ.</p>
                <p>Երևանի պետական տնտեսագիտական ինստիտուտ, Կառավարման ֆակուլտետ</p>
                </li>
                <li>
                <p>1998 թ.</p>
                <p>Երևանի թիվ 168 միջնակարգ դպրոց</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Որակավորումներ, դասային աստիճան</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>2012 թ.</p>
                <p>ACCA F6 Հարկեր</p>
                </li>
                <li>
                <p>2011 թ.</p>
                <p>ACCA F2 Կառավարչական հաշվառում&nbsp;</p>
                </li>
                <li>
                <p>2010 թ.</p>
                <p>ACCA F3 Ֆինանսական հաշվապահություն</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2010 թ.</p>
                <p>ACCA F1 Հաշվապահը բիզնեսում &nbsp;</p>
                </li>
                <li>
                <p>2009 թ.</p>
                <p>2-րդ դասի առաջատար ծառայողի դասային աստիճան</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Աշխատանքային փորձ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2018 թ. օգոստոսից</p>
                <p>Արդարադատության ակադեմիա, Ֆինանսական բաժնի պետ-գլխավոր հաշվապահ</p>
                </li>
                <li>
                <p>2014-2018 թթ.</p>
                <p>&laquo;ՀՀ ԳԱԱ Փորձաքննությունների ազգային բյուրո&raquo;, Ֆինանսատնտեսագիտական բաժնի պետ-գլխավոր հաշվապահ</p>
                </li>
                <li>
                <p>2012-2014 թթ.</p>
                <p>&laquo;Երևանի կենցաղային քիմիայի գործարան&raquo; ԲԲԸ, հաշվապահ</p>
                </li>
                <li>
                <p>2012-2013 թթ.</p>
                <p>&laquo;Ադվենտուր Էքսփլորեր&raquo; ՍՊԸ, գլխավոր հաշվապահ</p>
                </li>
                <li>
                <p>2011-2012 թթ.</p>
                <p>&laquo;Նանա և Լուսինե&raquo; ՍՊԸ, հաշվապահ</p>
                </li>
                <li>
                <p>2009-2011 թթ.</p>
                <p>ՀՀ ֆինանսների նախարարության աշխատակազմի բյուջետային գործընթացի կառավարման վարչություն, առաջատար մասնագետ</p>
                </li>
                <li>
                <p>2007-2009 թթ.</p>
                <p>ՀՀ արտակարգ իրավիճակների նախարարության Հայաստանի փրկարար ծառայության աշխատակազմի ֆինանսատնտեսագիտական վարչություն, առաջին կարգի մասնագետ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, անգլերեն</h4>
                </div>
                <div>
                <p><strong>Ընտանեկան կարգավիճակ</strong></p>
                <h4>Ամուսնացած է, ունի 3 որդի</h4>
                </div>
                <div>
                <p><strong>Ֆինանսական բաժին</strong></p>
                <h4>Բաժինը հաշվապահական և հարկային հաշվառումը կարգավորող իրավական ակտերի պահանջներին համապատասխան.</h4>
                <h4>իրականացնում է հաշվապահական հաշվառման ընդհանուր վարումը, կազմում՝ տարեկան ֆինանսական հաշվետվությունները,</h4>
                <h4>հաշվետու ժամանակաշրջանի ընթացքում կազմում և ներկայացնում է ՀՀ հարկային օրենսգրքով սահմանված հաշվետվությունները,</h4>
                <h4>իրականացնում է ընթացիկ այլ աշխատանքներ:</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата и место рождения</strong></p>
                <h4>23.12.1981, г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1999-2004 гг.</p>
                <p>Ереванский государственный институт экономики, факультет управления</p>
                </li>
                <li>
                <p>1998 г.</p>
                <p>средняя школа № 168</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Сертефикаты, классы</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>2012 г.</p>
                <p>ACCA F6 Налоги</p>
                </li>
                <li>
                <p>2011 г.</p>
                <p>ACCA F2 Управленческий учет</p>
                </li>
                <li>
                <p>2010 г.</p>
                <p>ACCA F3 Финансовая бухгалтерия</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2010 г.</p>
                <p>ACCA F1 Бухгалтер в бизнесе</p>
                </li>
                <li>
                <p>2009 г.</p>
                <p>степень ведущего служащего 2-го класса</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Трудовая деятельность</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>С августа 2018 года.</p>
                <p>руководитель финансового отдела-главный бухгалтер Академии юстиции</p>
                </li>
                <li>
                <p>2014-2018 гг.</p>
                <p>&laquo;Национальное бюро экспертиз&raquo; ГНКО, руководитель финансово-экономического отдела, главный бухгалтер</p>
                </li>
                <li>
                <p>2012-2014 гг.</p>
                <p>&laquo;Ереванский завод бытовой химии&raquo; бухгалтер</p>
                </li>
                <li>
                <p>2012-2013 гг.</p>
                <p>&laquo;Адвентур эксплорер&raquo; ООО главный бухгалтер</p>
                </li>
                <li>
                <p>2011-2012 гг.</p>
                <p>&laquo;Нана и Лусине&raquo; ООО, бухгалтер</p>
                </li>
                <li>
                <p>2009-2011 гг.</p>
                <p>ведущий специалист отдела управления бюджетным процессом Министерства финансов РА</p>
                </li>
                <li>
                <p>2007-2009 гг.</p>
                <p>специалист первого класса финансово-экономического управления службы спасения Армении Министерства по чрезвычайным ситуациям РА</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, английский</h4>
                </div>
                <div>
                <p><strong>Семейное положение</strong></p>
                <h4>Замужем, имеет трех сыновей</h4>
                </div>
                <div>
                <p><strong>Финансовый отдел</strong></p>
                <h4>Отдел в соответствии с требованиями нормативно-правовых актов, регулирующими бухгалтерский и налоговый учет:</h4>
                <h4>осуществляет общий бухгалтерский учет, составляет годовую финансовую отчетность,</h4>
                <h4>в отчетный период составляет и представляет отчеты, предусмотренные Налоговым кодексом РА, осуществляет иную деятельность,</h4>
                <h4>иная текущая деятельность.</h4>
                </div>',
            ],

            
            
            


            


            // ************************************************************************************************
            [
                'name_en' => 'Anna Mkrtichyan',
                'name_am' => 'Աննա Մկրտիչյան',
                'name_ru' => 'Анна Мкртичян',
                'position_en' => 'Head of the Unit of Cooperation and Public Relations',
                'position_am' => 'Համագործակցության և հանրային կապերի բաժնի ղեկավար',
                'position_ru' => 'Руководитель отделa сотрудничества и общественных связей',


                'biography_en' => '<div>
                <h4><strong>Education</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>2009 up to now:</p>
                <p>Yerevan State University, writing PhD thesis</p>
                </li>
                <li>
                <p>2009:</p>
                <p>Yerevan State University, Department of Journalism, Master\'s degree</p>
                </li>
                <li>
                <p>2007:</p>
                <p>Yerevan State University, Department of Journalism, Bachelor\'s degree</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Trainings</strong></p>
                <h4>Participation in numerous professional trainings in Armenia and abroad</h4>
                </div>
                <div>
                <p><strong>Work experience</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 February up to now:</p>
                <p>Head of the Unit of Cooperation and Public Relations of Academy of Justice</p>
                </li>
                <li>
                <p>2014-2017:</p>
                <p>Responsible for International Cooperation and Public Relations of Academy of Justice</p>
                </li>
                <li>
                <p>2009 up to now:</p>
                <p>Yerevan State University, Department of Journalism, lecturer</p>
                </li>
                <li>
                <p>2009-2017:</p>
                <p>Yerevan State University, &ldquo;Journalist&rdquo; newspaper, chief editor</p>
                </li>
                <li>
                <p>2007-2014:</p>
                <p>&ldquo;Yerkir Media&rdquo; TV, &ldquo;Yerkirn aysor&rdquo; news program, journalist</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Languages</strong></p>
                <h4>Russian, English</h4>
                </div>
                <div>
                <p><strong>Publications</strong></p>
                <h4>Author and co-author of about two dozen scientific articles published in Armenian and foreign scientific journals</h4>
                </div>
                <div>
                <p><strong>Awards, prizes</strong></p>
                <h4>Golden Medal of the Academy of Justice of RA</h4>
                <h4>Winner of the nomination "The best publicist article", Union of Armenians in Russia</h4>
                </div>
                <div>
                <p><strong>Unit of Cooperation and Public Relations</strong></p>
                <h4>The unit carries out the activities for implementing its goals and objectives in the following directions:</h4>
                <h4>establishing and expanding cooperation with Armenian, Artsakh, foreign and international organizations, which is one of the key directions of the Academy\'s activities,</h4>
                <h4>ensuring publicity of the Academy\'s activities (organizing communication between printed and online media and journalists, covering of the Academy\'s public events, development, translation and sharing of information packages for public awareness on activities and programs organized by the Academy or with its participation, providing information for official website and etc),</h4>
                <h4>organization of visits, events,</h4>
                <h4>development and strengthening of public relations,</h4>
                <h4>other current activities.</h4>
                </div>',


                'biography_am' => '<div>
                <h4><strong>Կրթություն</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>2009 թ.-ից</p>
                <p>ԵՊՀ մամուլի պատմության և տեսության ամբիոնի հայցորդ</p>
                </li>
                <li>
                <p>2007-2009 թթ.</p>
                <p>ԵՊՀ ժուռնալիստիկայի ֆակուլտետի մագիստրատուրա</p>
                </li>
                <li>
                <p>2003-2007 թթ.</p>
                <p>ԵՊՀ ժուռնալիստիկայի ֆակուլտետի բակալավրիատ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Վերապատրաստումներ</strong></p>
                <h4>Մասնակցել է բազմաթիվ մասնագիտական վերապատրաստումների Հայաստանում և արտերկրում</h4>
                </div>
                <div>
                <p><strong>Աշխատանքային փորձ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ.-ի փետրվարից</p>
                <p>Արդարադատության ակադեմիայի համագործակցության և հանրային կապերի բաժնի ղեկավար</p>
                </li>
                <li>
                <p>2014-2017 թթ.</p>
                <p>Արդարադատության ակադեմիայի միջազգային համագործակցության և հանրային կապերի պատասխանատու</p>
                </li>
                <li>
                <p>2009 թ.-ից մինչ օրս</p>
                <p>ԵՊՀ տպագիր և հեռարձակվող լրատվամիջոցների ամբիոնի դասախոս</p>
                </li>
                <li>
                <p>2009-2017 թթ.</p>
                <p>ԵՊՀ &laquo;Ժուռնալիստ&raquo; թերթի պատասխանատու խմբագիր</p>
                </li>
                <li>
                <p>2007-2014 թթ.</p>
                <p>&laquo;Երկիր Մեդիա&nbsp;ՀԸ&nbsp;&laquo;Երկիրն այսօր&raquo; լրատվական ծրագրի լրագրող</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, անգլերեն</h4>
                </div>
                <div>
                <p><strong>Հրապարակումներ</strong></p>
                <h4>Հեղինակ և համահեղինակ է շուրջ երկու տասնյակ գիտական հոդվածների, որոնք հրապարակվել են հայաստանյան և արտասահմանյան գիտական ամսագրերում</h4>
                </div>
                <div>
                <p><strong>Պարգևներ, մրցանակներ</strong></p>
                <h4>Արդարադատության ակադեմիայի հուշամեդալ</h4>
                <h4>&laquo;Լավագույն հրապարակախոսական հոդված&raquo; անվանակարգի հաղթող, Ռուսաստանի հայերի միություն</h4>
                </div>
                <div>
                <p><strong>Համագործակցության և հանրային կապերի բաժին</strong></p>
                <h4>Բաժինն իր գործունեության նպատակների ու խնդիրների կենսագործման ուղղությամբ աշխատանքներ է իրականացնում հետևյալ ուղղություններով՝</h4>
                <h4>հայաստանյան, արցախյան, օտարերկրյա և միջազգային կառույցների հետ համագործակցության հաստատում և ընդլայնում, ինչը Ակադեմիայի գործունեության առանցքային ուղղություններից է,</h4>
                <h4>Ակադեմիայի գործունեության հրապարակայնության ապահովում (տպագիր և էլեկտրոնային լրատվամիջոցների և լրագրողների միջև հաղորդակցության կազմակերպում, Ակադեմիայի հանրային միջոցառումների լուսաբանում, Ակադեմիայի կողմից կամ նրա մասնակցությամբ կազմակերպված աշխատանքների և ծրագրերի վերաբերյալ հանրության իրազեկմանն ուղղված տեղեկատվական փաթեթների մշակում, թարգմանում և տարածում, համացանցային պաշտոնական կայքէջի սպասարկում և այլն),</h4>
                <h4>այցերի, միջոցառումների կազմակերպում,</h4>
                <h4>հասարակայնության հետ կապերի զարգացում և ամրապնդում,</h4>
                <h4>ընթացիկ այլ աշխատանքներ:</h4>
                </div>',


                'biography_ru' => '<div>
                <h4><strong>Образование</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>С 2009 года</p>
                <p>Ереванский государственный университет, Кафедра истории и теории прессы, аспирант</p>
                </li>
                <li>
                <p>2007-2009&nbsp;гг.</p>
                <p>Ереванский государственный университет, Факультет журналистики, магистратура</p>
                </li>
                <li>
                <p>2003-2007&nbsp;гг.</p>
                <p>Ереванский государственный университет, Факультет журналистики, бакалавр</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Переподготовки</strong></p>
                <h4>Участвовала в многочисленных профессиональных тренингах в Армении и за рубежом</h4>
                </div>
                <div>
                <p><strong>Трудовая деятельность</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>С февраля 2017 года</p>
                <p>руководитель отдела сотрудничества и общественных связей Академии юстиции</p>
                </li>
                <li>
                <p>2014-2017 гг.</p>
                <p>ответственный за международное сотрудничество и связи с общественностью Академии юстиции</p>
                </li>
                <li>
                <p>С 2009 года</p>
                <p>преподаватель кафедры печатных и вещательных СМИ, Ереванский государственный университет</p>
                </li>
                <li>
                <p>2009-2017 гг.</p>
                <p>главный редактор журнала &laquo;Журналист&raquo; Ереванского государственного университета</p>
                </li>
                <li>
                <p>2007-2014 гг.</p>
                <p>корреспондент новостной программы &laquo;Еркирн айсор&raquo;, &laquo;Еркир-медиа&raquo; ТВ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, английский</h4>
                </div>
                <div>
                <p><strong>Публикации</strong></p>
                <h4>Автор и соавтор около 20 научных статей, опубликованных в армянских и зарубежных научных журналах</h4>
                </div>
                <div>
                <p><strong>Награды, призы</strong></p>
                <h4>Медаль Академии юстиции</h4>
                <h4>Лауреат номинации &laquo;Лучшая публицистическая статья&raquo;, Союз армян России</h4>
                </div>
                <div>
                <p><strong>Отдел сотрудничества и общественных связей</strong></p>
                <h4>Отдел для реализации своих целей и задач осуществляет деятельность по следующим направлениям:</h4>
                <h4>установление и расширение сотрудничества с армянскими, арцахскими, зарубежными и международными организациями, что является одним из ключевых направлений деятельности Академии,</h4>
                <h4>обеспечение публичности деятельности Академии (организация коммуникации Академии с печатными и электронными СМИ, журналистами, освещение общественных мероприятий Академии, разработка, перевод и распространение информационных пакетов для информирования общественности о мероприятиях и программах, реализуемых Академией или при ее участии, информационная поддержка официального сайта и т.д.),</h4>
                <h4>организация визитов, мероприятий,</h4>
                <h4>развитие и укрепление связей с общественностью,</h4>
                <h4>иная текущая деятельность.</h4>
                </div>',
            ],
                        
            
            


            


            // ************************************************************************************************
            [
                'name_en' => 'Unit of the Staff and Document Management',
                'name_am' => 'Անձնակազմի և փաստաթղթաշրջանառության բաժին',
                'name_ru' => 'Отдел по работе с персоналом и документооборота',
                'position_en' => null,
                'position_am' => null,
                'position_ru' => null,


                'biography_en' => '<div><h4>The unit provides the document management of the Academy, conducts the personal data packages of the employees, forms internal and individual legal acts of the rector of the Academy, as well as draft employment contracts, implements other functions․</h4>
                </div>',


                'biography_am' => '<div><h4>Բաժինն ապահովում է ակադեմիայի փաստաթղթաշրջանառությունը, վարում է աշխատակիցների անձնական գործերը, կազմում է Ակադեմիայի ռեկտորի ներքին և անհատական իրավական ակտերի, ինչպես նաև աշխատանքային պայմանագրերի նախագծերը, իրականացնում է սահմանված այլ գործառույթներ:</h4>
                </div>',


                'biography_ru' => '<div><h4>Отдел обеспечивает документооборот в Академии, ведет личные дела сотрудников Академии, составляет проекты внутренних и личных правовых актов ректора Академии, а также составляет проекты трудовых договоров, выполняет иные функции.</h4>
                </div>',
            ],
                                    
            
            


            


            // ************************************************************************************************
            [
                'name_en' => 'Alexander Pilosyan',
                'name_am' => 'Ալեքսանդր Փիլոսյան',
                'name_ru' => 'Александр Пилосян',
                'position_en' => 'Head of the Unit of Technical and Economic activities-technical manager',
                'position_am' => 'Տեխնիկատնտեսական բաժնի ղեկավար-տնտեսվար',
                'position_ru' => 'Руководитель хозяйственно-технического отдела',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>04.08.1958, Republic of Georgia, Akhalkalaki region, Sulda</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1980:</p>
                <p>Basic school of Sulda</p>
                </li>
                <li>
                <p>1975:</p>
                <p>Faculty of Finance and Accounting of Yerevan Institute of National Economy</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Work experience</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 up to now</p>
                <p>Head of the Unit of Technical and Economic activities-technical manager of the Academy of Justice</p>
                </li>
                <li>
                <p>2014-2017:</p>
                <p>Technical manager of the Academy of Justice</p>
                </li>
                <li>
                <p>1996-2013:</p>
                <p>"Profitold" LLC, RF, Moscow</p>
                </li>
                <li>
                <p>1992-1996:</p>
                <p>Haykop Public Food Administration</p>
                </li>
                <li>
                <p>1980-1991:</p>
                <p>Ministry of Commerce, Armenian SSR</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Diplomas, letters of appreciation, medals</strong></p>
                <h4>Medal of the Academy of Justice</h4>
                <h4>Diploma, letter of appreciation, Academy of Justice</h4>
                <h4>Diplomas, letters of appreciation Ministry of Commerce, Armenian SSR</h4>
                </div>
                <div>
                <p><strong>Marital Status</strong></p>
                <h4>Married, has 3 daughters.</h4>
                </div>
                <div>
                <p><strong>Unit of Tehchnical and Economic activities</strong></p>
                <h4>The Unit implements the activities in the following directions:</h4>
                <h4>Protection and repairing of the building complex,</h4>
                <h4>Provision of uninterrupted work of engineering nodes: electrical, gas service, water supply, telephone and internet connection,</h4>
                <h4>Organizing the supply of stationery, economic and construction products, fuel,</h4>
                <h4>Distribution of necessary goods for the relevant units,</h4>
                <h4>Renovation of the yard area, greenery.</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>04.08.1958, Վրաստանի Հանրապետություն, Ախալքալաքի շրջան, գ․ Սուլդա</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1980 թ.</p>
                <p>Երևանի ժողովրդական տնտեսության ինստիտուտի ֆինանսահաշվային ֆակուլտետ</p>
                </li>
                <li>
                <p>1975 թ.</p>
                <p>Սուլդայի միջնակարգ դպրոց</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Աշխատանքային փորձ</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>2017թ.-ից առ այսօր</p>
                <p>Արդարադատության ակադեմիայի տեխնիկատնտեսական բաժնի ղեկավար-տնտեսվար&nbsp;</p>
                </li>
                <li>
                <p>2014-2017 թթ.</p>
                <p>Արդարադատության ակադեմիայի տնտեսվար</p>
                </li>
                <li>
                <p>1996-2013 թթ.</p>
                <p>&laquo;Պրոֆիտոլդ&raquo; ՍՊԸ, ՌԴ, Մոսկվա</p>
                </li>
                <li>
                <p>1992-1996 թթ.</p>
                <p>Հայկոպ հասարակական սննդի կառավարչություն</p>
                </li>
                <li>
                <p>1980-1991 թթ.</p>
                <p>ՀԽՍՀ առևտրի նախարարություն&nbsp;</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Պատվոգրեր, շնորհակալագրեր, մեդալներ</strong></p>
                <h4>Հուշամեդալ, Արդարադատության ակադեմիա</h4>
                <h4>Պատվոգիր, Շնորհակալագիր, Արդարադատության ակադեմիա</h4>
                <h4>Պատվոգրեր, շնորհակալագրեր, ՀԽՍՀ առևտրի նախարարություն</h4>
                </div>
                <div>
                <p><strong>Ընտանեկան կարգավիճակ</strong></p>
                <h4>Ամուսնացած է, ունի երեք դուստր</h4>
                </div>
                <div>
                <p><strong>Տեխնիկատնտեսական բաժին</strong></p>
                <h4>Բաժինն աշխատանքներ է իրականացնում հետևյալ ուղղություններով`</h4>
                <h4>շենքային համալիրի պահպանման և վերանորոգման աշխատանքներ,</h4>
                <h4>ինժեներական հանգույցների անխափան աշխատանքի ապահովում (էլեկտրական, գազսպասարկման, ջրամատակարարման, հեռախոսային և ինտերնետ կապի),</h4>
                <h4>գրենական պիտույքների, տնտեսական և շինարարական ապրանքների, վառելիքի մատակարարման կազմակերպում,</h4>
                <h4>համապատասխան ստորաբաժանումների համար անհրաժեշտ ապրանքների բաշխում,</h4>
                <h4>շենքի բակային տարածքի բարելավում և կանաչապատում:</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата и место рождения&nbsp;</strong></p>
                <h4>04.08.1958, Грузия ССР, Ахалкалакская область, с.Сулда</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1980 финансово</p>
                <p>учетный факультет Ереванского института народного хозяйства</p>
                </li>
                <li>
                <p>1975 г.</p>
                <p>средняя школа с.Сулда</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Трудовая деятельность</strong></h4>
                <ul style="list-style-type: none;">
                <li>
                <p>С 2017 года</p>
                <p>руководитель хозяйственно-технического отдела Академии юстиции</p>
                </li>
                <li>
                <p>2014-2017 гг.</p>
                <p>завхоз Академии юстиции</p>
                </li>
                <li>
                <p>1996-2013 гг.</p>
                <p>ООО &laquo;Профитольд&raquo;, РФ, Москва</p>
                </li>
                <li>
                <p>1992-1996 гг.</p>
                <p>администрация общественного питания &laquo;Айкоп&raquo;</p>
                </li>
                <li>
                <p>1980-1991 гг.</p>
                <p>Министерство торговли, Армянская ССР</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Похвальные грамоты, благодарственные письма, медали</strong></p>
                <h4>Медаль Академии юстиции</h4>
                <h4>Похвальная грамота, благодарственное письмо, Академия юстиции</h4>
                <h4>Похвальные грамоты, благодарственные письма Министерства торговли АССР</h4>
                </div>
                <div>
                <p><strong>Семейное положение</strong></p>
                <h4>Женат, имеет 3 дочерей.</h4>
                </div>
                <div>
                <p><strong>Хозяйственно-технический отдел</strong></p>
                <h4>Отдел осуществляет деятельность по следующим направлениям:</h4>
                <h4>работы, направленные на поддержание в надлежащем состоянии здания Академии,</h4>
                <h4>обеспечение бесперебойной работы инженерных узлов: электричество, газ, водоснабжение, телефон и интернет,</h4>
                <h4>организация поставок, необходимых для деятельности Академии, канцелярских принадлежностей, хозяйственных товаров, строительных материалов, топлива,</h4>
                <h4>распространение необходимых материальных ценностей для нужд соответствующих подразделений Академии,</h4>
                <h4>благоустройство и озеленение территории Академии․</h4>
                </div>',
            ],
            


            


            // ************************************************************************************************
            [
                'name_en' => 'Hotel',
                'name_am' => 'Հյուրանոց',
                'name_ru' => 'Гостиница',
                'position_en' => null,
                'position_am' => null,
                'position_ru' => null,


                'biography_en' => '<div>
                <h4>According to the Law of the RA "On the Academy of Justice", the hotel complex (hotel) of the Academy hosts the trainees who are trained and permanently live outside the place of training: judges, prosecutors, investigators, judicial servants, judicial bailiffs, state servants of the Department of the Investigative Committee of the RA, State servants in the staff of the Prosecutor\'s office. Besides the above mentioned trainees, other persons can also use the hotel with the permission of the Rector of the Academy. The terms of use of the hotel are prescribed by the procedure "Use of the Hotel of the Academy of Justice" in accordance with the relevant order of the Rector of the Academy.</h4>
                <h4>The hotel consists of 16 double rooms equipped with all amenities: bathroom, refrigerator, TV-set, air conditioner also internet connection.</h4>
                </div>',


                'biography_am' => '<div>
                <h4>&laquo;Արդարադատության ակադեմիայի մասին&raquo; ՀՀ օրենքով սահմանված կարգով Ակադեմիայի հյուրանոցային համալիրը (հյուրանոցը) հյուրընկալում է վերապատրաստում անցնող և վերապատրաստման վայրից դուրս մշտապես բնակվող ունկնդիրներին՝ դատավորներին, դատախազներին, քննիչներին, դատական ծառայողներին, դատական կարգադրիչներին, ՀՀ քննչական կոմիտեի դեպարտամենտում պետական ծառայողներին, ՀՀ դատախազության աշխատակազմում պետական ծառայողներին: Բացի վերոնշյալ ունկնդիրներից՝ Ակադեմիայի ռեկտորի թույլտվությամբ հյուրանոցից կարող են օգտվել նաև այլ անձինք: Հյուրանոցից օգտվելու պայմանները սահմանված են &laquo;Արդարադատության ակադեմիայի հյուրանոցից օգտվելու&raquo; կարգով՝ հաստատված Ակադեմիայի ռեկտորի համապատասխան հրամանի հիման վրա:</h4>
                <h4>Հյուրանոցը բաղկացած է 16 երկտեղանոց սենյակներից, որոնք ապահովված են կենցաղային բոլոր հարմարություններով՝ լոգասենյակ, սառնարան, հեռուստացույց, օդորակիչ, նաև ինտերնետային կապ:</h4>
                </div>',


                'biography_ru' => '<div>
                <h4>В соответствии с Законом РА "Об Академии юстиции" гостиничный комплекс (гостиница) Академии принимает слушателей, проходящих переподготовку и постоянно проживающих за пределами места обучения: судей, прокуроров, следователей, судебных служащих, судебных приставов, государственных служащих Следственного комитета РА, государственных служащих прокуратуры РА. Помимо упомянутых выше слушателей, с разрешения ректора Академии, услугами гостиницы могут воспользоваться и иные лица. Условия пребывания в гостиничном комплексе закреплены в порядке &laquo;Об использовании гостиницы Академии юстиции&raquo;, утвержденном ректором Академии.</h4>
                <h4>Гостиница включает 16 двухместных номера, оборудованных всеми удобствами: ванной комнатой, холодильником, телевизором, кондиционером и интернетом.</h4>
                </div>',
            ],
        ]);
    }
}
