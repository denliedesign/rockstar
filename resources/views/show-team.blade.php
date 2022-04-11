@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Show Team</h1>

        <img src="/images/show-team.jpg" alt="show team" class="rounded shadow img-fluid my-4">

        @can('update', \App\Content::class)
            <div class="my-5">
                <a href="/contents/create">New Content</a>
            </div>
        @endcan
        @foreach($contents as $content)
            @if($content->page == 'show team')
                <div>
                    {!! $content->text !!}
                    @include('/contents/admin')
                </div>
            @endif
        @endforeach

    </div>

@endsection
