<x-app-layout>
    <h1>Task Update</h1>
    <form action="/tasks/{{ $task->id }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="list" placeholder="The name of the task" value="{{ $task->list }}">
        <button type="submit">Update</button>
    </form>
</x-app-layout>
