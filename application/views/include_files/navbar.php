<header role="banner" id="fh5co-header">
	<div class="container">
		<!-- <div class="row"> -->
	    <nav class="navbar navbar-default">
        <div class="navbar-header">
        	<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
         <a class="navbar-brand" href="<?= base_url('Inicio/') ?>"><img src="<?= base_url('images/icon/logo.webp') ?>" style="height: 150px;"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#" data-nav-section="home"><span>Inicio</span></a></li>
			<li><a href="#" data-nav-section="services"><span>Soluciones</span></a></li>
			<li><a href="#" data-nav-section="testimonials"><span>Motívate</span></a></li>
            <li><a href="#" data-nav-section="work"><span>Productos</span></a></li>
			<li><a href="#" data-nav-section="about"><span>Nosotros</span></a></li>
			<li><a href="#" data-nav-section="alianza"><span>Clientes</span></a></li>					
            <li><a href="#" data-nav-section="contact"><span>Contáctanos</span></a></li>
             <li><a onclick="Open();"><span>Store</span></a></li>
             <!--<li><a href="http://localhost/OCSySStore/Index.php/store">tore</a></li>-->
          </ul>
        </div>
	    </nav>
	  <!-- </div> -->
  </div>
  <script>
    var Open = function () {
      window.open('http://localhost/OCSySStore/Index.php/store');
    }
  </script>
</header>