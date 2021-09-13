<x-app-layout>
    <div class="container">
        <h1>All Users</h1>

        @foreach ($users as $user)
        <li><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></li>
        {{-- $user->username --}}
        @endforeach
    </div>
</x-app-layout>
