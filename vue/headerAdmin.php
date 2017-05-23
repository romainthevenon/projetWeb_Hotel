<!-- En-tete -->
<header>
	<nav>
	    <div class="nav-wrapper">
	      <a href="vue/vueAdministrateur.php" class="brand-logo">Hotel Bonnier</a>
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	        <li><a href="index.php">Se deconnecter</a></li>
	        <li><a href="vueAdministrateur.php">Accueil</a></li>
	        <li><a href="modifHotel.php">Ajouter Hotel</a></li>
	        <li><a href="modifChambre.php">Ajouter Chambre</a></li>
	        <li><a href="consultReservationAdmin.php">Consulter Reservations</a></li>
	        <li><a href="consultClientAdmin.php">Consulter Clients</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	        <li><a href="index.php">Se deconnecter</a></li>
	        <li><a href="vue/vueAdministrateur.php">Accueil</a></li>
	        <li><a href="controleur/contrleurAjoutHotel.php">Ajouter Hotel</a></li>
	        <li><a href="controleur/controleurModifChambre.php">Ajouter Chambre</a></li>
	        <li><a href="controleur/controleurConsultReservationAdmin.php">Consulter Reservations</a></li>
	        <li><a href="controleur/controleurConsultClientAdmin.php">Consulter Clients</a></li>
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
