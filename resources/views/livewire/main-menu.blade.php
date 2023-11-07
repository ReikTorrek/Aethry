<div>
    <ul>
        @foreach ($menuItems as $key => $item)
            <a class="mr-3" href="{{ $key }}">{{ $item }}</a>
        @endforeach
    </ul>
</div>
