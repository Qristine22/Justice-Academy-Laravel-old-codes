<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'name_en' => 'Council of Europe',
                'name_am' => 'Եվրոպայի խորհուրդ',
                'name_ru' => 'Совет Европы',
                'logo' => 'partners/international/idwEwqqQrQUG1JzUT9WVagti1U2vMGtdmTnMwqV0.png',
                'category' => 'international',

                'description_en' => '<p><strong>Strengthening the application of the European Convention on Human Rights (ECHR) and the case law of the European Court of Human Rights (ECtHR) in Armenia</strong></p>

                <p>The program was launched on the 1st of October 2013 during the Armenian Presidency in CoE Committee of Ministers (May &ndash; November 2013) and included 2012-2014 action plan of the Council of Europe for Armenia.</p>
                
                <p>The main objective of the program is to improve the capacity of the Court of Cassation and to enhance the effective implementation and uniform application of European human rights standards in Armenia by enhancing the training capacity of the newly established Academy of Justice.</p>
                
                <p>Besides, the program will contribute to the development of the knowledge and skills of judges, prosecutors and judicial servants through applying the European human rights standards in their daily work.</p>
                
                <p>The duration of the program is 24 months funding by the Ministry of Foreign Affairs of Denmark.</p>
                
                <p>The program partners are:<br />
                <em>- Court of Cassation of RA</em><br />
                <em>- Academy of Justice</em><br />
                <em>- Ministry of Justice of RA.</em></p>
                
                <p>&nbsp;</p>
                
                <p><strong>Strengthening the Independence, Professionalism and Accountability of the Justice System in Armenia</strong></p>
                
                <p>The program was launched in June 2014. The objective of the program is to strengthen the independence of the justice system of RA and to improve professionalism and to support institutional and legislative reforms aimed at bringing European standards to Armenian judicial system.</p>
                
                <p>One of the main components of the program is raising the level of professionalism of the judiciary by enhancing the capacity of the Academy of Justice.</p>
                
                <p>The duration of the program is 24 months funding by the Council of Europe and the European Union.</p>
                
                <p><br />
                The program partners are:<br />
                <em>- Ministry of Justice of RA</em><br />
                <em>- Academy of Justice</em><br />
                <em>- School of Advocates of RA</em><br />
                <em>- The Judiciary of RA</em></p>
                
                <p>&nbsp;</p>
                
                <p><strong>Supporting the criminal justice reform and combating ill-treatment and impunity in Armenia</strong></p>
                
                <p>The program was launched on the 1st of July 2015. The objective of the program is to strengthen the application of European human rights standards in Armenia in the context of the fight against torture, ill-treatment and impunity.</p>
                
                <p>The objective of the program is to support the alignment of human rights protection policy and practice in this field by ensuring compliance of legislative and regulatory frameworks with European standards as well as develop capacities of legal professionals and law enforcement officers.</p>
                
                <p>As a result of the program it is expected:</p>
                
                <p>1. Improve the criminal legislation as well as institutional mechanisms to combat ill-treatment in line with European human rights standards,</p>
                
                <p>2. Strengthen the capacity of the Academy of Justice for the training of investigators in the area of criminal justice and human rights,</p>
                
                <p>3. Develop knowledge and skills of investigators in the area of criminal justice and human rights, including effective investigation of ill-treatment cases.</p>
                
                <p>The duration of the program is 24 months funding by the Council of Europe and the European Union.</p>
                
                <p>The program partners are:<br />
                <em>- Ministry of Justice of RA</em><br />
                <em>- Academy of Justice</em><br />
                <em>- Special Investigation Service of RA</em><br />
                <em>- Investigative Committee of RA</em></p>',

                'description_am' => '<p><strong>Մարդու իրավունքների եվրոպական կոնվենցիայի (ՄԻԵԿ) և Մարդու իրավունքների եվրոպական դատարանի (ՄԻԵԴ) նախադեպերի կիրառման ամրապնդումը Հայաստանում</strong></p>

                <p>Ծրագրի մեկնարկը տրվել է 2013թ. հոկտեմբերի 1-ին՝ ԵԽ Նախարարների կոմիտեում Հայաստանի նախագահության&nbsp;(2013թ.-ի մայիս-նոյեմբեր ամիսներ) ընթացքում և ընդգրկված է Հայաստանի համար Եվրոպայի խորհրդի 2012-2014թթ Գործողությունների ծրագրում:&nbsp;</p>
                
                <p>Ծրագրի հիմնական նպատակն է Վճռաբեկ դատարանի կարողությունների հզորացման և նորաստեղծ Արդարադատության ակադեմիայի ուսուցողական կարողությունների ընդլայնման միջոցով բարելավել մարդու իրավունքների եվրոպական չափանիշների արդյունավետ իրականացումը և միասնական կիրառումը Հայաստանում: Բացի այդ, ծրագիրը կնպաստի դատավորների, դատախազների և դատական ծառայողների գիտելիքների և հմտությունների զարգացմանը՝ մարդու իրավունքների եվրոպական չափանիշներն իրենց ամենօրյա աշխատանքում կիրառելու գործում:&nbsp;</p>
                
                <p>Ծրագրի տևողությունը 24 ամիս է, այն ֆինանսավորվում է Դանիայի արտաքին գործերի նախարարության կողմից:<br />
                <br />
                Ծրագրի գործընկերներն են՝<br />
                <em>- ՀՀ վճռաբեկ դատարան</em><br />
                <em>- Արդարադատության ակադեմիա</em><br />
                <em>- ՀՀ արդարադատության նախարարություն</em></p>
                
                <p>&nbsp;</p>
                
                <p><strong>Հայաստանի արդարադատության համակարգի անկախության, պրոֆեսիոնալիզմի և հաշվետվողականության ամրապնդումը</strong></p>
                
                <p>Ծրագրի մեկնարկը տրվել է&nbsp; 2014թ. հունիսին: Ծրագրի նպատակն է ամրապնդել Հայաստանի Հանրապետության արդարադատության համակարգի անկախությունն ու բարելավել պրոֆեսիոնալիզմը, ինչպես նաև աջակցել Հայաստանի Հանրապետության դատական համակարգը եվրոպական չափորոշիչներին համապատասխանեցնելուն ուղղված ինստիտուցիոնալ և օրենսդրական բարեփոխումներին:&nbsp;</p>
                
                <p>Ծրագրի հիմնական բաղադրիչներից է Արդարադատության ակադեմիայի կարողությունների հզորացման միջոցով դատական համակարգի պրոֆեսիոնալիզմի մակարդակի բարձրացումը:</p>
                
                <p>Ծրագրի տևողությունը 24 ամիս է, այն ֆինանսավորվում է Եվրոպայի խորհրդի և Եվրոպական միության կողմից:<br />
                <br />
                Ծրագրի գործընկերներն են՝<br />
                <em>- ՀՀ արդարադատության նախարարություն</em><br />
                <em>֊ Արդարադատության ակադեմիա</em><br />
                <em>֊ ՀՀ փաստաբանների դպրոց</em><br />
                <em>֊ ՀՀ դատական համակարգ</em></p>
                
                <p>&nbsp;</p>
                
                <p><strong>Աջակցություն Հայաստանում քրեական արդարադատության համակարգի բարեփոխումներին և պայքար վատ վերաբերմունքի և անպատժելիության դեմ</strong></p>
                
                <p>Ծրագրի մեկնարկը տրվել է 2015 թ. հուլիսի 1-ին: Ծրագրի նպատակն է ամրապնդել մարդու իրավունքների եվրոպական չափանիշների կիրառումը Հայաստանում` խոշտանգումների, վատ վերաբերմունքի և անպատժելիության դեմ պայքարի համատեքստում:</p>
                
                <p>Ծրագրի խնդիրն է նպաստել մարդու իրավունքների պաշտպանության քաղաքականության և գործելակերպի միասնականությանը` ապահովելով օրենսդրական դաշտի և կանոնակարգերի համապատասխանությունը եվրոպական չափանիշներին, ինչպես նաև զարգացնել իրավական ոլորտի մասնագետների և իրավապահ մարմինների կարողությունները:</p>
                
                <p>Ծրագրի արդյունքում ակնկալվում է.</p>
                
                <p>1. բարելավել քրեական օրենսդրությունը, ինչպես նաև վատ վերաբերմունքի դեմ պայքարի ինստիտուցիոնալ մեխանիզմները` մարդու իրավունքների եվրոպական չափանիշներին համահունչ,</p>
                
                <p>2. հզորացնել Արդարադատության ակադեմիայի կարողությունները քրեական արդարադատության և մարդու իրավունքների ոլորտում քննիչների վերապատրաստման հարցում,</p>
                
                <p>3. զարգացնել քննիչների գիտելիքները և հմտությունները քրեական արդարադատության և մարդու իրավունքների ոլորտում, այդ թվում՝ վատ վերաբերմունքի դեպքերի արդյունավետ քննության գործում:</p>
                
                <p>Ծրագրի տևողությունը 24 ամիս է, այն ֆինանսավորվում է Եվրոպայի խորհրդի և Եվրոպական միության կողմից:</p>
                
                <p>Ծրագրի գործընկերներն են՝</p>
                
                <p><em>- ՀՀ արդարադատության նախարարություն</em><br />
                <em>- Արդարադատության ակադեմիա</em><br />
                <em>- ՀՀ հատուկ քննչական ծառայություն</em><br />
                -<em>&nbsp;ՀՀ քննչական կոմիտե</em></p>',

                'description_ru' => '<p><strong>Укрепление применения Европейской конвенции о правах человека (ЕКПЧ) и прецедентного права Европейского суда по правам человека (ЕСПЧ) в Армении</strong></p>

                <p>Программа стартовала 1-го октября 2013 года в ходе председательства Армении в Комитете министров Совета Европы (май - ноябрь 2013 года) и включена в программу мероприятий Совета Европы 2012-2014 гг. для Армении.<br />
                <br />
                Основной целью программы является эффективное использование европейских стандартов в области прав человека и их унифицированное применение в Армении путем укрепления потенциала Кассационного суда, а также расширения возможностей в сфере обучения созданной недавно Академии юстиции. Кроме того, данная программа будет способствовать развитию профессиональных знаний и навыков судей, прокуроров, а также судебных служащих посредством применения европейских стандартов в области прав человека в их повседневной работе.<br />
                <br />
                Длительность программы составляет 24 месяца и финансируется Министерством иностранных дел Дании.<br />
                <br />
                <br />
                Партнеры проекта<br />
                <em>- Кассационный суд РА</em><br />
                <em>- Академия юстиции</em><br />
                <em>- Министерство юстиции РА</em></p>
                
                <p>&nbsp;</p>
                
                <p><strong>Укрепление независимости, профессионализма и подотчетности системы правосудия в Армении</strong></p>
                
                <p>Программа стартовала в июне 2014-го года. Целью программы является укрепление независимости системы правосудия РА и улучшение профессионализма, а также поддержка институциональным и законодательным реформам, направленным на приведение в соответствие с европейскими стандартами судебной системы РА.<br />
                <br />
                Одним из основных компонентов программы является повышение уровня профессионализма судебной системы путем укрипления потенциала Академии юстиции.<br />
                <br />
                Длительность программы составляет 24 месяцев и финансируется Советом Европы и Европейским союзом.<br />
                <br />
                <br />
                Партнеры проекта<br />
                <em><em>-&nbsp;</em>Министерство юстиции РА</em><br />
                <em><em>-&nbsp;</em>Академия юстиции</em><br />
                <em><em>-&nbsp;</em>Школа адвокатов РА</em><br />
                <em><em>-&nbsp;</em>Судебная система</em></p>
                
                <p>&nbsp;</p>
                
                <p><strong>Поддержка реформы уголовного правосудия и борьбы с жестоким обращением и безнаказанностью в Армении</strong></p>
                
                <p>Программа стартовала 1-го июля 2015 года. Цель программы - укрепить применение европейских стандартов в области прав человека в Армении в контексте борьбы с пытками, жестоким обращением и безнаказанностью.</p>
                
                <p>Задачей программы является способствовать сближению позиций политики и практики в области защиты прав человека путем обеспечения соответствия законодательной и нормативной базы европейским стандартам, а также развитие потенциала специалистов юридических профессий и правоохранительных органов.</p>
                
                <p>По результатам реализации программы ожидается;</p>
                
                <p>1. Совершенствовать уголовное законодательство, а также институциональные механизмы борьбы с жестоким обращением в соответствии с европейскими стандартами в области прав человека,</p>
                
                <p>2. Укрепление потенциала Академии юстиции в деле переподготовки следователей в области уголовного правосудия и прав человека,</p>
                
                <p>3. Развивать знания и навыки следователей в области уголовного правосудия и прав человека, в том числе эффективные расследования случаев жестокого обращения.</p>
                
                <p>Длительность программы составляет 24 месяцев и финансируется Советом Европы и Европейским союзом.</p>
                
                <p>Партнеры программы;<br />
                <em>- Министерство юстиции РА</em><br />
                <em>- Академия юстиции</em><br />
                <em>- Специальная следственная служба РА</em><br />
                <em>- Следственный комитет РА</em></p>',
            ],







            [
                'name_en' => 'Armenian representation of United Nations High Commissioner for Refugees',
                'name_am' => 'ՄԱԿ Փախստականների հարցերով գերագույն հանձնակատարի հայաստանյան ներկայացուցչություն',
                'name_ru' => 'Армянское представительство Верховного комиссара ООН по делам беженцев',
                'logo' => 'partners/international/lJejAH0JXwJeB1TPbWKB4IAPzCfrZMB2oIT2vIoN.png',
                'category' => 'international',

                'description_en' => '<p>The cooperation between the Academy of Justice and the Armenian representation of the UN High Commissioner for Refugees was ratified on March 9, 2016. The parties signed a memorandum of understanding that day.<br />
                The bilateral cooperation is directed towards strengthening the role of judicial authorities in the context of defense of asylum seekers&rsquo;, refugees&rsquo;, stateless people&rsquo;s rights through organizing training courses for judges, prosecutors and investigators. It is planned to include courses about the international and domestic law on refugees and stateless people in the curriculum of the Academy of Justice.<br />
                The basis for the Memorandum is the regional project 2015-2017 &ldquo;Asylum Systems Quality Initiative in Eastern Europe and South Caucasus&rdquo;.</p>',

                'description_am' => '<p>Արդարադատության ակադեմիայի և ՄԱԿ Փախստականների հարցերով գերագույն հանձնակատարի հայաստանյան ներկայացուցչության միջև համագործակցությունն իրավական հիմքերի վրա դրվեց 2016 թվականի մարտի 9-ին: Հենց այդ օրը Կողմերը Փոխըմբռնման հուշագիր ստորագրեցին:</p>

                <p>Երկկողմ համագործակցությունն ուղղված է ՀՀ-ում ապաստան հայցողների, փախստականների, քաղաքացիություն չունեցող անձանց պաշտպանության հարցում դատական մարմինների դերակատարումն ամրապնդելուն, մասնավորապես՝ դատավորների, դատախազների, քննիչների վերապատրաստման դասընթացների կազմակերպման միջոցով: Նախատեսվում է Արդարադատության ակադեմիայի ուսումնական ծրագրում ներառել փախստականների և քաղաքացիություն չունեցող անձանց առնչվող միջազգային և ներպետական իրավունքի վերաբերյալ դասընթացներ:</p>

                <p>Հուշագրի հիմքը հանդիսանում է &laquo;Ապաստանի համակարգերի որակի նախաձեռնություն Արևելյան Եվրոպայում և Հարավային Կովկասում&raquo; 2015-2017թթ. տարածաշրջանային ծրագիրը:</p>',

                'description_ru' => '<p>Сотрудничество между Академией юстиции и Армянским представительством Верховного комиссара ООН по делам беженцев юридически закреплено - 9-го марта 2016 года, подписан меморандум о взаимопонимании.<br />
                Двустороннее сотрудничество направлено на усиление роли судебных органов в сфере защиты лиц, рассчитывающих на получение убежища в РА, беженцев, лиц без гражданства посредством организации курсов переподготовки для судей, прокуроров и следователей. Планируется включить в учебную программу Академии юстиции курсы по международному и внутригосударственному (национальному) праву, по вопросам, связанным с беженцами и лицами без гражданства.<br />
                В основе меморандума региональная программа &laquo;Инициатива качества системы убежища в Восточной Европе и на Южном Кавказе&raquo; 2015-2017 гг.</p>',
            ],



            // foreign
            [
                'name_en' => 'U.S. Embassy in Armenia',
                'name_am' => 'ՀՀ-ում ԱՄՆ դեսպանություն',
                'name_ru' => 'Посольство США в Армении',
                'logo' => 'partners/foreign/EC9gGrW8fIAU9Th7RfMGm7YVrE4qGcRhl16jkYc0.png',
                'category' => 'foreign',
                'description_en' => null,
                'description_am' => null,
                'description_ru' => null,
            ],
            [
                'name_en' => 'National Prosecution Academy of Ukraine',
                'name_am' => 'Ուկրաինայի դատախազության ազգային ակադեմիա',
                'name_ru' => 'Национальная академия прокуратуры Украины',
                'logo' => 'partners/foreign/QrMouHRh0QZHfuZ7K1KPBjdVVJZZPHM4h3B5Byum.png',
                'category' => 'foreign',
                'description_en' => '<p>Cooperation between the Academy of Justice and the National Academy of Public Prosecutor&rsquo;s Office of Ukraine was ratified on the 16th of March 2017.</p>

                <p>Rector of the Academy of Justice Sergey Arakelyan and Rector of the National Academy of Public Prosecutor&#39;s Office of Ukraine Ivan Prysiazhniuk signed a cooperation agreement.</p>',
                'description_am' => '<p>Արդարադատության ակադեմիայի և Ուկրաինայի դատախազության ազգային ակադեմիայի միջև համագործակցությունն իրավական հիմքերի վրա դրվեց 2017թ. մարտի 16-ին:</p>

                <p>Արդարադատության ակադեմիայի ռեկտոր Սերգեյ Առաքելյանն ու Ուկրաինայի դատախազության ազգային ակադեմիայի ռեկտոր Իվան Պրիսյաժնյուկը համագործակցության համաձայնագիր ստորագրեցին:</p>',
                'description_ru' => '<p>Сотрудничество между Академией юстиции и Национальной академии прокуратуры Украины юридически закреплено 16-го Марта 2017 года.</p>

                <p>Ректор Академии юстиции Сергей Аракелян и Ректор Национальной академии прокуратуры Украины Иван Присяжнюк подписали договор о сотрудничестве.</p>',
            ],



            // arm&artsakh
            [
                'name_en' => 'Supreme Judicial Council of the RA',
                'name_am' => 'ՀՀ բարձրագույն դատական խորհուրդ',
                'name_ru' => 'Высший судебный совет РА',
                'logo' => 'partners/arm&artsakh/ek59V4CIjzSw1uI4BWRK9NBY5oukRFqEzzmPl6Jg.png',
                'category' => 'arm&artsakh',
                'description_en' => null,
                'description_am' => null,
                'description_ru' => null,
            ],
            [
                'name_en' => 'General Prosecutor’s office of RA',
                'name_am' => 'ՀՀ գլխավոր դատախազություն',
                'name_ru' => 'Генеральная прокуратура РА',
                'logo' => 'partners/arm&artsakh/LJjZvzxefDIkruyyRGJYQ8yBkeLBAAXhXFLC0iyG.png',
                'category' => 'arm&artsakh',
                'description_en' => null,
                'description_am' => null,
                'description_ru' => null,
            ],
        ]);
    }
}
