<ul class="list-dashboard">
    <h2>Liste des actualités</h2>
    @foreach ($actualites as $actualite)
        <li><span>{{ $actualite->nom }}</span>: {{ $actualite->contenu }}
            <a href="{{ route('actualites.edit', ['id' => $actualite->id]) }}">✏️</a>
            <a href="{{ route('actualites.delete', ['id' => $actualite->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette actualité ?')">🗑️</a>
        </li>
    @endforeach
</ul>
