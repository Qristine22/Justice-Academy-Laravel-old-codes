<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title_en' => 'Seminar for the Staff of the Academy',
                'title_am' => 'Սեմինար՝ Արդարադատության ակադեմիայի աշխատակազմի համար',
                'title_ru' => 'Семинар для сотрудников Академии юстиции',
                'description_en' => '<p>On the 29th of October at the Academy of Justice the German Foundation for International Legal Cooperation (IRZ) held a seminar for the staff of the Academy. The seminar was dedicated to the peculiarities of organizing the training in the judiciary, styles of adult training, curriculum development and etc. The seminar was conducted by an international expert, doctor of education and training Otilia Stefania Pacurari.</p>
                <p>&nbsp;</p>
                <p>Within the framework of the program &ldquo;Consolidation of the Justice System&rdquo; implemented by IRZ and with the financial support of the EU the Academy jointly with IRZ conducts a number of trainings both for the trainees of the Academy and for the trainers and the staff.</p>',
                'description_am' => '<p>Հոկտեմբերի 29-ին Արդարադատության ակադեմիայում Միջազգային իրավական համագործակցության գերմանական հիմնադրամը (IRZ) անցկացրեց սեմինար Ակադեմիայի աշխատակիցների համար: Սեմինարը նվիրված էր դատական համակարգում ուսուցման կազմակերպման առանձնահատկություններին, մեծահասակների ուսուցման ոճերին, ուսուցման պլանի կազմմանը և այլն: Սեմինարը վարում էր միջազգային փորձագետ, կրթության և վերապատրաստման գծով դոկտոր Օթիլիա Ստեֆանիա Պակուրարին:</p>
                <p>&nbsp;</p>
                <p>ԵՄ-ի կողմից ֆինանսավորվող և IRZ-ի կողմից իրականացվող &laquo;Արդարադատության համակարգի ամրապնդում&raquo; ծրագրի շրջանակում Ակադեմիան IRZ-ի հետ համատեղ իրականացնում է վերապատրաստումների շարք ինչպես Ակադեմիայի ունկնդիրների, այնպես էլ դասընթացավարների և աշխատակազմի համար:</p>
                <p>&nbsp;</p>',
                'description_ru' => '<p>29-го октября в Академии юстиции Германский фонд международного правового сотрудничества (IRZ) провел семинар для сотрудников Академии. Семинар был посвящен особенностям организации обучения в судебной системе, методике обучения взрослых, составлению плана обучения и т. д. Семинар провела международный эксперт, доктор по образованию и переподготовке Отилия Стефания Пакурари.</p>
                <p>&nbsp;</p>
                <p>При финансовой поддержке ЕС и в рамках программы IRZ &laquo;Укрепление системы правосудия&raquo;, Академия совместно с IRZ проводит цикл переподготовок как для слушателей Академии, так и для преподавателей и сотрудников.</p>',
                'bg' => 'news/xiBIEoCJ78Tmc4ENTgd8HIgVNiQ7G5w51PwAJGdi.jpg',
                'date' => '29/10/2021',
            ],
            [
                'title_en' => 'It has been launched the initial training of candidates of prosecutors of 2021-2022',
                'title_am' => 'Մեկնարկեց դատախազի թեկնածուների 2021-2022թթ. մասնագիտական պատրաստումը',
                'title_ru' => 'Началась профессиональная подготовка кандидатов на должности прокуроров 2020-2021 гг.',
                'description_en' => '<p>On the 1st of November at the Academy of Justice it has been launched the initial training of trainees - persons included in the list of candidates of prosecutors of 2021-2022. The group includes 23 candidates.</p>
                <p>&nbsp;</p>
                <p>Before the first course Rector Sergey Arakelyan met with the trainees. The Rector congratulated them on becoming the trainee of the Academy, wished health and success and hoped that everyone will complete the training and will be appointed to the position of prosecutor. The Rector also touched upon the initial training&rsquo;s program, content-organizational issues related to the training process.</p>
                <p>&nbsp;</p>
                <p>The duration of initial training for candidates of prosecutors is 7 months including the practice. The initial training is expected to be completed on the 31st of May in 2022.</p>',
                'description_am' => '<p>Նոյեմբերի 1-ին մեկնարկեց Արդարադատության ակադեմիայի ունկնդիրների՝ դատախազների թեկնածությունների ցուցակում ընդգրկված անձանց 2021-2022թթ. մասնագիտական պատրաստումը: Խմբում ընդգրկված է դատախազի 23 թեկնածու:</p>
                <p><br />Առաջին դասընթացից առաջ ռեկտոր Սերգեյ Առաքելյանը հանդիպեց ունկնդիրներին:&nbsp;Ռեկտորը շնորհավորեց Ակադեմիայի ունկնդիր դառնալու կապակցությամբ, առողջություն և հաջողություն մաղթեց նրանց և հույս հայտնեց, որ բոլորը կավարտեն ուսուցումը և կնշանակվեն դատախազի պաշտոնում: Ռեկտորն անդրադաձավ նաև մասնագիտական պատրաստման ուսուցման ծրագրին, ուսումնառության գործընթացին առնչվող բովանդակային և կազմակերպական հարցերի:</p>
                <p>&nbsp;</p>
                <p>Մասնագիտական պատրաստում անցնող դատախազի թեկնածուների համար ուսումնառության տևողությունը 7 ամիս է՝ ներառյալ փորձաշրջանը: Մասնագիտական պատրաստումը նախատեսվում է ավարտել 2022թ. մայիսի 31-ին:</p>',
                'description_ru' => '<p>1-го ноября в Академии юстиции началась профессиональная подготовка слушателей - лиц, включенных в список кандидатов на должности прокуроров 2020-2021 гг. В состав данной группы кандидатов на должности прокуроров входят 23 слушателя.</p>
                <p>&nbsp;</p>
                <p>В преддверии начала обучения ректор Сергей Аракелян встретился со слушателями. Ректор поздравил с поступлением в Академию, пожелал здоровья и успехов слушателям, и выразил надежду на то, что все слушатели успешно завершив обучение будут назначены на должность прокурора. Ректор представил программу профессиональной подготовки и затронул ряд содержательных и организационных вопросов, касающихся процесса обучения.</p>
                <p>&nbsp;</p>
                <p>Продолжительность профессиональной подготовки кандидатов на должности прокуроров составляет 7 месяцев, включая практику. Профессиональную подготовку планируется завершить 31-го мая 2022 года.</p>',
                'bg' => 'news/ZS9s1EEn3VgWfF7ZWQGfAuYS2hj2J64l3uOJJN90.jpg',
                'date' => '01/11/2021',
            ],
            [
                'title_en' => 'The Rector participated in an international roundtable discussion in Nur-Sultan',
                'title_am' => 'Ռեկտորը Նուր-Սուլթանում մասնակցել է միջազգային կլոր-սեղան քննարկման',
                'title_ru' => 'Ректор в Нур-Султане принял участие в международном круглом столе',
                'description_en' => '<p>By the invitation of the Council of Europe (CoE) from the 27th to 28th of October in Nur-Sultan, the capital of Kazakhstan the Rector of the Academy of Justice Sergey Arakelyan participated in an international roundtable discussion on &ldquo;Reforms of the Judiciary in Kazakhstan: Addressing New Challenges by using Best International Practices&rdquo;. Sergey Arakelyan delivered a speech dedicated to the introduction of HELP courses in the curricula of judges, prosecutors, investigators and other legal professionals based on the experience of the Academy of Justice of Armenia.</p>
                <p>&nbsp;</p>
                <p>The discussion was organized by the Council of Europe, the Venice Commission and the Supreme Court of Kazakhstan funded by the European Union (EU) and the Council of Europe.</p>',
                'description_am' => '<p>Արդարադատության ակադեմիայի ռեկտոր Սերգեյ Առաքելյանը, Եվրոպայի խորհրդի (ԵԽ) հրավերով, հոկտեմբերի 27-ից 28-ը Ղազախստանի մայրաքաղաք Նուր-Սուլթանում մասնակցել է &laquo;Դատական համակարգի բարեփոխումները Ղազախստանում. նոր մարտահրավերների լուծումներ՝ միջազգային լավագույն փորձի կիրառմամբ&raquo; միջազգային կլոր-սեղան քննարկմանը: Սերգեյ Առաքելյանը հանդես է եկել ելույթով, որը նվիրված էր HELP դասընթացների ներդրմանը դատավորների, դատախազների, քննիչների և իրավական ոլորտի այլ մասնագետների կրթական ծրագրերում՝ Հայաստանի Արդարադատության ակադեմիայի փորձի հիման վրա:</p>
                <p>&nbsp;</p>
                <p>Քննարկումը կազմակերպվել էր ԵԽ-ի, Վենետիկի հանձնաժողովի և Ղազախստանի Գերագույն դատարանի կողմից՝ Եվրոպական միության (ԵՄ) և ԵԽ-ի ֆինանսավորմամբ:</p>',
                'description_ru' => '<p>Ректор Академии юстиции Сергей Аракелян, по приглашению Совета Европы (СЕ), с 27 по 28 октября в столице Казахстана Нур-Султане принял участие в международном круглом столе на тему &laquo;Реформы судебной системы в Казахстане: решение новых вызовов с использованием лучшей международной практики&raquo;. Сергей Аракелян выступил с речью, посвященной внедрению курсов HELP в учебные программы судей, прокуроров, следователей и других специалистов правовой сферы в контексте опыта Академии юстиции Армении.</p>
                <p>&nbsp;</p>
                <p>Обсуждение было организовано Советом Европы, Венецианской комиссией и Верховным судом Казахстана при финансовой поддержке ЕС и СЕ.</p>',
                'bg' => 'news/S85gHOPAKTUY9bFNCAKBO8nTL3SPuhH3Xi99HKlp.png',
                'date' => '02/11/2021',
            ],
        ]);
    }
}
