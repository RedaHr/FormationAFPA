<?php   include("header.php");    ?>

    <h1 class="text-center font-weight-bold">Nous lançons une grande enquête sur les anciens stagiaires</h1>
    <h4 class="text-center">Merci de nous répondre</h4>




<form id="form" class="container" action="Formu_Jarditou.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
        	   	
	<h3 class="font-weight-bold">Vos Coordonnées</h3>
    	<div class="form-group">
        	<div class="form-group"><label for="name">Nom :</label><input class="form-control" type="text" name="name" id="name"></div>

			<div class="form-group"><label for="fname">Prenom :</label><input class="form-control" type="text" name="fname" id="fname"></div>
                    
			<div class="form-group"><label for="birthdate">Date de naissance :</label><input class="form-control" type="text" name="birthdate" id="birthdate"></div>

            <div class="form-group"><label for="adress">Adresse :</label>
            <textarea class="form-control" name="adress" id="adress" rows=5 placeholder="Insérez votre adresse" ></textarea>
			</div>
					
            <div class="form-group"><label for="zipCode">Code postale :</label><input class="form-control" type="text" name="zipCode" id="zipCode"></div>

			<div class="form-group"><label for="email">Adresse email :</label><input class="form-control" type="text" name="email" id="email"></div>
        </div>

        <div class="form-group">
            <label>Vous êtes un homme</label>
            <input type="radio" name="gender" value="Male">
		</div>
		
		<div class="form-group">
            <label>Vous êtes une femme</label>
            <input type="radio" name="gender" value="Female">
        </div>

        <select class="job" name="metier">
                <option value="Developpeur">Développeur</option>
                <option value="WebMaster">Webmaster</option>
                <option value="Admin B.D.D.">Administrateur B.D.D.</option>
                <option value="autres">Autres ...</option>
        </select>

        <br>
        <div class="form-group">
        <label for="">Si vous avez répondu autres, précisez :</label>
        <input class="form-control" name="precise" type="text"><br>
        </div>

        <select id="salaire" name="salaire" class="rounded">
            <option value="-1000 €">&lt; 1000 €</option>
            <option value="-2000 €">&lt; 2000 €</option>
        </select>

        <br>
        <div class="form-group">
        <label>En quelle année avez-vous suivi le stage AFPA ?</label>
        <input class="form-control" type="text" name="annee"><br>
		</div>
		
		<div class="form-group">
        <textarea class="form-control" name="commentaire" rows="5" cols="30" placeholder="Vos commentaires"></textarea>
		</div>
		
		<p class="font-weight-bold">Merci d'avoir répondu au questionnaire</p>

        <br>
        <button class="btn btn-outline-primary" type="submit" name="submit">Envoyer</button>
        <button class="btn btn-outline-secondary" type="reset" name="annuler">annuler</button>

</form>
<br>

<?php   include("footer.php"); ?>