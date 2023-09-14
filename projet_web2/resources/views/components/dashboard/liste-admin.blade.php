<ul>
    @foreach ($admins as $admin)
        <li>{{ $admin->prenom }} {{ $admin->nom }}</li>
    @endforeach
</ul>
