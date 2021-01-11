<div id="corps">
    <div id="gauche"></div>
    <main>
        <?php
        require 'includes/formulaire.php';
        ?>
        <div id="formulaire">
            <h1>Formulaire de contact</h1>
            <!--<form action="https://httpbin.org/post" method="POST">-->
                <form action="/?page=contact" method="POST">
                <div class="box">
                    <label class="lab" for="choix">Civilité :</label>
                    <select name="civilite" id="choix">
                        <option value="">--Choisissez--</option>
                        <option value="M">M.</option>
                        <option value="Mme">Mme</option>
                    </select>
                </div>
                <div class="box" >
                    <label class="lab" for="formnom">Nom :</label>
                    <input type="text" id="formnom" name="nom-utilisateur">
                </div>
                <div class="box" >
                    <label class="lab" for="formprenom">Prénom :</label>
                    <input type="text" id="formprenom" name="prenom-utilisateur">
                </div>
                <div class="box" >
                    <label class="lab" for="formmail">E-mail :</label>
                    <input type="email" id="formmail" name="mail-utilisateur">
                </div>
                <div class="box" id="radios">
                    <p> Raison du contact :</p>
                    <div>
                        <input type="radio" id="emploi" name="raison" value="emploi">
                        <label for="emploi">Proposition d'emploi</label>
                    </div>
                    <div>
                        <input type="radio" id="infos" name="raison" value="infos">
                        <label for="infos">Demande d'informations</label>
                    </div>
                    <div>
                        <input type="radio" id="presta" name="raison" value="presta">
                        <label for="presta">Prestations</label>
                    </div>
                </div>
                <div class="box" >
                    <label class="lab" for="formmsg">Message :</label>
                    <textarea name="msg-utilisateur" id="formmsg" cols="30" rows="10"></textarea>
                </div>
                <div class="box" id="bouton">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </main>
    <div id="droite"></div>
</div>