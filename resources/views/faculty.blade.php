@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <div class="row my-4">
            <div class="col">
                <iframe title="vimeo-player" src="https://player.vimeo.com/video/528470787?h=6c714f6cfd" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <h2>About RockStar Dance Studio</h2>
                    <p>
                        Update on our COVID protocols.
                    </p>
                </div>
            </div>
        </div>

        <h1 class="text-center">Faculty</h1>

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center my-3">
            <div>
                <div class="staff-wrap"><div class="shadow rounded staff-stevie staff-bg"></div></div>
                <p class="text-center lead mb-0">Stevie McKim-Kirmil</p>
                <p class="text-center text-muted">Founder/CEO</p>
            </div>
            <div>
                <div class="staff-wrap"><div class="shadow rounded staff-kaitlyn staff-bg"></div></div>
                <p class="text-center lead mb-0">Kaitlyn Hayden</p>
                <p class="text-center text-muted">Master Teacher</p>
            </div>
            <div>
                <div class="staff-wrap"><div class="shadow rounded staff-david staff-bg"></div></div>
                <p class="text-center lead mb-0">David Kendallen</p>
                <p class="text-center text-muted">Master Teacher</p>
            </div>
            <div>
                <div class="staff-wrap"><div class="shadow rounded staff-kylin staff-bg"></div></div>
                <p class="text-center lead mb-0">Ms. Kylin</p>
                <p class="text-center text-muted">Junior Teacher</p>
            </div>
            <div>
                <div class="staff-wrap shadow rounded"><div class="staff-alexa staff-bg"></div></div>
                <p class="text-center lead mb-0">Ms. Alexa</p>
                <p class="text-center text-muted">Junior Teacher</p>
            </div>
            <div>
                <div class="staff-wrap"><div class="shadow rounded staff-ali staff-bg"></div></div>
                <p class="text-center lead mb-0">Ali Ballash</p>
                <p class="text-center text-muted">Guest Teacher</p>
            </div>
            <div>
                <div class="staff-wrap"><div class="shadow rounded staff-serena staff-bg"></div></div>
                <p class="text-center lead mb-0">Serena Cefalu-lopez</p>
                <p class="text-center text-muted">Guest Teacher</p>
            </div>
        </div>

    </div>

@endsection
