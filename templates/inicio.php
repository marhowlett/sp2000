<?php
    /* Template Name: Inicio */ 
    get_header();
?>

  
  
  
  

  <section id="slider" class="template-section">
  <div class="grid">

                <div class="col4">
                   <div class="ban">
                    <h2 class="blanco">Aseguramiento de Calidad</h2>

  <p class="blanco">Aseguramos la calidad en los procesos de fabricación y montaje de tus construcciones de acero soldadas y atornilladas. </p>

     <a href="https://sp2000.com.mx/#contacto"  class="btn"> <span>¡Me interesa!</span></a>
   
    
                </div>
                </div>
                <div class="col5 fondo">
                   <br/>
                </div>


            </div>

</section>
  
  <section id="somos" class="template-section">
  <div class="grid invertido">

                
                <div class="col5 fondo">
                   <br/>
                </div>
                <div class="col4">
                   <div class="ban">
                    <h2 class="azul">¿Quiénes Somos?</h2>

  <p class="gris">Somos <b>SP2000</b> una empresa con 20 años de experiencia en el aseguramiento de calidad y asesoría técnica en los procesos de fabricación y montaje de estructuras, tanques y tuberías de acero. </p>

     <a href="https://sp2000.com.mx/quienes-somos/"  class="btn"> <span>Saber más</span></a>
   
    
                </div>
                </div>


            </div>

</section>
   
   <section id="servicios" class="template-section">

        <h2 class="gris mayor">Nuestros servicios</h2>
        <div class="ban">
        <p class="gris">Inspección visual preventiva y pruebas no destructivas complementarias para el aseguramiento de calidad en los procesos de fabricación y montaje de estructuras, tuberías, tanques de acero y conexiones soldadas de elementos preforzados prefabricados.</p>
    </div>
    </section>
    
    
    
   <section id="galeria" class="template-section">
   <div class="contenedor">
   <h2 class="azul mayor">GALERIA
<span>DE PROYECTOS</span></h2>
<?php echo do_shortcode( '[ess_grid alias="Muestra"]' ); ?>
<div class="center">
<a href="https://sp2000.com.mx/galeria/"  class="btn"> <span>Ver Galería Completa</span></a>
</div>
</div>
</section>
  
  <section id="nuestra" class="template-section">
  <div class="contenedor">
      <div class="grid">
          <div class="col2"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/money.png" alt="Logo"><h3>Nuestra
Política</h3></div>
          <div class="col2"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/checklist.png" alt="Logo"><h3>Nuestra
Promesa</h3></div>
          <div class="col2"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/politics.png" alt="Logo"><h3>Su recompensa</h3></div>
      </div>
  </div>
</section>
  
  
 
    <section id="contacto" class="template-section">
    <div class="contenedor">

        

 <div class="grid ">
       
   
     <div class="col col_especial2">
    <h2 class="gris"> ¡Contáctanos!</h2>
     
     <p>En SP 2000 nos esforzamos por ofrecerte servicios de calidad. Por eso, coméntanos qué necesitas y te pondremos en contacto directo con el departamento correspondiente:</p>
     <?php echo do_shortcode( '[caldera_form id="CF5ebafc6344eb5"]' ); ?>
     <p class="center cont"><a href="mailto:contacto@sp2000.com.mx">contacto@sp2000.com.mx</a></p>
     
     </div>

       <div class="col datos">
       
     
       <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.png" alt="Logo">  De lunes a viernes de 9 am a 2 pm y de 4 a 6pm </p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.png" alt="Logo">  01 (777) 3-19-90-03</p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.png" alt="Logo">  <a href="https://wa.me/527775239736">(777) 5-23-97-36</a></p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/4.png" alt="Logo">  Calzada de los Gallos Núm. 20 
E 31-15 Col. Tejalpa, C.P. 62570 Jiutepec, Morelos. </p>
        
        </div>
        
        <div class="datosnuevos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.png" alt="fb">  Síguenos <a href="https://www.facebook.com/SP-2000-1586795688249762/?_rdc=1&_rdr"  class="btn"> <span>¿Cómo llegar?</span></a></p>
        
        </div>
       
     </div>
</div>
     </div>
</section>
 
<?php 
include("esbrillante.php");
    get_footer();
?>
