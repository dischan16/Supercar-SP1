<!DOCTYPE html>
<html>
<head>
	<title>DEMANDE D'ESSAI</title>
	<title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
</head>
<body>

    <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
        <div class="uk-width-1-2">
            <div class="uk-container">
            <!-- <h2 class="uk-text-small uk-alert-danger" style="text-align: center" uk-alert>VEUILLEZ REMPLIR LE FORMULAIRE SI DESSOUS</h2> -->
                <form class="uk-form-horizontal" action="schedule.php" method="post" name="form1">
            </div>
        </div>
    </div>

    <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>
        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-margin-bottom uk-form-width-large">
            <label class="uk-form-label"><b>Civilité</b></label>
            <div class="uk-form-controls">
            <select class="uk-select uk-width-1-6" id="form-horizontal-select" name="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            </div>  
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label"><b>Nom</b></label>
            <div class="uk-form-controls">
                <input class="uk-input uk-width-1-1" id="form-horizontal-text" name="nom" type="text" placeholder="Entrer votre nom">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label"  for="form-horizontal-text"><b>Prénom</b></label>
            <div class="uk-form-controls">
                <input class="uk-input uk-width-1-1" id="form-horizontal-text" name="prenom" type="text" placeholder="Entrer votre prénom">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top">
        <label class="uk-form-label"><b>Email</b></label>
            <div class="uk-form-controls">
                <input class="uk-input uk-width-1-1" id="form-horizontal-text" name="email" type="text" placeholder="Entrer votre email">
            </div>
        </div>
     

    <div class="uk-margin uk-margin-left uk-margin-right uk-form-width-large">
    <label class="uk-form-label " for="form-horizontal-select"><b>Sélectionez votre vehicule</b></label>
        <div class="uk-form-controls">
            <select class="uk-select uk-width-1-1" id="form-horizontal-select" name="selection">
                <option value="BMW 3.0CSL" >BMW 3.0CSL</option>
                <option value="BMW 2002">BMW 2002</option>
                <option value="BMW 2002 A">BMW 2002 A</option>
                <option value="BMW E3 3.3LIA">BMW E3 3.3LIA</option>
                <option value="BMW E30 M3">BMW E30 M3</option>
                <option value="ALPINE GTA V6 TURBO">ALPINE GTA V6 TURBO</option>
                <option value="FORD CAPRI STAMPEDE">FORD CAPRI STAMPEDE</option>
                <option value="PORCHE 968 COUPE">PORCHE 968 COUPE</option>
                <option value="PORCHE 356B 1600S">PORCHE 356B 1600S</option>
                <option value="PORCHE 930 TURBO">PORCHE 930 TURBO</option>
                <option value="PORCHE 944 S2">PORCHE 944 S2</option>
                <option value="PORCHE 964 3.6 TURBO">PORCHE 964 3.6 TURBO</option>
                <option value="PORCHE 964 C2 CAB WTL">PORCHE 964 C2 CAB WTL</option>
                <option value="PORCHE 993 GT2 EVO">PORCHE 993 GT2 EVO</option>
                <option value="FERRARI DINO 246/GT">FERRARI DINO 246/GT</option>
                <option value="FERRARI MARANELLO">FERRARI MARANELLO</option>
                <Option value="RENAULT CLIO WILLIAMS 2">RENAULT CLIO WILLIAMS 2</Option>
                <option value="ALFA ROMEO S.Z">ALFA ROMEO S.Z</option>
                <option value="ALFA ROMEO S.Z A">ALFA ROMEO S.Z A</option>
                <option value="MERCEDES SL 320">MERCEDES SL 320</option>

            </select>
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
    <div class="uk-form-label"><b></b></div>
       
    </div>
    </div>


    <div>
    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top">
            <div class="uk-form-controls">
            <div class="uk-form-label"><b>Êtes vous agé de 18 ans et titulaire d'un permis de conduire</b></div>
        <div class="uk-form-controls uk-form-controls-text">
        
        <div class="uk-form-controls uk-form-controls-text">
        
        <label><input class="uk-radio" type="radio" name="license" <?php if (isset($license) && $license=="oui") echo "checked";?>
        value="oui"> Oui</label><br>
        
        <label><input class="uk-radio" type="radio" name="license" <?php if (isset($license) && $license=="non") echo "checked";?>
        value="non"> Non</label><br>
    </div>
    
        </div>
            </div>
      </div>

       <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top">
            <div class="uk-form-controls">
            <div class="uk-form-label"><b>Contactez moi par Email</b></div>
        <div class="uk-form-controls uk-form-controls-text">
        
            <label><input class="uk-radio" type="radio" name="c_email" <?php if (isset($c_email) && $c_email=="oui") echo "checked";?>
            value="oui"> Oui</label><br>
            
            <label><input class="uk-radio" type="radio" name="c_email" <?php if (isset($c_email) && $c_email=="non") echo "checked";?>
            value="non"> Non</label><br>
    
        </div>
            </div>
      </div>
    

    <div class="uk-margin uk-margin-left uk-margin-right">
    <div class="uk-form-label"><b>Contactez moi par Message</b></div>
        <div class="uk-form-controls uk-form-controls-text">
        
            
            <label><input class="uk-radio" type="radio" name="c_sms" <?php if (isset($c_sms) && $c_sms=="oui") echo "checked";?>
            value="oui"> Oui</label><br>
            
            <label><input class="uk-radio" type="radio" name="c_sms" <?php if (isset($c_sms) && $c_sms=="non") echo "checked";?>
            value="non"> Non</label><br>
        </div>
        </div>
    

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <div class="uk-form-label"><b>Contactez moi par Télephone</b></div>
        <div class="uk-form-controls uk-form-controls-text">
        
            <label><input class="uk-radio" type="radio" name="c_tel" <?php if (isset($c_tel) && $c_tel=="oui") echo "checked";?>
            value="oui"> Oui</label><br>
            
            <label><input class="uk-radio" type="radio" name="c_tel" <?php if (isset($c_tel) && $c_tel=="non") echo "checked";?>
            value="non"> Non</label><br>
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
    <label class="uk-form-label" for="form-horizontal-text"><b>Numero télephone</b></label>
            <div class="uk-form-controls">
                <input class="uk-input uk-width-1-1" id="form-horizontal-text" name="num_tel" type="text" placeholder="Entrer votre numero télephone">
            </div>
    </div>

    <button class="uk-button uk-button-primary uk-margin uk-margin-xlarge-left uk-margin-bottom" type="submit" value="SUBMIT">SUBMIT</button>
        
        

</div>


</form>

    






</body>
</html>