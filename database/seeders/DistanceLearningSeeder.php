<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceLearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distance_learnings')->insert([
            [
                'text_en' => '<p>Distance learning is a contemporary and widespread method of study (training), which has proved its effectiveness for decades. It is not casual that distance-learning systems continuously are invested in the developed countries, inter alia designed to mitigate and overcome various modern challenges.</p>

                <p>&nbsp;</p>
                
                <p>Distance learning has its unique methodology. The successful organization or effectiveness of this particular type of study (training) is mainly defined by the quality of distance learning package of the relevant subject.</p>
                
                <p>&nbsp;</p>
                
                <p>Distance learning package is a combination of all study materials necessary for organization of education, learning or training process in distance learning format. The package includes:</p>
                
                <p>&nbsp;</p>
                
                <ol>
                    <li>
                    <p>Manual/module&nbsp;- is a main learning material that involves all necessary specialized and interdisciplinary information, glossary, library sources, self-assessment questions and assignments needed for studying and completion of the course.</p>
                    </li>
                    <li>
                    <p>Glossary&nbsp;- Covers all main concepts, notions and key words the knowledge of which is necessary for proper absorption of the given text or module.</p>
                    </li>
                    <li>
                    <p>Media materials&nbsp;&ndash; various information materials (extracts from books, articles, films, videos etc.) needed for effective completion of each course of the manual/module.</p>
                    </li>
                    <li>
                    <p>Book of answers for self-assessment questions&nbsp;&ndash; separate document with primarily explanatory purpose that refers to self-assessment questions of the manual/module. This book provides explanation for both correct and incorrect answers, which allow trainee to deeper and comprehensively understand study material.</p>
                    </li>
                    <li>
                    <p>Study guide&nbsp;&ndash; includes general information about distance learning and necessary information for effective use of the distance learning package. Distance learning study guide is a methodological tool intended for trainees.</p>
                    </li>
                    <li>
                    <p>Syllabus&nbsp;&ndash; this document covers topics of the course, as well as, aims and objectives, expected outcomes, evaluation standards, literature etc. Information on distance learning provision mode is presented as well.</p>
                    </li>
                    <li>
                    <p>Course plan - this document entails course timeframe including dates of exams, submission of self-assessment tests, assignments. It includes also information on intended (in some cases) face-to-face meeting dates with trainer.</p>
                    </li>
                </ol>',

                'text_am' => '<p>Հեռաուսուցումն ուսուցման (վերապատրաստման) կազմակերպման ժամանակակից և մեծ տարածում գտած ձև է, որը տասնամյակներ շարունակ փաստել և փաստում է իր արդյունավետությունը: Պատահական չէ, որ զարգացած երկրներում հետևողականորեն ներդրվում են հեռաուսուցման համակարգեր, որոնք նաև կոչված են մեղմելու կամ հաղթահարելու հարափոփոխ կյանքի մարտահրավերները:</p>

                <p>&nbsp;</p>

                <p>Հեռաուսուցումն ունի իրականացման իր ուրույն մեթոդոլոգիան և ուսուցման (վերապատրաստման) կազմակերպման այս ձևի հաջողված կամ արդյունավետ լինելը մեծապես կախված է իր իրականացման միջոցներից մեկի՝ համապատասխան առարկայի հեռաուսուցման փաթեթի որակից:</p>

                <p>&nbsp;</p>

                <p>Հեռաուսուցման փաթեթը հեռաուսուցման ձևաչափով կրթության, ուսուցման կամ վերապատրաստման գործընթաց կազմակերպելու համար անհրաժեշտ նյութերի ամբողջությունն է: Այդ փաթեթը բաղկացած է.</p>

                <p>&nbsp;</p>

                <ol>
                    <li>
                    <p>ուսումնական ձեռնարկ/մոդուլ &ndash; հիմնական նյութն է, որը բովանդակում է առարկայի յուրացման համար անհրաժեշտ մասնագիտական և միջգիտակարգային տեղեկատվություն, բառարան, գրականության ցանկ, ինքնաստուգիչ հարցեր և համապատասխան առաջադրանքներ,</p>
                    </li>
                    <li>
                    <p>առարկայի տերմինների բառարան &ndash; բովանդակում է բոլոր այն հասկացությունները, որոնց իմացությունն անհրաժեշտ է համապատասխան տեքստը կամ դասը հավուր պատշաճի յուրացնելու համար,</p>
                    </li>
                    <li>
                    <p>մեդիա-նյութեր (տեղեկատվություն փոխանցող բոլոր միջոցներից` գրքեր, հոդվածներ, ֆիլմեր, տեսանյութեր և այլն) &ndash; ուսումնական ձեռնարկի-մոդուլի յուրաքանչյուր դասի առավել արդյունավետ յուրացմանը միտված տարաբնույթ նյութեր են,</p>
                    </li>
                    <li>
                    <p>ինքնաստուգիչ հարցերի պատասխանների գրքույկ &ndash; ուսումնական ձեռնարկի/մոդուլի ինքնաստուգիչ հարցերին վերաբերող առանձին փաստաթուղթ է, որն ունի առավելապես բացատրական բնույթ: Սույն գրքույկի միջոցով հնարավորություն կունենաք իմանալ ինքնաստուգիչ հարցերի ճիշտ պատասխանները, ինչպես նաև հնարավորինս մանրամասն ծանոթանալ համապատասխան տարբերակների ճիշտ կամ սխալ լինելու մասնագիտական բացատրությանը,</p>
                    </li>
                    <li>
                    <p>հեռաուսուցման փաթեթից օգտվելու ուղեցույց (Study guide) &ndash; բովանդակում է հեռաուսուցման ձեռնարկից/մոդուլից (Reader) արդյունավետ օգտվելու համար անհրաժեշտ տեղեկատվություն: Հեռաուսուցման փաթեթից օգտվելու ուղեցույցն ունի առավելապես մեթոդաբանական և կողմնորոշիչ նշանակություն ու նախատեսված է ունկնդիրների/վերապատրաստվողների համար,</p>
                    </li>
                    <li>
                    <p>ուսումնական ծրագիրը - այս փաստաթուղթը Ձեզ հնարավորություն կտա ծանոթանալ կոնկրետ դասընթացի ընդհանուր բնութագրին, նպատակներին և ակնկալվող ելքային արդյունքներին, գնահատման եղանակին, հեռաուսուցման կազմակերպման ձևին կամ մեթոդին, կառուցվածքին և գրականության ցանկին,</p>
                    </li>
                    <li>
                    <p>ուսումնական պլանը - այս փաստաթղթի միջոցով Դուք կարող եք ծանոթանալ դասընթացի (դասընթացով նախատեսված գործողությունների) ժամանակացույցին` առաջադրանքների հանձնարարման և կատարման, հնարավոր առերես հանդիպման ժամկետներին և այլն:</p>
                    </li>
                </ol>',

                'text_ru' => '<p>Дистанционное обучение&nbsp;- это современный и широко распространенный метод обучения (переподготовки), который на протяжении десятилетий доказал и доказывает свою эффективность. Не случайно, что в развитых странах последовательно внедряют системы дистанционного обучения, которые также призваны смягчить или преодолеть вызовы постоянно меняющихся реалий.</p>

                <p>&nbsp;</p>

                <p>Дистанционное обучение&nbsp;имеет свою методологию. Успешная организация или эффективность данной конкретной формы обучения (переподготовки) значительным образом определяется качеством пакета дистанционного обучения по соответствующему предмету.</p>

                <p>&nbsp;</p>

                <p>Пакет дистанционного обучения&nbsp;- совокупность материалов, необходимых для организации и осуществления процесса образования, обучения или переподготовки в формате дистанционного обучения.&nbsp;Данный пакет состоит из:</p>

                <p>&nbsp;</p>

                <ol>
                    <li>
                    <p>учебное пособие /модуль&nbsp;- основной материал, в состав которого входят профессиональная и междисциплинарная информация, глоссарий, перечень литературы, вопросы для самопроверки, а также соответствующие задания.</p>
                    </li>
                    <li>
                    <p>глоссарий<strong> -&nbsp;</strong>содержит все те понятия, знание которых необходимо для правильного усваивания учебного материала.</p>
                    </li>
                    <li>
                    <p>медиаресурсы&nbsp;(все виды средств передачи информации - книги, статьи, фильмы, видеозаписи и т.д.)&nbsp;- различные материалы, направленные на продуктивное усваивание учебных материалов.</p>
                    </li>
                    <li>
                    <p>сборник ответов на контрольные вопросы для самопроверки&nbsp;- отдельная брошюра, включающая в себя контрольные вопросы учебных пособий/модулей, имеющая наиболее пояснительный характер. С помощью данной брошюры вы сможете найти правильные ответы на вопросы для самопроверки, а также более подробно ознакомиться с профессиональным разъяснением того или иного варианта ответа на соответствующие вопросы.</p>
                    </li>
                    <li>
                    <p>инструкция по использованию пакета дистанционного обучения (Study guide)&nbsp;- содержит необходимую информацию для эффективного использования учебного пособия/модуля (Reader) и других учебных материалов дистанционного обучения. Инструкция по использованию пакета дистанционного обучения имеет методологическое и ориентирное значение и разработана для слушателей /лиц проходящих переподготовку.</p>
                    </li>
                    <li>
                    <p>учебная программа&nbsp;- позволит ознакомиться с общей характеристикой конкретного курса, его целями, ожидаемыми результатами, способами оценки, а также с форматом или методом проведения данного курса (несинхронное дистанционное, синхронное дистанционное, гибридное и т.д.), его структурой и перечнем литературы.</p>
                    </li>
                    <li>
                    <p>учебный план&nbsp;- позволит ознакомиться с графиком курса (планируемыми действиями в рамках данного курса) - сроками получения и выполнения заданий, а также возможных встреч с преподавателем и т.д.</p>
                    </li>
                </ol>',
            ],
        ]);
    }
}
