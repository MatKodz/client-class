<?php 

if(isset($_POST['envoi'])) {

    require (__DIR__ . "/inc/FormClient.php");

    $fields = new FormClient($_POST);

    $fields->getAllFields();

    $fields->isValidEmail('monmail');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- en-tete du document -->

  <title>Inscription Client</title>

  <meta charset="UTF-8">

  <style>

  body {font-family: 'Avenir Next', sans-serif;}

  #form {padding: 2%; width: 100%;}

  input, textarea {font-size: 80%; padding: 5px; margin: 20px 0; border: 1px solid #e6e6e6; width: 200px; transition: width ease-in-out 0.4s;}

  textarea { width: 80%; height: 100px;}

  input[type="radio"]{ width: 10px; visibility: hidden;}

  input[type="radio"] + label { width: auto; border: 1px purple solid; background: #fafafa; color : purple; padding: 7px;}

  input[type="radio"]:checked + label { background: purple; color: white; }

  input:focus {box-shadow: 2px 2px 6px #666;}


  input.wrong {color: #bb1100; box-shadow: 2px 2px 3px #bb1100;}

  input:required { border-left: 2px solid orange;}

  .does-exist {
    position: fixed;
    top: 7%;
    left: 40%;
  }


    label { font-size: 16px; width: 280px; display: inline-block;}

    input + span, textarea + span, label + span { font-size: 80%; color: red; padding: 3px; border-bottom: 3px solid red; display: inline-block; margin: 0 10px;}

    .col- { border-bottom: 4px solid grey; padding: 2%; margin: 2% 0; background: #fafafa;}

  </style>

</head>

<body>

<div class="container">

  <div class="jumbotron mt-2">

    <h1 class="text-dark h1">Devenir client</h1>

  </div>

</div>

<div class="container">

  <div class="row">

    <form name="formulaire" id="form" method="post" action="">
    <h3>S'inscrire comme client </h3>
    <p> Tous les champs sont obligatoires</p>
    <?php if(isset($_POST['envoi'])) {

        if ( $fields->formIsValid() ) {

            echo "<p class=\" alert alert-success\">Bravo le formulaire est complet</p>";

        } else $fields->displayErrors();

    } 
    ?>

  <div class="col-">
    <label id="lanom" for="Votre nom">Votre nom</label>
    <input type="text" size="25" name="nom" id="lanom" placeholder="Votre nom ici"   value="<?= isset($fields) ? $fields->keepFieldValue("nom") : "" ; ?>">
          </div>

  <div class="col-">
    <label id="laprenom" for="Votre prénom">Votre prénom</label>
    <input type="text" size="25" name="prenom" id="laprenom" placeholder="Votre prénom ici"  value="<?= isset($fields) ? $fields->keepFieldValue("prenom") : "" ; ?>">
          </div>

  <div class="col-">
  <label id="lamail" for="Votre email">Votre email</label>
  <input type="text" id="lamail" size="30" name="monmail" placeholder="Votre mail ici" value="<?= isset($fields) ? $fields->keepFieldValue("monmail") : "" ; ?>">
      
  </div>

  <div class="col-">
  <label id="pwd" for="Votre mot de passe">Votre mot de passe</label>
  <input type="password" id="pwd" size="20" name="monmotdepasse" value="<?= isset($fields) ? $fields->keepFieldValue("monmotdepasse") : "" ; ?>">
        </div>


  <div class="col-">
    <label id="lanum" for="Votre numéro de téléphone">Votre numéro de téléphone</label>
    <input type="text" size="25" name="telephone" id="lanum" placeholder="Votre numéro de téléphone ici" pattern="[0-9]{10}" value="<?= isset($fields) ? $fields->keepFieldValue("telephone") : "" ; ?>">
          </div>


  <div class="col-">
    <label id="laadresse" for="Votre adresse">Votre adresse</label>
    <input type="text" size="25" name="adresse" id="lanum" placeholder="Votre adresse" value="<?= isset($fields) ? $fields->keepFieldValue("adresse") : "" ; ?>">
          </div>


  <div class="col-">
    <label id="lacp" for="Votre CP">Votre code postal</label>
    <input type="text" size="5" name="codepostal" id="lacp" placeholder="Votre CP" value="<?= isset($fields) ? $fields->keepFieldValue("codepostal") : "" ; ?>">
          </div>



  <div class="col-">
  <label id="laville" for="Votre ville">Votre ville de résidence</label>
  <input type="text" size="25" name="ville" id="laville" placeholder="Votre ville ici" value="<?= isset($fields) ? $fields->keepFieldValue("ville") : "" ; ?>">
        </div>

  <div class="col-">
  <label>Votre mode de déplacement</label>
  <input type="radio" name="locomotion" value="car" id="voit" ><label for="voit">Voiture</label>
  <input type="radio" name="locomotion" value="bike" id="vel" > <label for="vel">Vélo</label>
  <input type="radio" name="locomotion" value="taxi" id="tax" > <label for="tax">Taxi</label>
  <input type="radio" name="locomotion" value="plane" id="avi" > <label for="avi">Avion</label>
        </div>

  <div class="col-">
    <label id="info" for="Vos informations">Informations complémentaires</label>
    <textarea name="info" maxlength="500">
    <?= isset($fields) ? $fields->keepFieldValue("info") : "" ; ?></textarea>
          </div>

  <div class="col-12 text-center">
    <input type="submit" name="envoi" value="Envoyer les informations" class="btn btn-success">
    <button type="reset" value="Reinit" class="btn btn-light">Recommencer </button>
  </div>

  </form>
</div>
</div>



</body>

</html>
