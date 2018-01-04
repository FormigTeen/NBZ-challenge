@extends('templates.basic')

@section('title')
    Business
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                    <h1 class="page-header">Business</h1>

                @include('includes.data.top')

                @include('includes.table.popular')
            </div>
        </div>
    </div>
@endsection
