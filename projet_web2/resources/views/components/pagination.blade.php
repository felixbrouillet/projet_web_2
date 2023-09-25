@props(['elements', 'paginatorInfo'])

@if ($paginatorInfo['lastPage'] > 1)
    <ul class="pagination">
        <li class="page-item{{ ($paginatorInfo['currentPage'] == 1) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $elements->url($paginatorInfo['currentPage'] - 1) }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <li class="page-item disabled">
            <span class="page-link">Page {{ $paginatorInfo['currentPage'] }} sur {{ $paginatorInfo['lastPage'] }}</span>
        </li>

        <li class="page-item{{ ($paginatorInfo['currentPage'] == $paginatorInfo['lastPage']) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $elements->url($paginatorInfo['currentPage'] + 1) }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
@endif
