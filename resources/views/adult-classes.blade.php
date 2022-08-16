@extends('layouts.app')
@section('content')

    <div class="banner-wrap" style="position: relative">
        <div class="banner"></div>
    </div>

    <div class="container my-5 text-center">
        <h1 class="text-center">Adult Classes</h1>
        <p class="lead mb-1"><u>Jazz</u></p>
        <p>
            7-8pm
            <br>September 7, 15, 21, 28
        </p>
        <p class="lead my-1"><u>Ballet</u></p>
        <p>
            7-8pm
            <br>October 5, 12, 19, 26
        </p>

        <p class="lead mb-0 mt-4"><u>ADULT DANCE CARD (PUNCH CARD)</u></p>
        <p><small>Each dance card expires 3 months after 1st class</small></p>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <table class="table">
                    <tr>
                        <td>Single Class</td>
                        <td><strong>$25</strong></td>
                    </tr>
                    <tr>
                        <td>5 Classes</td>
                        <td><strong>$75</strong></td>
                    </tr>
                    <tr>
                        <td>10 Classes</td>
                        <td><strong>$150</strong></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm"></div>
        </div>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScjxugJ8NYKWlKSpRPg4KWc4LSBeaY-dNuffMlYmhM8uWf8Ew/viewform" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2">Register</div></a>
    </div>

@endsection
