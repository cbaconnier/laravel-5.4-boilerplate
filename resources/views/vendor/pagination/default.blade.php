@if ($paginator->hasPages())

    {{-- standard pagination > 700px --}}
    <div class="ui pagination menu show-fullscreen ">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="disabled item"><span>&laquo;</span></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="item">&laquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="disabled item"><span>{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="active item"><span>{{ $page }}</span></a>
                    @else
                        <a href="{{ $url }}" class="item">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="item">&raquo;</a>
        @else
            <a class="disabled item"><span>&raquo;</span></a>
        @endif
    </div>

    {{-- dropdown pagination < 700px --}}
    <div class="ui dropdown hide-fullscreen">
        <div class="text">Page {{ $paginator->currentPage() }} </div>
        <i class="dropdown icon"></i>
        <div class="menu">

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="disabled item"><span>{{ $element }}</span></a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a href="{{ $url }}" data-text="Page {{ $page }}" class="active item">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" data-text="Page {{ $page }}" class="item">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

        </div>
        </h4>
    </div>


@endif
