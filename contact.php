<?php 
    include("Common/header.php");
?>
        <!-- Corps du site-->
        <div class="corps size20 ">
            <h2 class="size40 borderBottomDark"></h2>
            <div>
                Téléphone : 0000000 <br />
                Mail : neksosofficiel@outlook.fr
            </div>
            <h2 class="size40 borderBottomDark">Me contacter</h2>
            <div>
                <form>
                    <fieldset>
                        <legend>Renseigner les informations</legend>
                        <div>
                            <label for="nom">Nom :</label>
                            <input type="text" name="nom" id="nom" placeholder="Nom / Prenom"/>
                        </div>
                        <div>
                            <label for="mail">Email :</label>
                            <input type="email" name="mail" id="mail" placeholder="nom@exemple.com"/>
                        </div>
                        <div>
                            <label for="objet">Objet :</label>
                            <select name="objet" id="objet">
                                <option>Question</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div>
                            <label for="message">Message : </label>
                            <textarea name="message" id="message" cols="30" rows="5"></textarea>
                        </div>
                        <input type="submit" value="Valider" class="buttonContact bg-colorBlueLight colorWhite" />
                    </fieldset>
                </form>
            </div>
        </div>

<?php 
    include("Common/footer.php");
?>