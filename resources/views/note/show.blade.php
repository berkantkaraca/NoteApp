@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Note</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('notes.update', ['note' => $note->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="status" class="form-label">Select Preority</label>
                            <select class="form-select" id="priority" name="status" required>
                                <option value="" disabled selected>{{$note->status}}</option>
                                <option value="High">High Priority</option>
                                <option value="Normal">Normal Priority</option>
                                <option value="Low">Low Priority</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $note->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Text</label>
                            <textarea class="form-control" name="text">{{ $note->text }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success mb-3" style="width: 100px;">Update</button>
                        @if(session('updateNote'))
                        <div class="alert alert-success col-md-9">
                            {{ session('updateNote') }}
                        </div>
                        @endif
                    </form>

                    <form method="POST" action="{{ route('notes.destroy', ['note' => $note->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="width: 100px;">Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection