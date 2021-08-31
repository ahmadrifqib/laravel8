@extends('layouts.app', ['title' => 'Homepage'])

@section('content')

{{-- @component('components.alert') --}}
<x-alert>
    {{-- @slot('title') --}}
    <x-slot name="title">
        Mohon <strong>Perhatian!</strong>
        {{-- @endslot --}}
    </x-slot>
    <div>Mohon Perhatian!</div>
    {{-- @slot('footer') --}}
    <x-slot name="footer">
        Terima Kasih
        {{-- @endslot --}}
    </x-slot>
</x-alert>
{{-- @endcomponent --}}

<h1>Home</h1>
<div>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam veniam unde fuga reiciendis incidunt ipsum
    perferendis odio debitis! Amet eaque suscipit dolorem tempora itaque doloremque quisquam excepturi? Ipsa,
    laudantium
    veritatis!
</div>
@endsection

{{-- <x-app-layout title="Home Page">
    Home Page
</x-app-layout> --}}
