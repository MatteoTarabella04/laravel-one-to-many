@extends('layouts.admin')

@section('content')
    <h1 class="py-3">Create a new Project</h1>


    @include('partials.validation_errors')

    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                aria-describedby="nameHelper" placeholder="Project name">
            <small id="nameHelper" class="form-text text-muted">Type name max 150 characters - must be
                unique</small>
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                rows="3"></textarea>
            <small id="descriptionHelper" class="form-text text-muted">Type description</small>
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Start date</label>
            <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date"
                id="start_date">
            <small id="start_dateHelper" class="form-text text-muted">Insert start date</small>
        </div>

        <div class="mb-3">
            <label for="finish_date" class="form-label">Finish date</label>
            <input type="date" class="form-control @error('finish_date') is-invalid @enderror" name="finish_date"
                id="finish_date">
            <small id="finish_dateHelper" class="form-text text-muted">Insert finish date</small>
        </div>

        <div class="mb-3">
            <label for="git_hub_link" class="form-label">GitHub Link</label>
            <input type="text" class="form-control @error('git_hub_link') is-invalid @enderror" name="git_hub_link"
                id="git_hub_link" aria-describedby="git_hub_linkHelper" placeholder="Project GitHub link">
            <small id="git_hub_linkHelper" class="form-text text-muted">Type GitHub link</small>
        </div>

        <div class="mb-3">
            <label for="page_link" class="form-label">Page Link</label>
            <input type="text" class="form-control @error('page_link') is-invalid @enderror" name="page_link"
                id="page_link" aria-describedby="page_linkHelper" placeholder="Project Page link">
            <small id="page_linkHelper" class="form-text text-muted">Type Page link</small>
        </div>


        <button type="submit" class="btn btn-primary">Add</button>

    </form>
@endsection
