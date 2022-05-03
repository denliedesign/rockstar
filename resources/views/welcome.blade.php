@extends('layouts.app')
@section('content')

    <div class="gradient-splash">
        <div id="primary-bg">
            <div class="color-filter-black"></div>
            <h2 id="primary-txt-mobile" class="d-md-none">dance lessons that teach life lessons</h2>
            <h2 id="primary-txt" class="d-none d-md-block">dance lessons that teach life lessons</h2>
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-md-none btn-opacity"><div id="button-mobile" class="shadow btn btn-lg btn-kapa-teal primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-none d-md-block btn-opacity"><div id="button-tablet" class="shadow btn btn-lg btn-kapa-teal primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
        </div>

        {{--    @include('trial-modal')--}}

        <div class="container">
            <div id="next-steps">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center">
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-red">Ready To Leap In?</p>
                        <a href="https://app.jackrabbitclass.com/regv2.asp?id=504663" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">&#10097; Enroll today!</div></a>
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-teal">Want To Give It A Try?</p>
                        <a href="https://kenosha-academy-performing-arts.studiosuite.io/s/trial-classes-kleuvjip" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family">&#10097; Schedule A Trial!</div></a>
                        {{--                    <div>--}}
                        {{--                        <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>--}}
                        {{--                    </div>--}}
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-purple">Still Have Questions?</p>
                        <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-purple btn-family">&#10097; Contact Us!</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="vision" class="text-center text-white">
            <div class="container">
                <h2>We Have Built a Reputation for Excellence in Dance Instruction</h2>
                <p>
                    From your child’s first class to their graduation performance, RockStar has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, RockStar is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container">
            <div class="row my-3">
                <div class="col-sm">
                    <img src="/images/showcase-sponsor.png" alt="showcase sponsor" class="img-fluid">
                </div>
                <div class="col-sm">
                    <img src="/images/showcase-rockstar.jpg" alt="rockstar logo" class="img-fluid">
                    <h2 class="text-center">Showcase</h2>
                    <p class="text-center">
                        Saturday June 4, 2022 at 4pm
                        <br><br>
                        Carmel High School Performing Arts Center
                        <br>3600 Ocean Ave
                        <br>Carmel-By-The-Sea, CA 93923
                        <br><br>
                        <strong>Tickets go on sale May 1</strong>
                    </p>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <img src="/images/rockstar-coffee.jpeg" alt="coffee beans" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pb-5" id="class-categories">
        <div class="container pb-5">
            <h2 class="text-center pt-5">Dance Classes</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-4">
                    <div style="height: 204px; overflow: hidden;"><img src="/images/2-3.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;"></div>

                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Ages 2-3</div></a>
                </div>
                <div class="col-sm mt-4">
                    <div style="height: 204px; overflow: hidden;"><img src="/images/4-5.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;"></div>
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family mt-2" style="width: 100%;">Ages 4-5</div></a>
                </div>
                <div class="col-sm mt-4">
                    <div style="height: 204px; overflow: hidden;"><img src="/images/6-8.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;"></div>
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-purple btn-family mt-2" style="width: 100%;">Primary 6-8</div></a>
                </div>
                <div class="col-sm mt-4">
                    <div style="height: 204px; overflow: hidden;"><img src="/images/9-11.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;"></div>
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Junior 9-11</div></a>
                </div>
                <div class="col-sm mt-4">
                    <div style="height: 204px; overflow: hidden;"><img src="/images/12-and-up.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;"></div>
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family mt-2" style="width: 100%;">Teen 12 & up</div></a>
                </div>
                <div class="col-sm mt-4">
                    <div style="height: 204px; overflow: hidden;"><img src="/images/15-and-up.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;"></div>
                    <a href="/classes" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-purple btn-family mt-2" style="width: 100%;">Seniors 15 & up</div></a>
                </div>
                <div class="col-sm mt-4">
                    <div style="height: 204px; overflow: hidden;"><img src="/images/adult.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;"></div>
                    <a href="/adult-classes" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Adults</div></a>
                </div>
                <div class="col-sm mt-4">
                    <div style="height: 204px; overflow: hidden;"><img src="/images/show-team-1.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;"></div>
                    <a href="/show-team" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family mt-2" style="width: 100%;">Show Team</div></a>
                </div>
            </div>
        </div>
    </div>

    <div id="checklist-bg">
        <div class="color-filter-black"></div>
        <h2 class="secondary-txt d-none d-md-block">Parents <ion-icon name="heart"></ion-icon> <span class="txt-red">RockStar</span>...</h2>
        <div class="row secondary-txt-pos text-white text-center">
            <div class="col-sm">
                <p class="my-0 text-capitalize">
                    <ion-icon name="heart"></ion-icon> Safer Studio
                    <br><ion-icon name="heart"></ion-icon> Tech Enabled
                    <br><ion-icon name="heart"></ion-icon> Secured Facility
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0">
                    <ion-icon name="heart"></ion-icon> Written Curriculum
                    <br><ion-icon name="heart"></ion-icon> Full-Time Admin
                    <br><ion-icon name="heart"></ion-icon> YPAD Certified
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0">
                    <ion-icon name="heart"></ion-icon> Community Service
                    <br><ion-icon name="heart"></ion-icon> Background Checked
                    <br><ion-icon name="heart"></ion-icon> CPR Trained
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="d-flex justify-content-center mb-0">
                            <img src="/images/logo-acro.png" alt="program logo" class="img-fluid">
                        </div>
                        <p class="mb-5">
                            Acrobatic Arts is a professional curriculum for acrobatic dance.
                            <br><br>This program is designed to promote excellence in flexibility, strength, balance, limbering, tumbling, basic contortion, and partner/group stunting for dancers.
                            <br><br>AcroDance is the beautiful fusion of the artistic motion of dance and the athleticism of acrobatics. AcroDance is not the same as gymnastics.
                            <br><br>An AcroDancer must complete all of the skills on the hard stage without the advantage of a sprung floor while incorporating musical expression, extension and control. A sprung floor allows a gymnast to complete much more difficult tumbling skills when compared to what is recommended in AcroDance.
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="/images/acrobatic-arts.jpg" alt="program photo" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mtjgd-bg" class="text-white">
        <div class="color-filter-black"></div>
        <h2 class="secondary-txt">We're About More Than Just Great Dancing™</h2>
        <div>
            <div class="row tertiary-txt-pos">
                <div class="col-sm my-4">
                    “We don’t teach kids to make great dancers, we teach dance to make great kids.”
                    <br>
                    <em>-Misty Lown</em>
                </div>
                <div class="col-sm">
                    <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: 100%; height: 100%; filter: invert(1);">
                    </div>
                    <h2 class="text-center">RockStar is a Safer Studio™</h2>
                    <p>
                        RockStar focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="max-height: 354.04px;">
                    </div>
                    <h2 class="text-center">RockStar is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Safer Studio™ Policy
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Secured facilities
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Viewing windows
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Social media safety practices
                    </p>
                </div>
            </div>
        </div>
    </div>

{{--    @include('testimonials')--}}

    <div id="call-to-action" class="bg-white pt-5 pb-1">
        <div class="text-center pt-2">
            <h2 class="txt-kapa-teal">Be A Part Of Our <span class="txt-red">RockStar</span> Family!</h2>
            {{--            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>--}}
        </div>
    </div>


@endsection
