<x-app-layout>

    <div class="container">
        <h1>Tasks</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create new Task</div>
                    <div class="card-body">
                        <form action="/tasks" method="post" class="d-flex">
                            @csrf
                            <input class="form-control me-2" type="text" name="list" placeholder="The name of the task">
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
            <li class="list-group-item d-flex align-items-center justify-content-between">
                {{ $index + 1 }} - {{ $task->list }}
                <div class="d-flex">
                    <a class="btn btn-primary me-2" href="/tasks/{{ $task->id }}/edit">Edit</a>
                    <form class="display-inline" action="/tasks/{{ $task->id }}" method="post">
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
