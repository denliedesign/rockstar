@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Classes</h1>
        @can('update', \App\Lesson::class)
            <p class="text-center"><a href="/lessons/create">Create New Lesson</a></p>
        @endcan

        <div class="separate-new-day">
            <h2 class="font-weight-bold">monday</h2>
            @foreach($lessons as $lesson)
                @if($lesson->day == "monday")
                   @include('lesson-info')
                @endif
            @endforeach
        </div>
        <div class="separate-new-day">
            <h2 class="font-weight-bold">tuesday</h2>
            @foreach($lessons as $lesson)
                @if($lesson->day == "tuesday")
                   @include('lesson-info')
                @endif
            @endforeach
        </div>
        <div class="separate-new-day">
            <h2 class="font-weight-bold">wednesday</h2>
            @foreach($lessons as $lesson)
                @if($lesson->day == "wednesday")
                   @include('lesson-info')
                @endif
            @endforeach
        </div>
        <div class="separate-new-day">
            <h2 class="font-weight-bold">thursday</h2>
            @foreach($lessons as $lesson)
                @if($lesson->day == "thursday")
                   @include('lesson-info')
                @endif
            @endforeach
        </div>
        <div class="separate-new-day">
            <h2 class="font-weight-bold">friday</h2>
            @foreach($lessons as $lesson)
                @if($lesson->day == "friday")
                   @include('lesson-info')
                @endif
            @endforeach
        </div>
        <div class="separate-new-day">
            <h2 class="font-weight-bold">saturday</h2>
            @foreach($lessons as $lesson)
                @if($lesson->day == "saturday")
                   @include('lesson-info')
                @endif
            @endforeach
        </div>


    </div>

@endsection
