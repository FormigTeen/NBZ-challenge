<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('templates.includes.head.basic')
    <title>@section('title') Home @show</title>
</head>
    <body>

        @section('content')
        @show

        @section('script')
            @include('templates.includes.scripts.basic')
        @show

</body>
</html>
