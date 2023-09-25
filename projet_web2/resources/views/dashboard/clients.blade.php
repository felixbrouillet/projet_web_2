<x-layout titre="Dashboard-Clients">
    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />
    <a href="{{ route('dashboard.index') }}" class="retour">Retour</a>
    <x-dashboard.list-clients :clients="$clients" />
</x-layout>
