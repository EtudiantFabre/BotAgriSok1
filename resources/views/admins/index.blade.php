<!--link rel="stylesheet" type="text/css" href="resources/css/table.css"-->
<style>
    table{
        border-collapse: collapse;
        margin-left: 14rem;
        text-align: center;
    }
    body{
        text-align: center;
    }
    td{
        border: 1px solid black;
        padding: 10px;
    }
    th{
        border: 1px solid black;
        padding: 10px;
    }
    form input, .creer {
        text-align: center;
        padding: 2px;
        width: auto;
        border-radius: 15px;
        background: #016ABC;
        color: #f7fafc;
        cursor: pointer;
        margin-top: -5px;
    }
    .supprimer{
        /*position: absolute;
        margin-top: -15px;
        margin-left: 70px;*/
    }
    .boutton{
        height: 20px;
    }
    h1 {
        text-align: center;
    }
    h2, h3 {
        text-align: center;
    }
    .creer{
        margin: auto;
        text-align: center;
        margin-left: 25rem;
    }
    .fleche{
        position: relative;
    }
    .fleche::before{
        content: '\27BB';
        font-size: 70px;
        color: #14e1ab;
        text-align: center;
        align-content: center;
        alignment: center;
        margin: auto;
        /*
        position: absolute;
        margin-left: 21rem;
        margin-top: 8px;*/
    }
    .modifier {
        /*position: absolute;
        margin-top: -15px;*/
    }
</style>
<body>
    <h1>Listes des Administrateurs :</h1>
    <table>
        <tr>
            <th>Numéro Admins</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Tél</th>
            <th>Numéro de la personne</th>
            <th>Actions</th>
        </tr>

        @foreach($listeadmins as $admin)
            <tr>

                <td>
                    {{$admin->numAdmin}}
                </td>
                <td>
                    {{$admin->nom}}
                </td>
                <td>
                    {{$admin->prenom}}
                </td>
                <td>
                    {{$admin->tel}}
                </td>
                <td>
                    {{$admin->numPersonne}}
                </td>

                <td class="boutton">
                    <form action="{{route('admins.edit', $admin->numAdmin)}}" method="get" style="...">
                        <input class="modifier" value="Modifier" type="submit">
                    </form>
                    <form action="{{route('admins.destroy', $admin->numAdmin)}}" method="post" onsubmit="return AccepterSuppression()" style="...">
                        @csrf
                        @method('delete')
                        <input class="supprimer" value="Supprimer" type="submit">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <h2>Actions suplementataire sur la base de donné :</h2>

    <form class="fleche" action="{{route('admins.create')}}" method="get" style="...">
        <!--h3>Créer un nouveau Administrateur :</h3-->
        <button class="creer" type="submit">Créer un ADMIN</button>
    </form>

    <form class="fleche" action="{{route('admins.show', $listeadmins[0])}}" method="get" style="...">
        <!--h3>Afficher un Administrateur :</h3-->
        <button class="creer" type="submit">Afficher un seul admin</button>
    </form>
</body>
