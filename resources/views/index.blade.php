@extends('layouts.masterlayout')



@section('content')

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">Question Id (debug)</th>
            <th scope="col">Question Title</th>
            <th scope="col">Question Submission Time</th>
            <th scope="col">Toolbar</th>
        </tr>
        </thead>
        @foreach ($questionlists as $q )     
        <tbody>
           
            <tr>
                <td>{{ $q->id }}</td>
                <td><a href="/question/{{ $q->id }}">{{ $q->title }}</a></td>
                <td>{{ $q->submission_time }}</td>
                <td class="modify">
                    <a class="btn btn-primary" href="/question/{{$q->id}}/edit" role="button">Modify</a><br>
                </td>
            </tr>
          
        </tbody>
        @endforeach



</table>


@stop

