<?php
if(isset($_POST["nom"])&&
isset($_POST["prenom"])){
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    echo "bonjour $nom $prenom";
}else{
    echo"veuillez remplir tous les champs";
}