<?php
  require_once("head.php");
  if(!isset($_SESSION['user'][0]))
  {
    header("Location: index.php?error=0");
  }else
  {


    $statut = $_GET['statut'];

    if(isset($_POST['saisir'])){
      header("Location: saisie.php?statut=".$_GET['statut']."");
    }elseif (isset($_POST['factures'])) {
      header("Location: factures.php?statut=".$_GET['statut']."");
    }elseif (isset($_POST['gerer'])) {
      header("Location: gerer.php?statut=".$_GET['statut']."");
    }
  ?>
    <div class="container">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>?statut=<?php echo $statut;?>">
        <input type="hidden" name="valide"/>
        <input class="btn" type="submit" name="saisir" value="Saisir"/>
        <input class="btn" type="submit" name="factures" value="Factures"/>
        <?php if ($statut == "sup")
        {
          echo '<input class="btn" type="submit" name="gerer" value="Gérer les utilisateurs"/>';
        } ?>

      </form>
    </div>
<?php
  require_once("footer.php");
  }
?>
