@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Name of project : <span class='text-uppercase fw-bold'>{{ $project->name }}</span> </h1>
            </div>
        </div>
    </div>
@endsection
