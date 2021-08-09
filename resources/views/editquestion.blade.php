@extends('layouts.masterlayout')


@section('content')


<div class="form-group">
    <form method="POST" action="/question/{{ $editquestion->id }}">

      


        @csrf <!-- {{ csrf_field() }} -->
        <input type="hidden" name="_method" value="PUT">
        <br><input class="form-control" type="text" name="title" placeholder="Enter question title" value="{{ $editquestion->title }}">
        <br><input class="form-control" type="text" name="message" placeholder="Describe the message" value="{{ $editquestion->message }}">
        <br><input class="form-control" type="text" name="id_registered_user" placeholder="type 0" value="{{ $editquestion->id_registered_user }}">
        <br><input class="form-control" type="text" name="vote_number" placeholder="type 0" value="{{ $editquestion->vote_number }}">
        <br><input class="btn btn-primary" type="submit" name="Edit Question">
    </form>
</div>



@endsection