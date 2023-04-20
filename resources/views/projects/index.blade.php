@extends('layouts.app')
@section('content')

<div class="container">
    <table class="table table-striped table-inverse table-responsive">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Slug</th>
                <th>Descrizione</th>
                <th>Url</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->url }}</td>
                    <td>Azioni</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection