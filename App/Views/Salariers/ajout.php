<div class="contenaire-forme">
    <form action=".?action=Envoyer" method="post">
        <label for="nom">
            <span>Nom</span>
            <input type="text" name="nom" id="nom" required>
        </label>
        <label for="prenom">
            <span>Prenom</span>
            <input type="text" name="prenom" id="prenom" required>
        </label>
        <label for="fonction">
            <span>Fonction</span>
            <input type="text" name="fonction" id="fonction" required>
        </label>
        <label for="salaire">
            <span>Salaire</span>
            <input type="number" name="salaire" id="salaire" value="0" min="0">
            <span class="Ariary">Ar</span>
        </label>
        <div class="button-contenaire">
            <input type="submit" class="button" value="Ajouter">
            <a href="?action=index" class="return">Annuler la modification...</a>
        </div>
    </form>
    <div class="label">Enregistrer</div>
</div>