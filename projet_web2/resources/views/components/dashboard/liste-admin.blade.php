<ul class="list-dashboard">
    <h2 class="dashboard-h2">Liste des administrateurs</h2>
    @foreach ($admins as $admin)
        <li class="list_li"><span>{{ $admin->prenom }} {{ $admin->nom }}</span>
            <div class="btn_modif_sup">
                <a href="{{ route('admin.edit', ['id' => $admin->id]) }}">Modifier</a>
                <a href="{{ route('admin.delete', ['id' => $admin->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet admin ?')">Supprimer</a>
            </div>
        </li>
    @endforeach
</ul>
