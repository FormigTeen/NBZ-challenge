@extends('templates.basic')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                    <h1 class="page-header">Dashboard</h1>
                    <h5><a href="{{route('business')}}">Business Page</a></h5>
                @include('includes.data.top')

                @include('includes.table.last')

            </div>
        </div>
    </div>
@endsection
