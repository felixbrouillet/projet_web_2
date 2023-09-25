<ul>
    <h2>Liste des activités</h2>
    @foreach ($activites as $activite)
        <li>{{ $activite->nom }}: {{ $activite->description }}
            <a href="{{ route('activites.edit', ['id' => $activite->id]) }}">✏️</a>
            <a href="{{ route('activites.delete', ['id' => $activite->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette activités ?')">🗑️</a>
        </li>
    @endforeach
    @include('components.pagination', ['elements' => $activites, 'paginatorInfo' => ['currentPage' => $activites->currentPage(), 'lastPage' => $activites->lastPage()]])
</ul>
