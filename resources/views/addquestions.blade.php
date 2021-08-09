@extends('layouts.masterlayout')

@section('content')

<div class="form-group">
    <form method="POST" action="/question">
        @csrf <!-- {{ csrf_field() }} -->
        <br><input class="form-control" type="text" name="title" placeholder="Enter question title">
        <br><input class="form-control" type="text" name="message" placeholder="Describe the message">
        <br><input class="form-control" type="text" name="id_registered_user" placeholder="type 0">
        <br><input class="form-control" type="text" name="vote_number" placeholder="type 0">
        <br><input class="btn btn-primary" type="submit" name="Create Question">
    </form>
</div>

@endsection