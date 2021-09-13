{{-- {{ print_r($errors->all()) }} --}}

<div class="card">
    <div class="card-header">Create new Task</div>
    <div class="card-body">
        {{-- @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach --}}
    {{-- space --}}
    {{-- @if ($errors->all())
    <div class="alert alert-danger">
        Your data was invalid
    </div>
    @endif --}}
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        @include('tasks._form')
    </form>
</div>
</div>
