@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">

@endsection

@section('content')

    <h1>Upload Media</h1>

    {{--Unfortunately, dropzone DOESN'T WORK! It store images correctly in image directory,--}}
    {{--but, doesn't record the register in database (image table).--}}

    {{--Inspecting my browser:--}}

    {{--POST http://codehacking.dev/admin/media 500 (Internal Server Error)--}}

    {{--Dropzone.submitRequest @ dropzone.js:1386--}}
    {{--Dropzone.uploadFiles @ dropzone.js:1382--}}
    {{--Dropzone.processFiles @ dropzone.js:1176--}}
    {{--Dropzone.processFile @ dropzone.js:1162--}}
    {{--Dropzone.processQueue @ dropzone.js:1155--}}
    {{--(anonymous function) @ dropzone.js:1019--}}

    {{--I don't know if other problem is related, I'm also had the error alert: Uncaught Error: Bootstrap's JavaScript requires jQuery.--}}


    {!! Form::open(['method'=>'POST', 'action'=>'AdminMediasController@store', 'class'=>'dropzone']) !!}

    {!! Form::close() !!}

@endsection

@section('scripts')

    {{--My option here is not use the minify version, for a eventual debugging situation--}}
    {{--Links copied from https://cdnjs.com/libraries/dropzone--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

@endsection