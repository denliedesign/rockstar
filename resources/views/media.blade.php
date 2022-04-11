@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Media</h1>

        <div class="row my-4">
            <div class="col">
                <iframe title="vimeo-player" src="https://player.vimeo.com/video/528470787?h=6c714f6cfd" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <div>
                    <h2>About RockStar Dance Studio</h2>
                    <p>
                        Update on our COVID protocols.
                    </p>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col d-flex align-items-center justify-content-center">
                <div>
                    <h2>RockStar FAQs</h2>
                    <p>
                        The 5 most commonly asked questions.
                    </p>
                </div>
            </div>
            <div class="col">
                <iframe title="vimeo-player" src="https://player.vimeo.com/video/528492859?h=84e9b68a2f" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row my-4">
            <div class="col d-flex align-items-center">
                <p class="hover-blue">
                    <a style="text-decoration: none; color: black;" href="https://www.youtube.com/channel/UC-ZLpraM5hGS-9JxIbhzAbw/videos" target="_blank">
                        <ion-icon name="logo-youtube"></ion-icon> Follow our series on our YouTube channel: RockStarDanceStudio.
                    </a>
                    <br><br>
                    <a style="text-decoration: none; color: black;" href="https://www.instagram.com/stretchnflex_hq/" target="_blank">
                        <ion-icon name="logo-instagram"></ion-icon> Follow  the series on instagram: stretchnflex_hg
                    </a>
                </p>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <div>
                    <h2>Stretch & Flex Series</h2>
                </div>
            </div>
        </div>

    </div>

@endsection
