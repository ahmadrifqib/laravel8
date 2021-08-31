<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <ul class="navbar">
        @foreach ($navigations as $name => $url)
        <li><a href="{{ $url }}">{{ $name }}</a></li>
        @endforeach
    </ul>
</div>
