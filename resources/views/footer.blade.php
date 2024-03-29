@include('trial-modal')

<div class="bg-white">
    <div class="container">
        <div id="next-steps-copy" class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center bg-white pt-5 pb-3">
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-red">Ready To Leap In?</p>
                <a href="https://forms.gle/WmGb9N4iCSMBhmUd7" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Enroll/Schedule a Trial</div></a>
            </div>
{{--            <div class="next-step mt-3 mt-md-0 shadow">--}}
{{--                <p class="txt-red">Want To Give It A Try?</p>--}}
{{--                <a data-bs-toggle="modal" data-bs-target="#exampleModal" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">&#10097; Schedule A Trial!</div></a>--}}
{{--            </div>--}}
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-red">Still Have Questions?</p>
                <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Contact Us!</div></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white pb-5">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-sm-4 mt-3">
                    <p class="lead">CONTACT</p>
                    <ul class="list-group">
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="navigate"></ion-icon>
                            510 Lighthouse Avenue, Pacific Grove, California 93950
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="call"></ion-icon>
                            831.375.4200
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                            831.325.2204
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="mail"></ion-icon>
                            <a href="mailto:rockstardancestudio2@gmail.com" style="color: black; text-decoration: none;">rockstardancestudio2@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-3">
                    <p class="lead">SOCIAL</p>
                    <div class="d-flex d-inline">
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0" href="https://www.facebook.com/293880427426562" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0 mx-3" href="https://www.instagram.com/rkstar1" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0" href="https://www.youtube.com/RockStarDanceStudio" target="_blank">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </div>
                    </div>
                    <div class="hover-blue mt-2">
                        <p>Follow our Stretch & Flex series on our...</p>
                        <a style="text-decoration: none; color: black;" href="https://www.youtube.com/channel/UC-ZLpraM5hGS-9JxIbhzAbw/videos" target="_blank">
                            YouTube channel: RockStarDanceStudio.
                        </a>
                        <br><br>
                        <a style="text-decoration: none; color: black;" href="https://www.instagram.com/stretchnflex_hq/" target="_blank">
                            Instagram: stretchnflex_hg
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 mt-3 ml-4">
                    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=510%20Lighthouse%20Avenue,%20Pacific%20Grove,%20California%2093950+(RockStar%20Dance%20Studio)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="bottom" class="text-white-50 text-center pt-3" style="background: black;">
    © 2022 RockStar Dance Studio
</div>
<p id="credit" class="text-center m-0" style="background: black;">
    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
</p>
<div style="background: black;" class="text-center pb-3">
    @guest
        <small>
        <a class="text-decoration-none text-muted" href="{{ route('login') }}">{{ __('Admin') }}</a>
    </small>
    @else
        <small class="dropdown">
        <a class="text-decoration-none text-muted" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </small>
    @endguest
</div>
