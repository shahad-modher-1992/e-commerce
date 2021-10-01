@extends('layout')
@section('main')
<p>please verify your email</p>

<form action="{{ url("email/verfication-notiification") }}" method="POST">
<button type="submit"> conf email</button>
</form>
@endsection