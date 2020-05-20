<?php
    /* Template Name: Galeria */ 
    get_header();
?>
 <section id="galeria" class="template-section">
  
   <h2 class="azul mayor">GALERIA
<span>DE PROYECTOS</span></h2>
<?php echo do_shortcode( '[ess_grid alias="Galeria"]' ); ?>
<div class="center">

</div>
</section>


<?php 
include("esbrillante.php");
    get_footer();
?>
