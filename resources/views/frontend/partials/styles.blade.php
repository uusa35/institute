<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-arabic.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/custom-english.css') }}">
@endif
