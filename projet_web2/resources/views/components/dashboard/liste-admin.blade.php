<ul>
    <h2>Liste des administrateurs</h2>
    @foreach ($admins as $admin)
        <li>{{ $admin->prenom }} {{ $admin->nom }}
            <a href="{{ route('admin.edit', ['id' => $admin->id]) }}">✏️</a>
            <a href="{{ route('admin.delete', ['id' => $admin->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet admin ?')">🗑️</a>
        </li>
    @endforeach
</ul>
