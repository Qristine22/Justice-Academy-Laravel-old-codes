<header class="admin-header">
    <div class="admin-header__logo">
        <a href="{{ route('home') }}">
            <img class="img" src="/media/img/logo/brownLogo.png" alt="brownLogo">
        </a>
    </div>
    <div class="admin-nav">
        <ul class="admin-header__list">
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if (Request::is('admin/home/*', 'admin/home'))
                        admin-header__link-active @endif"
                        href="{{ route('admin.home.index') }}">Գլխավոր էջ</a>
                </div>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if (Request::is('admin/header/*', 'admin/header', 'admin/subheader',
                        'admin/subheader/*', 'admin/recycleBin/header', 'admin/recycleBin/header/*', 'admin/recycleBin/subheader',
                        'admin/recycleBin/subheader/*'))admin-header__link-active @endif"
                        href="{{ route('admin.header.index') }}">Նավիգացիա</a>
                </div>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if (Request::is('admin/about/*', 'admin/about'))
                        admin-header__link-active @endif"
                        href="{{ route('admin.about.page.index') }}">Ակադեմիայի մասին</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if (Request::is('admin/about/governing-board-page',
                            'admin/about/governing-board-page/*', 'admin/about/governing-board-decree',
                            'admin/about/governing-board-decree/*', 'admin/about/governing-board-staff/*',
                            'admin/about/governing-board-staff', 'admin/about/recycleBin/page', 'admin/about/recycleBin/page/*'))admin-header__link-active @endif" href="{{ route('admin.about.governing-board-page.index') }}">
                            Կառավարման խորհուրդ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/rectors-page', 
                            'admin/about/rectors-page/*', 'admin/about/rectors-decree', 'admin/about/rectors-decree/*', 
                            'admin/about/recycleBin/rectors-page', 'admin/about/recycleBin/rectors-page/*')) admin-header__link-active @endif" href="{{ route('admin.about.rectors-page.index') }}">
                            Ռեկտորի Էջ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/rectors-biography', 
                            'admin/about/rectors-biography/*', 'admin/about/former-rectors-biography', 
                            'admin/about/former-rectors-biography/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.rectors-biography.index') }}">
                            Ռեկտորի կենսագրություն
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/academy-structure', 
                            'admin/about/academy-structure/*', 'admin/about/workers/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.academy-structure.index') }}">Ակադեմիայի կառուցվածք</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/report', 'admin/about/report/*',  
                            'admin/about/recycleBin/report', 'admin/about/recycleBin/report/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.report.index') }}">
                            Հաշվետվություններ և աուդիտորական եզրակացություններ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/graduates', 
                            'admin/about/graduates/*', 'admin/about/recycleBin/graduates', 'admin/about/recycleBin/graduates/*')) admin-header__link-active @endif" href="{{ route('admin.about.graduates.index') }}">Շրջանավարտներ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/admission',
                            'admin/about/admission/*', 'admin/about/candidate', 'admin/about/candidate/*'))
                            admin-header__link-active @endif" href="{{ route('admin.about.admission.index') }}">Ընդունելություն</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/gallery',
                            'admin/about/gallery/*', 'admin/about/gallery-video/*', 'admin/about/recycleBin/gallery',
                            'admin/about/recycleBin/gallery/*', 'admin/about/recycleBin/gallery-video/*')) admin-header__link-active @endif" href="{{ route('admin.about.gallery.index') }}">Տեսադարան</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/mass-media', 
                            'admin/about/mass-media/*', 'admin/about/recycleBin/mass-media',
                            'admin/about/recycleBin/mass-media/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.mass-media.index') }}">ԶԼՄ-ները մեր մասին</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/news', 'admin/news/*', 'admin/recycleBin/news',
                        'admin/recycleBin/news/*')) admin-header__link-active @endif" href="{{ route('admin.news.index') }}">
                        Նորություննր
                    </a>
                </div>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/full-time-education', 
                        'admin/full-time-education/*')) admin-header__link-active @endif"
                        href="{{ route('admin.full-time-education.training-program.index') }}">Առկա ուսուցում</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/training-program',
                            'admin/full-time-education/training-program/*',
                            'admin/full-time-education/recycleBin/training-program',
                            'admin/full-time-education/recycleBin/training-program/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.training-program.index') }}">Ուսուցման ծրագրեր</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/conducting-exam',  
                            'admin/full-time-education/conducting-exam/*', 'admin/full-time-education/conducting-exam-video', 
                            'admin/full-time-education/conducting-exam-video/*',
                            'admin/full-time-education/recycleBin/conducting-exam',
                            'admin/full-time-education/recycleBin/conducting-exam/*',
                            'admin/full-time-education/recycleBin/conducting-exam-video/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.conducting-exam.index') }}">
                            Քննությունների անցկացման կարգ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/conducting-practice',
                            'admin/full-time-education/conducting-practice/*',
                            'admin/full-time-education/recycleBin/conducting-practice',
                            'admin/full-time-education/recycleBin/conducting-practice/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.conducting-practice.index') }}">
                            Փորձաշրջանի անցկացման կարգ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/behavior-rule',
                            'admin/full-time-education/behavior-rule/*', 'admin/full-time-education/recycleBin/behavior-rule',
                            'admin/full-time-education/recycleBin/behavior-rule/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.behavior-rule.index') }}">Ունկնդրի վարքագծի կանոններ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/dormitory-rule',
                            'admin/full-time-education/dormitory-rule/*', 'admin/full-time-education/recycleBin/dormitory-rule',
                            'admin/full-time-education/recycleBin/dormitory-rule/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.dormitory-rule.index') }}">
                            Հանրակացարանային համալիրից օգտվելու կարգ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/provide-deferral',
                            'admin/full-time-education/provide-deferral/*',
                            'admin/full-time-education/recycleBin/provide-deferral',
                            'admin/full-time-education/recycleBin/provide-deferral/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.provide-deferral.index') }}">
                            Ունկնդիրներին տարկետում տրամադրելու կարգ</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/distance-learning', 'admin/distance-learning/*'))
                        admin-header__link-active @endif"
                        href="{{ route('admin.distance-learning.page.index') }}">Հեռաուսուցում</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/courses',
                            'admin/distance-learning/courses/*', 'admin/distance-learning/recycleBin/courses',
                            'admin/distance-learning/recycleBin/courses/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.courses.index') }}">Դասընթացներ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/book',
                            'admin/distance-learning/book/*', 'admin/distance-learning/recycleBin/book',
                            'admin/distance-learning/recycleBin/book/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.book.index') }}">Գրքեր</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/motivational-video',
                            'admin/distance-learning/motivational-video/*',
                            'admin/distance-learning/recycleBin/motivational-video',
                            'admin/distance-learning/recycleBin/motivational-video/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.motivational-video.index') }}">Մոտիվացնող Տեսանյութեր</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/additional-material',
                            'admin/distance-learning/additional-material/*',
                            'admin/distance-learning/recycleBin/additional-material',
                            'admin/distance-learning/recycleBin/additional-material/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.additional-material.index') }}">Լրացուցիչ մեդիա-նյութեր</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/assignment',
                            'admin/distance-learning/assignment/*', 'admin/distance-learning/recycleBin/assignment',
                            'admin/distance-learning/recycleBin/assignment/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.assignment.index') }}">Առաջադրանքներ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/articulate',
                            'admin/distance-learning/articulate/*', 'admin/distance-learning/recycleBin/articulate',
                            'admin/distance-learning/recycleBin/articulate/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.articulate.index') }}">Articulate</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/video',
                            'admin/distance-learning/video/*', 'admin/distance-learning/recycleBin/video',
                            'admin/distance-learning/recycleBin/video/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.video.index') }}">Կարևոր Տեսանյութեր</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/video-material',
                            'admin/distance-learning/video-material/*', 'admin/distance-learning/recycleBin/video-material',
                            'admin/distance-learning/recycleBin/video-material/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.video-material.index') }}">Տեղեկատվական տեսանյութեր</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/guide',
                            'admin/distance-learning/guide/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.guide.index') }}">Հեռաուսուցման ուղեցույց</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/distance-learning/FAQ',
                            'admin/distance-learning/FAQ/*')) admin-header__link-active @endif"
                            href="{{ route('admin.distance-learning.FAQ.index') }}">Հաճախակի տրվող հարցեր</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/library','admin/library/*'))
                        admin-header__link-active @endif" href="#">Գրադարան</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/library/academy-publication',
                            'admin/library/academy-publication/*', 'admin/library/recycleBin/academy-publication',
                            'admin/library/recycleBin/academy-publication')) admin-header__link-active @endif"
                            href="{{ route('admin.library.academy-publication.index') }}">
                            Արդարադատության ակադեմիայի հրատարակություններ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/library/manual',
                            'admin/library/manual/*', 'admin/library/recycleBin/manual',
                            'admin/library/recycleBin/manual/*')) admin-header__link-active @endif"
                            href="{{ route('admin.library.manual.index') }}">Ուսումնական ձեռնարկներ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/library/professional-literature',
                            'admin/library/professional-literature/*', 'admin/library/organizing-library-activity',
                            'admin/library/organizing-library-activity/*', 'admin/library/recycleBin/professional-literature',
                            'admin/library/recycleBin/professional-literature/*')) admin-header__link-active @endif"
                            href="{{ route('admin.library.professional-literature.index') }}">Մասնագիտական գրականության ցանկ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/library/training-material',
                            'admin/library/training-material/*', 'admin/library/recycleBin/training-material',
                            'admin/library/recycleBin/training-material/*')) admin-header__link-active @endif"
                            href="{{ route('admin.library.training-material.index') }}">Ուսումնաօժանդակ նյութեր</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/library/investigator-training-module',
                            'admin/library/investigator-training-module/*',
                            'admin/library/recycleBin/investigator-training-module',
                            'admin/library/recycleBin/investigator-training-module/*')) admin-header__link-active @endif"
                            href="{{ route('admin.library.investigator-training-module.index') }}">
                            Անչափահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/library/echr-resource',
                            'admin/library/echr-resource/*', 'admin/library/echr-link/*', 'admin/library/echr-link/*',
                            'admin/library/recycleBin/echr-resource', 'admin/library/recycleBin/echr-resource/*')) admin-header__link-active @endif" href="{{ route('admin.library.echr-resource.index') }}">
                            ՄԻԵԴ իրավաբանության վերաբերյալ ռեսուրսներ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/library/video-lecture',
                            'admin/library/video-lecture/*', 'admin/library/recycleBin/video-lecture',
                            'admin/library/recycleBin/video-lecture/*')) admin-header__link-active @endif"
                            href="{{ route('admin.library.video-lecture.index') }}">Տեսադասախոսություններ</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/bulletin', 'admin/bulletin/*',
                        'admin/recycleBin/bulletin/recycleBin', 'admin/recycleBin/bulletin/recycleBin/*')) admin-header__link-active @endif" href="{{ route('admin.bulletin.bulletin.index') }}">Բանբեր</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/bulletin/info','admin/bulletin/info/*',
                            'admin/bulletin/recycleBin/info', 'admin/bulletin/recycleBin/info/*'))
                            admin-header__link-active @endif" href="{{ route('admin.bulletin.info.index') }}">Բանբեր հղումներ</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/partners', 'admin/partners/*'))
                        admin-header__link-active @endif" href="{{ route('admin.partners.partner.index') }}">Գործընկերներ</a>
                </div>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/contact', 'admin/contact/*'))
                        admin-header__link-active @endif" href="{{ route('admin.contact.page.index') }}">Հետադարձ կապ</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/contact/staff', 'admin/contact/staff/*',
                            'admin/contact/recycleBin/staff', 'admin/contact/recycleBin/staff/*'))
                            admin-header__link-active @endif" href="{{ route('admin.contact.staff.index') }}">Անձնակազմ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/contact/sites-link',
                            'admin/contact/sites-link/*', 'admin/contact/recycleBin/sites-link',
                            'admin/contact/recycleBin/sites-link/*')) admin-header__link-active @endif"
                            href="{{ route('admin.contact.sites-link.index') }}">Կայքերի հղումներ</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
