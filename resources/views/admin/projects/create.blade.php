@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Aggiorna progetto</h2>
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}">
                    </div>

                    <div class="form-group">
                        <label for="image_path">Image Path:</label>
                        <input type="text" name="image_path" id="image_path" class="form-control" value="{{ $project->image_path }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control">{{ $project->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Aggiorna progetto</button>
                </form>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mt-2">Torna alla lista</a>
            </div>
        </div>
    </div>
@endsection