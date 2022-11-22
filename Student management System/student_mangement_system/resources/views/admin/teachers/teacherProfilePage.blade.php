@extends("layouts.teacherDashboard")


@section('content')

<h1>Welcome, {{Auth::guard("teacherlogin")->user()->name}}</h1>
    
@endsection