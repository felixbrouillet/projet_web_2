@props(["cle"])

@if (session($cle))
<p @class([
    "absolute top-4 right-4 rounded-md p-2",
    "succes" => $cle == "succes",
    "erreur" => $cle == "erreur"
])>
    {{ session($cle) }}
</p>
@endif
