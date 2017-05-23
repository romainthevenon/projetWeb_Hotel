<!-- En-tete -->
<header>
	<nav>
	    <div class="nav-wrapper">
	      <a href="../index.php" class="brand-logo">Hotel Bonnier</a>
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	        <li><a href="../index.php">Accueil</a></li>
	        <li><a href="vueConnexionAdmin.php">Administrateur</a></li>
	        <li><a href="collapsible.html">Contact</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	        <li><a href="index.php">Accueil</a></li>
	        <li><a href="vueConnexionAdmin.php">Administrateur</a></li>
	        <li><a href="collapsible.html">Contact</a></li>
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
