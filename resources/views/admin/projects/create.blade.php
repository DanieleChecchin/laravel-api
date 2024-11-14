@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-12"></div>
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <h1 class="fw-bold my-5 fst-italic text-decoration-underline">Create a new Project!</h1>

                <div class="mb-3">
                    <label for="project-name" class="form-label">Project Name:</label>
                    <input type="text" class="form-control" id="project-name" name="name" value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label for="project-type" class="form-label">Project Type:</label>
                    <input type="text" class="form-control" id="project-type" name="type" value="{{ old('type') }}">
                </div>

                <div class="mb-3">
                    <label for="project-technology" class="form-label">Project Technology:</label>
                    <input type="text" class="form-control" id="project-technology" name="technology"
                        value="{{ old('technology') }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Create!</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
