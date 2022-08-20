@extends(backpack_view('blank'))
@section('after_styles')
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
@endsection
@section('content')
    @inertia
@endsection
