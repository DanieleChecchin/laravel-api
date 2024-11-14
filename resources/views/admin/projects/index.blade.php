@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic text-decoration-underline"> Projects list</h1>
            </div>
            <div class="col-12">
                <div class="my-3">
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create a new Project</a>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name of project</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td> {{ $project->id }} </td>
                            <td> {{ $project->name }} </td>
                            <td>
                                <a class="btn btn-sm btn-info"
                                    href="{{ route('admin.projects.show', $project->id) }}">Show</a>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td>No projects available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
