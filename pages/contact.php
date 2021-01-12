<div id="corps">
    <div id="gauche"></div>
    <main>
        <?php
        require 'includes/formulaire.php';
        ?>
        <div id="formulaire">
            <h1>Formulaire de contact</h1>
                <form action="/?page=contact" method="POST">
                <div class="box">
                    <?=$erreur['civilite']?>
                    <br>
                    <label class="lab" for="choix">Civilité :</label>
                    <select name="civilite" id="choix" value="Mme">
                        <option value="">--Choisissez--</option>
                        <option value="M." <?=$civilite_choisie['M']?>>M.</option>
                        <option value="Mme" <?=$civilite_choisie['Mme']?>>Mme</option>
                    </select>
                </div>
                <div class="box" >
                    <?= $erreur['nom-utilisateur'] ?>
                    <br>
                    <label class="lab" for="formnom">Nom :</label>
                    <input type="text" id="formnom" name="nom-utilisateur" value="<?=$result_form['nom-utilisateur']?>">
                </div>
                <div class="box" >
                    <?=$erreur['prenom-utilisateur']?>
                    <br>
                    <label class="lab" for="formprenom">Prénom :</label>
                    <input type="text" id="formprenom" name="prenom-utilisateur" value="<?=$result_form['prenom-utilisateur']?>">
                </div>
                <div class="box" >
                    <?=$erreur['mail-utilisateur']?>
                    <br>
                    <label class="lab" for="formmail">E-mail :</label>
                    <input type="text" id="formmail" name="mail-utilisateur" value="<?=$result_form['mail-utilisateur']?>">
                </div>
                <div class="box" id="radios">
                    <?=$erreur['raison']?>
                    <br>
                    <p> Raison du contact :</p>
                    <div>
                        <input type="radio" id="emploi" name="raison" value="emploi" <?=$raison_choisie['emploi']?>>
                        <label for="emploi">Proposition d'emploi</label>
                    </div>
                    <div>
                        <input type="radio" id="infos" name="raison" value="infos" <?=$raison_choisie['infos']?>>
                        <label for="infos">Demande d'informations</label>
                    </div>
                    <div>
                        <input type="radio" id="presta" name="raison" value="presta" <?=$raison_choisie['presta']?>>
                        <label for="presta">Prestations</label>
                    </div>
                </div>
                <div class="box" >
                    <?=$erreur['msg-utilisateur']?>
                    <br>
                    <label class="lab" for="formmsg">Message :</label>
                    <textarea name="msg-utilisateur" id="formmsg" cols="30" rows="10"><?=$result_form['msg-utilisateur']?></textarea>
                </div>
                <div class="box" id="bouton">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </main>
    <div id="droite"></div>
</div>