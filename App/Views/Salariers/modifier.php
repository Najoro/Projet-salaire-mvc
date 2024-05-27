<div class="contenaire-forme">
    <form action=".?action=ConfirmeModification" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="nom">
            <span>Nom</span>
            <input type="text" name="nom" id="nom" value="<?= $nom ?>" required>
        </label>
        <label for="prenom">
            <span>Prenom</span>
            <input type="text" name="prenom" id="prenom" value="<?=$prenom?>" required>
        </label>
        <label for="fonction">
            <span>Fonction</span>
            <input type="text" name="fonction" id="fonction"value = "<?=$fonction?>" required>
        </label>
        <label for="salaire">
            <span>Salaire</span>
            <input type="number" name="salaire" id="salaire" value=<?= $salaire?> min="0">
            <span class="Ariary">Ar</span>
        </label>
        <div class="button-contenaire">
            <input type="submit" class="button" value="Modifier">
            <a href="?action=index" class="return">Annuler la modification...</a>
        </div>
    </form>
    <div class="label">Modifier</div>
</div>