<div class="d-flex align-items-center justify-content-between story-control-wrapper">
    <ul class="d-flex align-items-center list-none story-control">
        @foreach($links as $index => $link)
            <li><a href="{{ $link }}" class="no-underline circle-xm d-flex justify-content-center align-items-center mr-10 border-0 control-link {{ trim('/'.request()->path()) === trim($link) ? 'ac' : '' }}">{{ $index + 1 }}</a></li>
        @endforeach
    </ul>

</div>
