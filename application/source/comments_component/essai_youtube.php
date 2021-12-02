<meta charset="utf-8" />

<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=espace_commentaires;charset=utf8", 'root', '');

if(isset($_GET['id']) AND !empty($_GET['id'])) {

    $getid = htmlspecialchars($_GT['id']);

    $article = $bdd ->prepare('SELECT * FROM articles WHERE id =?');
    $article ->execute(array($getid));
    $article = $article ->fetch();

    $commentaires = $bdd->prepare('SELECT *FROM commentaires WHERE id_article = ? ORDER BY id DESC');
    $commentaires ->execute(array($getid));



    if(isset($_POST['submit_commentaire'])){
        if(isset($_POST['pseudo'], $_POST['commentaire']) AND !empty($_POST['pseudo'] AND !empty($_POST["commentaire"])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $commentaire = htmlspecialchars($_POST['commentaire']);
            
            // verifier la longueur du pseudo
            if(strlen($pseudo) < 25){
                $ins = $bdd ->prepare("INSERT INTO commentaires (pseudo, commentaire, id_article) VALUES (?,?,?) ");
                $ins -> execute(array($pseudo, $commentaire, $getid));
                c_msg = "<span style='color:green'> Votre commentaire a bien été posté</span> ";

            }else {
                $c_erreur ="Erreur: Le pseudo doit faire moins de 25 caractères";
            }

        }else {
            $c_erreur = "Erreur: Tous les champs doivent être complétés";
        }
    }

?>

<h2>article:</h2>
<p><?= *article['contenu'] ?></p>

<br/>
<br/>

// formulaire pour poster un espace_commentaires
<h2>commentaires:</h2>
<form method="POST">
    <input type ="text" name="pseudo" placeholder="votre pseudo" /><br />
    <textarea name="commentaires" placeholder="Votre commentaire...." ><textarea><br/>
    <input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
</form>

<?php if(isset($c_erreur)) {echo "Erreur: ".$c_erreur; }?>
<br/>
<?php while($c = $commentaires->fetch()){ ?>
    <b><?= $c["pseudo"]:</b> <?= $c['commentaire'] ?>
<?php } ?>



<?php
}
?>