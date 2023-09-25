@props(['paginator', 'currentPage', 'lastPage'])

<ul class="pagination">
    <li class="page-item{{ ($paginator->onFirstPage()) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Précédent">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>

    <li class="page-item disabled">
        <span class="page-link">Page {{ $currentPage }} sur {{ $lastPage }}</span>
    </li>

    @for ($page = 1; $page <= $lastPage; $page++)
        <li class="page-item{{ ($page == $currentPage) ? ' active' : '' }}">
            <a class="page-link" href="?page={{ $page }}">{{ $page }}</a>
        </li>
    @endfor

    <li class="page-item{{ ($paginator->hasMorePages()) ? '' : ' disabled' }}">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Suivant">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
</ul>