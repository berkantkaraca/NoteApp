@extends('layouts.layout')

@section('content')



<div class="d-flex">
    <button id="showFormButton" class="btn btn-outline-secondary me-2" style="width: 50%;">Add Note</button>

    <input id="searchInput" class="form-control me-2" type="search" placeholder="Search Note" aria-label="Search">
    <button id="searchButton" class="btn btn-outline-secondary me-2" type="button">Search</button>
    <button id="clearButton" class="btn btn-outline-secondary" type="button">Clear</button>
</div>

<!-- Not ekleme Formu -->
<div class="card mt-3" id="noteForm" style="display: none;">
    <div class="card-body">
        <form method="post" action="{{ route('notes.store') }}">
            @csrf
            <div>
                <!-- <label for="user_id" class="form-label">User ID</label> -->
                <input type="hidden" class="form-control" id="user_id" name="user_id" required value="{{session('userId')}}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Preority</label>
                <select class="form-select" id="priority" name="status" required>
                    <option value="" disabled selected>Select Priority</option>
                    <option value="High">High Priority</option>
                    <option value="Normal">Normal Priority</option>
                    <option value="Low">Low Priority</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea class="form-control" id="text" name="text" required></textarea>
            </div>

            <button type="submit" class="btn btn-success" style="width: 100px;">Add</button>
        </form>
    </div>
</div>

<!-- Notları Listeleme -->
<br><br>
<div id="noteList">
    @foreach($notes as $key => $note)
    <div class="card mb-3 note">
        <div class="card-body note-search">
            <div class="d-flex justify-content-between align-items-center ">
                <h5 class="card-title">{{$note->title}}</h5>
                
                @if($note->status == 'High')
                    <div id="note" style="background-color: red;padding: 5px; border-radius: 5px;width: 120px; text-align: center;">{{$note->status}} Priority</div>
                @elseif(($note->status == 'Normal'))
                    <div id="note" style="background-color: yellow;padding: 5px; border-radius: 5px;width: 120px; text-align: center;">{{$note->status}} Priority</div>
                @elseif(($note->status == 'Low'))
                    <div id="note" style="background-color: green; padding: 5px; border-radius: 5px; width: 120px; text-align: center;">{{$note->status}} Priority</div>
                @else
                    <div id="note" style="background-color: pink;padding: 5px; border-radius: 5px;width: 120px; text-align: center;">{{$note->status}}</div>
                @endif
            </div>

            <div class="note-text">{{$note->text}}</div>

            <br>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('notes.show', ['note' => $note->id]) }}" class="btn btn-success" style="width: 100px;">Show</a>
                <p>Last Change: {{ $note->updated_at }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Formu gösterip gizleme -->
<script>
    const showFormButton = document.getElementById('showFormButton');
    const noteForm = document.getElementById('noteForm');

    showFormButton.addEventListener('click', () => {
        if (noteForm.style.display === 'none') {
            noteForm.style.display = 'block';
            showFormButton.textContent = 'Leave Note';
        } else {
            noteForm.style.display = 'none';
            showFormButton.textContent = 'Add Note';
        }
    });
</script>

<!-- Arama Script -->
<script>
    
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');
        const clearButton = document.getElementById('clearButton');
        const noteList = document.getElementById('noteList');

        searchButton.addEventListener('click', filterNotes);
        clearButton.addEventListener('click', clearFilter);

        function filterNotes() {
            const searchTerm = searchInput.value.toLowerCase();
            const notes = noteList.getElementsByClassName('note');

            for (let note of notes) {
                const all = note.querySelector('.note-search').textContent.toLowerCase();

                if (all.includes(searchTerm)) {
                    note.style.display = 'block';
                } else {
                    note.style.display = 'none';
                }
            }
        }

        function clearFilter() {
            searchInput.value = ''; // Arama kutusunu temizle
            for (let note of noteList.getElementsByClassName('note')) {
                note.style.display = 'block'; // Tüm notları tekrar göster
            }
        }
    });

</script>

@endsection