@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Classes</h1>
        <div class="row">
            <div class="col-sm my-2">
                <img src="/images/23-summer.jpg" alt="summer schedule" class="img-fluid shadow rounded">
                <div class="d-flex justify-content-center mt-1 mb-3">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScDg4GWYkui47RWzUNAq6nxzmmuaPrXYu017YnuSZRULGhHog/viewform?pli=1" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Register</div></a>
                </div>
            </div>
            <div class="col-sm my-2">
                <img src="/images/23-camp-rock.jpg" alt="camp rock schedule" class="img-fluid shadow rounded">
                <div class="d-flex justify-content-center mt-1 mb-3">
                    <a href="https://forms.gle/tq2z861EUVpAdKScA" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Register</div></a>
                </div>
            </div>
        </div>

{{--        <p class="text-center" style="font-size: 1.33em;">--}}
{{--            <strong>Registration for this current schedule is closing on March 18</strong>--}}
{{--        </p>--}}
{{--        <div class="row my-3">--}}
{{--            <div class="col-sm my-3 text-center"><br><img src="/images/tiny-dancer-classes.png" alt="" class="img-fluid"></div>--}}
{{--            <div class="col-sm my-3 text-center"><a href="/images/schedule-22.pdf" target="_blank" class="mx-3">View Studio Schedule PDF</a><img src="/images/schedule-22.jpg" alt="" class="img-fluid"></div>--}}
{{--        </div>--}}




{{--        @can('update', \App\Lesson::class)--}}
{{--            <p class="text-center"><a href="/lessons/create">Create New Lesson</a></p>--}}
{{--        @endcan--}}

{{--        <div class="separate-new-day">--}}
{{--            <h2 class="font-weight-bold">monday</h2>--}}
{{--            @foreach($lessons as $lesson)--}}
{{--                @if($lesson->day == "monday")--}}
{{--                   @include('lesson-info')--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="separate-new-day">--}}
{{--            <h2 class="font-weight-bold">tuesday</h2>--}}
{{--            @foreach($lessons as $lesson)--}}
{{--                @if($lesson->day == "tuesday")--}}
{{--                   @include('lesson-info')--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="separate-new-day">--}}
{{--            <h2 class="font-weight-bold">wednesday</h2>--}}
{{--            @foreach($lessons as $lesson)--}}
{{--                @if($lesson->day == "wednesday")--}}
{{--                   @include('lesson-info')--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="separate-new-day">--}}
{{--            <h2 class="font-weight-bold">thursday</h2>--}}
{{--            @foreach($lessons as $lesson)--}}
{{--                @if($lesson->day == "thursday")--}}
{{--                   @include('lesson-info')--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="separate-new-day">--}}
{{--            <h2 class="font-weight-bold">friday</h2>--}}
{{--            @foreach($lessons as $lesson)--}}
{{--                @if($lesson->day == "friday")--}}
{{--                   @include('lesson-info')--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="separate-new-day">--}}
{{--            <h2 class="font-weight-bold">saturday</h2>--}}
{{--            @foreach($lessons as $lesson)--}}
{{--                @if($lesson->day == "saturday")--}}
{{--                   @include('lesson-info')--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}


    </div>

@endsection
