@extends('layouts.masterlayout')


@section('content')


<div class="container">

<div class="card">

@foreach ($messagelists as $m )

{{$m->message}}

@endforeach


</div>

</div>



@endsection