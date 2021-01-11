<div id="corps">
    <div id="gauche"></div>
    <main>
        <!-- pour la première version du contact : mailto
        <div id="maincontact">
        Cliquez sur l'enveloppe pour me contacter<br>
        <a href="mailto:yannick.aiguier@le-campus-numerique.fr"><img src="images/contact.png" alt="Une enveloppe permettant d'envoyer un mail en cliquant dessus."></a>
        </div>
        -->
        <div id="formulaire">
            <h1>Formulaire de contact</h1>
            <form action="https://httpbin.org/post" method="POST">
                <div class="box" id="radios">
                    <input type="radio" id="M" name="civilite">
                    <label for="M">M.</label>
                    <input type="radio" id="Mme" name="civilite">
                    <label for="Mme">Mme</label>
                </div>
                <div class="box" >
                    <label class="lab" for="formnom">Nom :</label>
                    <input type="text" id="formnom" name="nom-utilisateur">
                </div>
                <div class="box" >
                    <label class="lab" for="formmail">E-mail :</label>
                    <input type="email" id="formmail" name="mail-utilisateur" required>
                </div>
                <div class="box" >
                    <label class="lab" for="choix">Choisissez :</label>
                    <select id="choix">
                        <option>Choix 1</option>
                        <option>Choix 2</option>
                        <option>Choix 3</option>
                    </select>
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