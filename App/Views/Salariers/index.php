<div class="container">
<div class="title">
    <h1>Liste des Salariers</h1>
</div>
<div class="icone">
    <a href="?action=ajout" class="ajouter"><i class="fa-solid fa-plus"></i></a>
    <div class="modification">
        <a href="?action=modifier&id=<?= $_GET['id'] ?>" class="modifier"><i class="fa-solid fa-pen"></i></a>
        <a href="#popup" class="supprimer"><i class="fa-solid fa-trash-can"></i></a>
    </div>
</div>
<div class="salariers">
    <table>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Fonction</th>
                <th scope="col">Salaire</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($salariers as $salarier) : ?>
        <?php 
            $id=$salarier["id"];
            $nom=$salarier["nom"];
            $prenom=$salarier["prenom"];
            $fonction=$salarier["fonction"];
            $sal=number_format($salarier["salaire"]);
        ?>
                <tr class="<?= $active=($_GET['id']== $id) ? "active": " " ?>">
                    <td scope="row"><?= $id ?></td>
                    <td scope="row"><?= $nom ?></td>
                    <td scope="row"><?= $prenom ?></td>
                    <td scope="row"><?= $fonction ?></td>
                    <td scope="row"><?= $sal ?>Ar </td>
                    <td scope="row" class="lien-row">
                        <a href=".?id=<?= $id?>&nom=<?= $nom ?>&prenom=<?= $prenom ?>&fonction=<?= $fonction ?>&salaire=<?= $sal ?>"></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<div class="popup">
    <?php if(isset($_GET['id'])): ?>
        <a href="?action=index">
            <span class="crois">
                <i class="fa-solid fa-plus"></i>
            </span>
        </a>
        <h3>vous voule supprimer ?</h3>
        <form action="?action=supprimer" method="post">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <label for="nom">
                <span>nom</span> :
                <input type="text" name="nom" id="nom" value=": <?= $_GET['nom'] ?>" readonly>
            </label>
            <label for="nom">
                <span>prenom</span> 
                <input type="text" name="prenom" id="prenom" value=" : <?= $_GET['prenom'] ?>" readonly>
            </label>
            <label for="nom">
                <span>fonction</span> :
                <input type="text" name="fonction" id="fonction" value=": <?= $_GET['fonction'] ?>" readonly>
            </label>
            <label for="nom">
                <span>salaire</span> :
                <input type="text" name="salaire" id="salaire" value=": <?= $_GET['salaire'] ?> Ar" readonly>
            </label>
            <Button class="accepte" type="submit">oui</Button>
        </form>
    <?php else :?>
        <span class="crois"> <i class="fa-solid fa-plus"></i></span>
        <h3>selectionner l'element a supprimer</h3>
    <?php endif; ?>
    </div>
</div>