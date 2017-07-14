<!DOCTYPE html>
    <html>
        <head>
            <title>Mon Formulaire</title>
            <meta charset="utf-8"/>
            <style type="text/css">
                body{
                   background-image: url("hackeur.jpg"); /*<!--#ffbbaa; -->*/
                }

                h1{
                    font-family: times new romans;
                    text-align: center;
                    color: black;
                }
                h2{
                    font-family: times new romans;
                    text-align: center;
                    color: black;
                }
                div{
                    margin-left: 200px;
                    margin-right:200px;
                    color: white;
                    background-color: blue;
                    max-height: 900px;
                }
            </style>
        </head>
        <body>
            <center> <h1> Bienvenu(e)s dans la page de contact </h1> </center>

                <center>
                    <div>
                        <fieldset>
                            <legend><h2><u>Saisissez vos informations</u> SVP </h2></legend><br>
                            <label for="prenom" ><strong>Prénom :</strong></label>
                            <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" size="25" maxlength="200" style="margin-left:72px"><br><br>
                            <label for="nom" > <strong>Nom : </strong>   </label>
                            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" size="25" maxlength="200" style="margin-left:94px"><br><br>
                            <label for="adresse" > <strong>Adresse :</strong></label>
                            <input type="text" name="adresse" id="adresse" placeholder="Entrez votre Adresse" size="25" maxlength="200" style="margin-left: 72px"><br><br>
                            <label for="ville" ></label><strong> Ville :</strong> </label>
                            <input type="text" name="ville" id="ville" placeholder="Entrez votre Ville" size="25" maxlength="200" style="margin-left: 95px"><br><br>
                            <label for="email" ></label><strong> Email :</strong></label>
                            <input type="text" name="email" id="email" placeholder="Entrez votre email" size="25" maxlength="200" style="margin-left: 84px"><br><br>
                            <label for="code_postale" ></label><strong> Code Postal :</strong></label>
                            <input type="text" name="code_postal" id="code_postal" placeholder="Entrez votre code postal" size="25" maxlength="200" style="margin-left: 44px"><br><br>
                            <center><a href="enregistrement"><input type="submit" name="enregistrer" value="Enregistrer"></a></center>
                        </fieldset>
                    </div>
                </center>


        </body>
    </html>
