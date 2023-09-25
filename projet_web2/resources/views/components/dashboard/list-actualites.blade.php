<ul class="list-dashboard">
    <h2 class="dashboard-h2">Liste des actualités</h2>
    @foreach ($actualites as $actualite)
        <li class="list_li"><span>{{ $actualite->nom }}</span>
            <div>{{ $actualite->contenu }}</div>
            <div class="btn_modif_sup">
                <a href="{{ route('actualites.edit', ['id' => $actualite->id]) }}">Modifier</a>
                <a href="{{ route('actualites.delete', ['id' => $actualite->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette actualité ?')">Supprimer</a>
            </div>
        </li>
    @endforeach
</ul>
