<style>
    body {
        text-align: center;
        background: #4066ac;
    }
</style>
<body>
    <div><h2>Création d'un administrateur :</h2></div>
    <form action="{{route('admins.update', $admin)}}" method="post">
        {{csrf_field()}}
        @method('put')
        {{--$admin--}}

        <div>
            <label>Nom de l'administrateur :</label>
            <input type="text" name="nom" value="{{$admin->nom}}">
        </div>
        <div>
            <label>Prénom de l'administrateur :</label>
            <input type="text" name="prenom" value="{{$admin->prenom}}">
        </div>
        <div>
            <label>Numéro de télephone de l'administrateur :</label>
            <input type="text" name="tel" value="{{$admin->tel}}">
        </div>
        <div>
            <input type="submit" name="sauvegarder" value="Sauvegarder">
        </div>
    </form>
</body>
