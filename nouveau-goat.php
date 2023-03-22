<!-- header -->
<?php
$title = "nouveau goat";
$bg = "bg-green-600";
include('partials/_header.php')
?>
<main>
    <?php
include_once('helpers/function.php');
// validation du formulaire
// 1-creation de mes variables
$error = [];
$errMsgRequire = "<span class='text-red-500'>Ce champs est obligatoire</>";
$success = false;

// 2-Je vérifie si le formualire est soumis
if (!empty($_POST['submitted'])) {
    // debug_array($_POST);
   // 3- protege contre faille xss
  ///////////////////////////////
$first_name = trim(htmlspecialchars($_POST['first_name']));
$last_name = trim(htmlspecialchars($_POST['last_name']));
$nationality = trim(htmlspecialchars($_POST['nationality']));
$company_name = trim(htmlspecialchars($_POST['company_name']));
$year_of_birth = trim(htmlspecialchars($_POST['year_of_birth']));
$description = trim(htmlspecialchars($_POST['description']));
$sexe = trim(htmlspecialchars($_POST['sexe']));

  //validate des champs
 
    if(empty($last_name)){
        $error['last_name'] = $errMsgRequire;
    }elseif (strlen($last_name) < 3 || strlen($last_name) > 50) {
        $error['last_name'] = "<span class='text-red-500'>Le Prénom doit contenir 3 à 50 caractéres</span>";
    }

     // nom
     if(empty($first_name)){
        $error['first_name'] = $errMsgRequire;
    }elseif (strlen($first_name) < 3 || strlen($first_name) > 50) {
        $error['first_name'] = "<span class='text-red-500'>Le nom doit contenir 3 à 50 caractéres</span>";
    }
    // nationalite
     if(empty($nationality)){
        $error['nationality'] = $errMsgRequire;
    }elseif (strlen($nationality) < 3 || strlen($nationality) > 50) {
        $error['nationality'] = "<span class='text-red-500'>La nationaliter doit contenir 3 à 50 caractéres</span>";
    }
    // compagnie
     if(empty($company_name)){
        $error['company_name'] = $errMsgRequire;
    }elseif (strlen($company_name) < 3 || strlen($company_name) > 50) {
        $error['company_name'] = "<span class='text-red-500'>La compagnie doit contenir 3 à 50 caractéres</span>";
    }
    // description
     if(empty($description)){
        $error['description'] = $errMsgRequire;
    }elseif (strlen($description) < 10 || strlen($description) > 300) {
        $error['description'] = "<span class='text-red-500'>La description doit contenir 10 à 300 caractéres</span>";
    }

  // age
  // verifie que user a bien rempli le champs
  if (!empty($year_of_birth)) {
    // verifie que l'age est un nombre entier
    if (!is_numeric($year_of_birth)) {
      $error['year_of_birth'] = "<span class='text-red-500'>Merci de rentrer un age correct</span>";
      // verifie qu'il est majeur
    } 
  } else {
    $error['year_of_birth'] = $errMsgRequire;
  }
   // sexe
  if (empty($sexe)) {
    $error['sexe'] = $errMsgRequire;
    }elseif(strlen($sexe) <4 || strlen($sexe) >40){
      $error['sexe'] = "<span class='text-red-500'>3 caractères minimum</span>";
      
    }
      // 5- Pas d'erreur => Enregistrement en Base de donnée
  if (count($error) == 0) {
    $success = true;
    // enregistrement en BDD
  }
}


?>

<div class="text-center m-auto">
    <form method="POST" >
            <!--  firstname -->
            <div class="form-control  ">
                <label class="label" for="fName">
                    <span class="label-text font-black">Votre Prénom</span>
                </label>
                <label class="input-group">
                    <span>Prénom</span>
                <input type="text" placeholder="Type here" class="input input-bordered " name="first_name" id ="first_name" />
                <p><?php errorMsg('first_name')?></p>
            </div>
            
              <!-- lastname -->
            <div class="form-control">
                <label class="label" for="lName">
                    <span class="label-text font-black"> Votre Nom</span>
                </label>
                 <label class="input-group">
                    <span>Nom</span>
                <input type="text" placeholder="Type here" class="input input-bordered " name="last_name" id ="last_name" />
                <p><?php errorMsg('last_name')?></p>
            </div>
                <!-- nationalité-->
               <div class="form-control">
                <label class="label"- for="nationalite">
                    <span class="label-text font-black">Votre nationalité</span>
                </label>
                <label class="input-group">
                    <span>nationalité</span>
                <input type="text" placeholder="francaise" class="input input-bordered " name="nationality" id ="nationality"  />
                </label>
                <p><?php errorMsg('nationality')?></p>
            </div> 
                <!-- compagnie-->
               <div class="form-control">
                <label class="label"- for="company_name">
                    <span class="label-text font-black">Votre compagnie</span>
                </label>
                <label class="input-group">
                    <span>compagnie</span>
                <input type="text" placeholder="apple" class="input input-bordered " name="company_name" id ="company_name"  />
                </label>
                <p><?php errorMsg('company_name')?></p>
            </div> 
            <!-- description-->
               <div class="form-control">
                <label class="label"- for="company_name">
                    <span class="label-text font-black">Votre description</span>
                </label>
                <label class="input-group">
                    <span>description</span>
                <input type="text" placeholder="je suis toto et je me decris" class="input input-bordered " name="description" id ="description"  />
                </label>
                <p><?php errorMsg('description')?></p>
            </div> 

            <!--  year_of_birth -->
            <div class="form-control  ">
                <label class="label" for="year_of_birth">
                    <span class="label-text font-black">Votre Année de naissance</span>
                </label>
                <label class="input-group">
                    <span>année de naissance</span>
                <input type="numeric" placeholder="2000" class="input input-bordered " name="year_of_birth" id ="year_of_birth" />
                <p><?php errorMsg('year_of_birth')?></p>
            </div>
            
            <!--  formation -->
            <?php
            $genreOptions =
            [
                ["name" => "masculin"],
                ["name" => "feminin"],
            ]
            ?>
            <div class="form-control ">
                    <label class="label">
                        <span class="label-text font-black">masculin/feminin</span>
                    </label>
                    <label class="input-group">
                        <span>sexe</span>
                        <select class="select select-bordered" name="sexe" id ="sexe">
                            <option disabled selected>Choisis ton sexe</option>
                             <?php foreach ($genreOptions as $item): ?>
                                <option value="sexe"><?= $item['name']?></option>
                             <?php endforeach ?>
                        </select>
                    </label>
                    <p><?php errorMsg('sexe')?></p>
                </div>
            <!-- btn submit -->

            <input type="submit" class="btn btn-active btn-secondary mt-5 font-black" name="submitted"
                value="envoyer"   >

    </form>
</div>
</main>
<!-- footer -->
<?php
include('partials/_footer.php')
?>