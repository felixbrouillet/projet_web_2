<x-layout titre="Dashboard-Accueil">
    <x-dashboard.liens-dashboard />
    
    {{-- Messages d'alertes succes ou erreur --}}
    <x-alertes.alerte cle="succes" />
    <x-alertes.alerte cle="erreur" />
</x-layout>
