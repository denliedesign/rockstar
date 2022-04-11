@extends('layouts.app')
@section('content')

    <div class="container py-5">
        <form action="{{ route('contents.update', ['content' => $content]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('contents.form')
        </form>
    </div>

@endsection
