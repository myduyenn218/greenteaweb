<!-- Pagination dark -->
<nav class="wow fadeIn mb-4 mt-4" data-wow-delay="0.4s"
    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
    <ul class="pagination pg-dark flex-center">
        <!-- Arrow left -->
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link waves-effect waves-effect" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @else
        <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }} class=" page-link waves-effect waves-effect"
                aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @endif

        <!-- Numbers -->

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active"><a class="page-link waves-effect waves-effect">{{ $page }}</a></li>
        @elseif (($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page ==
        $paginator->lastPage())
        <li class="page-item "><a class="page-link waves-effect waves-effect" href="{{ $url }}">{{ $page }}</a></li>
        {{-- @elseif ($page == $paginator->lastPage() - 1)
                                <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>--}}
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
        <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
        <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
        <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
        <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li> --}}

        <!-- Arrow right -->
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link waves-effect waves-effect" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
        @else
        <li class="page-item disabled">
            <span aria-hidden="true">»</span>
            <span class="sr-only">Next</span>
        </li>
        @endif
        {{-- <li class="page-item">
            <a class="page-link waves-effect waves-effect" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
            </a>
        </li> --}}
    </ul>
</nav>
<!-- /Pagination dark -->
