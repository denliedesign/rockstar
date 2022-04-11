@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-sm">
                <h1 class="text-center">Policies</h1>

                @can('update', \App\Content::class)
                    <div class="my-5">
                        <a href="/contents/create">New Content</a>
                    </div>
                @endcan
                @foreach($contents as $content)
                    @if($content->page == 'policies')
                        <div>
                            {!! $content->text !!}
                            @include('/contents/admin')
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm">
                <h1 class="text-center">FAQs</h1>

                <div class="my-3">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/528492859?h=84e9b68a2f" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
                </div>

            @can('update', \App\Content::class)
                    <div class="my-5">
                        <a href="/contents/create">New Content</a>
                    </div>
                @endcan
                @foreach($contents as $content)
                    @if($content->page == 'faqs')
                        <div>
                            {!! $content->text !!}
                            @include('/contents/admin')
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
