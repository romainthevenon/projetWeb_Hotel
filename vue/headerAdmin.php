<!-- En-tete -->
<header>
	<nav>
	    <div class="nav-wrapper">
	      <a href="controleurConnexionAdmin.php" class="brand-logo">Hotel Bonnier</a>
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	        <li><a href="../index.php">Se deconnecter</a></li>
	        <li><a href="../controleur/controleurConnexionAdmin.php">Accueil</a></li>
	        <li><a href="../controleur/controleurmodifierAccueilAdmin.php">Modifier prix</a></li>
	        <li><a href="../controleur/controleurReservationAccueilAdmin.php">Consulter Reservations</a></li>
	        <li><a href="../controleur/controleurClientAccueilAdmin.php">Consulter Clients</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	        <li><a href="../controleur/controleurDeconnexionAdmin.php">Se deconnecter</a></li>
	        <li><a href="../controleur/controleurConnexionAdmin.php">Accueil</a></li>
	        <li><a href="../controleur/controleurmodifierAccueilAdmin.php">Modifier prix</a></li>
	        <li><a href="../controleur/controleurReservationAccueilAdmin.php">Consulter Reservations</a></li>
	        <li><a href="../controleur/controleurClientAccueilAdmin.php">Consulter Clients</a></li>
	      </ul>
	    </div>
	</nav>
</header>

<!-- Script javascript -->
<script type="text/javascript">
	$(document).ready(function(){
      	$('.carousel').carousel();
      	$(".button-collapse").sideNav();
    });
</script>
