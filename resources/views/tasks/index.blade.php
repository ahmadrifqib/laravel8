<x-app-layout>

    <div class="container">
        <h1>Tasks</h1>
        <div class="row">
            <div class="col-md-6">
                @include('tasks._create')
            </div>
        </div>
        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
            <li class="list-group-item d-flex align-items-center justify-content-between">
                {{ $index + 1 }} - {{ $task->list }}
                <div class="d-flex">
                    <a class="btn btn-primary me-2" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                    <form class="display-inline" action="{{ route('tasks.delete', $task->id) }}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

</x-app-layout>
