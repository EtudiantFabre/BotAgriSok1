<body>
<div><h2>Création d'un administrateur :</h2></div>
    <form action="{{route('admins.store')}}" method="post">
        {{csrf_field()}}
        @method('post')
        <div>
            <label>Nom de l'administrateur :</label>
            <input type="text" name="nom" required placeholder="nom">
        </div>
        <div>
            <label>Prénom de l'administrateur :</label>
            <input type="text" name="prenom" required placeholder="prénom">
        </div>
        <div>
            <label>Numéro de télephone de l'administrateur :</label>
            <input type="text" name="tel" required placeholder="numéro">
        </div>
        <div>
            <input type="submit" name="sauvegarder" value="Sauvegarder">
        </div>
    </form>
</body>
