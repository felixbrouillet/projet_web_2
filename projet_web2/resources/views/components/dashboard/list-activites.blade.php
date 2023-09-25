<ul class="list-dashboard">
    <h2 class="dashboard-h2">Liste des activités</h2>
    @foreach ($activites as $activite)
        <li class="list_li"><span>{{ $activite->nom }}</span>
            <div>{{ $activite->description }}</div>
            <div class="btn_modif_sup">
                <a href="{{ route('activites.edit', ['id' => $activite->id]) }}">Modifier</a>
                <a href="{{ route('activites.delete', ['id' => $activite->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette activités ?')">Supprimer</a>
            </div>
        </li>
    @endforeach
    @include('components.pagination', ['elements' => $activites, 'paginatorInfo' => ['currentPage' => $activites->currentPage(), 'lastPage' => $activites->lastPage()]])
</ul>
