<?php include ( 'header.php')?>

<?php if(  !$detect->isMobile() ) : ?>
<div id="slider" class="hidden-md-down mascara">
  <?php 
  $the_query = new WP_Query( 'post_type=slider&orderby=menu_order' ); 
if ( ($the_query -> have_posts() ) ):
?>
  <div class="slider_container">
    <div id="gallery-1" class="royalSlider rsDefault visibleNearby">
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <?php if ( has_post_thumbnail() ) {
      $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
	?>
      <?php  if (function_exists('rwmb_meta')) {
   		$link_facebook=rwmb_meta('prefix-text_1');
   		$link_alternativa=rwmb_meta('prefix-text_2');
    }?>
      <div class="slider_inner" style=" background-image: url('<?php echo $large_image_url[0];?>');"> <a href="<?php echo empty( $link_facebook) ? '' : $link_facebook ;?>" target="_blank" title="Mas información en Facebook"><img class="rsImg"  src="<?php print THEMEROOT ?>/img/slider_form.png" /></a>
        <?php } // Fin Post Thumbnail ?>
        <div class="sombra"></div>
        <?php if ( !empty($link_alternativa )) : ?>
        <div class="adquirir_entradas"><a  class="btn btn_primario btn_entradas" href="<?php echo $link_alternativa; ?>" target="_blank" title="Adquirir entradas en Alternativa Teatral"><span class="fa fa-ticket fa_left_10"></span> Adquirir Entradas</a></div>
        <?php endif; // Fin Not empty link alternativa?>
      </div>
      <?php endwhile; ?>
    </div>
    <!-- /#gallery1 --> 
  </div>
  <!-- slider_inner -->
  <?php endif ?>
  <?php wp_reset_postdata();?>
</div>
<!-- /Seccion Home-->

<?php endif; // Mobile Detect ?>

<!-- Mobile Pestañas Cartelera / Talleres -->
<div class="hidden-lg-up">
  <ul class="mobile_tabs" role="tablist">
    <li class="mobile_item js-menu-mobile-item"> <a class="nav-link active " href="#cartelera" role="tab">Cartelera</a> </li>
    <li class="mobile_item js-menu-mobile-item"> <a class="nav-link" href="#talleres" role="tab">Talleres y Seminarios</a> </li>
  </ul>
</div>
<!-- FIN Mobile Pestañas Cartelera / Talleres -->





<section class="seccion cartelera active" id="cartelera">

<div class="container">

 <?php $esp_query = new WP_Query( 'post_type=post&orderby=menu_order' ); 
if ( ($esp_query -> have_posts() ) ){

// Para imprimir por filas
$cant_post=0;
$count_posts = wp_count_posts();
$total_post = $count_posts->publish;

?>

	<div class="row">
        <div class="titulo_seccion col-md-12">
            <h2>Cartelera de Espectáculos</h2>
            <div class="titulo_decoracion"></div>
		</div>
    </div>


<?php while ($esp_query -> have_posts() ) {?>

<?php  
        if( $cant_post == 0 ){ echo '<div class="row">'; } ?>


<?php  $esp_query -> the_post();  ?>
<?php  
if (function_exists('rwmb_meta')) {
   		$tipo_esp=rwmb_meta('prefix-tipo_esp');
   		$mes_esp=rwmb_meta('prefix-mes_esp');
		$dia_esp=rwmb_meta('prefix-dia_esp');
		$link_facebook=rwmb_meta('prefix-text_1');
   		$link_alternativa=rwmb_meta('prefix-text_2');
    }?>
    
<div class="col-lg-4 col-md-4">    
<div class="box_espec">

<div class="card-header">
                <div class="foto_espectaculo">
                     <div class="foto_contenedor">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?>
                    </div>
                </div>
            </div>
<div class="card-block">
 <h5 class="tipo"><?php echo empty( $tipo_esp ) ? '<br>' : $tipo_esp; ?></h5>
            <h3 class="titulo"><?php the_title(); ?></h3>
            <p><span class="mes"><?php echo empty( $mes_esp ) ? '<br>' : $mes_esp; ?></span> <?php echo empty( $dia_esp ) ? '' : $dia_esp; ?></p> 
</div>
 <div class="bloque_footer">
              <a href="<?php echo $link_alternativa; ?>" class="btn btn-secundario" target="_blank" title="Adquirir entradas en Alternativa Teatral"><span class="fa fa-ticket fa_left_10"></span>Adquirir Entradas</a>
              <a href="<?php echo $link_facebook; ?>" class="btn btn-secundario" target="_blank" title="Ver más en Facebook"><span class="fa fa-facebook fa_left_10"></span>Ver más en Facebook</a>
            </div>
            
</div>
</div>

<?php 
        // Si termina una fila que la cierre
        if( $cant_post == 2 ){ echo '</div>'; $cant_post=0;  }
		else { $cant_post++ ; }
		
	   // if ( $cant_post >= $total_post ){ echo '</div></div>'; }
	   // Si es el ultimo
		if (($esp_query->current_post +1) == ($total_post) ) {
 	    echo '</div>';
}
 

    ?>




<?php }; // Fin While ?>
<?php }; // Fin If?>
<?php wp_reset_postdata();?>
</div><!-- Fin container-->
</section>


<!-- Fin Seccion Cartelera-->


 <?php 
 
 $args = array(
    'post_parent' => 57,
    'post_type' => 'page',
    'orderby' => 'menu_order',
	'order' => 'ASC'
);

 $sem_query = new WP_Query( $args ); 
if ( ($sem_query -> have_posts() ) ){

// Para imprimir por filas
$cant_post=0;
$count_posts = wp_count_posts();
$total_post = $count_posts->publish;

?>
<section class="seccion talleres" id="talleres">

<div class="container">

	<div class="row">
        <div class="titulo_seccion col-md-12">
            <h2>Talleres y Seminarios</h2>
            <div class="titulo_decoracion"></div>
            	<div class="bg_destacado">
            		<p>Inscribite llamando de <br class="hidden-md-up"><strong>Lunes a Viernes de 17 a 21hs<br class="hidden-md-up"></strong> al <strong><a href="tel:02214893636"> (0221) 489-3636</a></strong><br>o mediante nuestro <a class="js_ir_contacto btn btn-sm  btn-secundario " href="#contacto" >Formulario de Contacto</a></p>
				</div>
        </div>
    </div>
    
   <?php while ($sem_query -> have_posts() ) {?>

<?php  
        if( $cant_post == 0 ){ echo '<div class="row">'; } ?>


<?php  $sem_query -> the_post();  ?>
<?php  
if (function_exists('rwmb_meta')) {
		$profesor_sem=rwmb_meta('prefix-profesor_sem');
   		$horarios_sem=rwmb_meta('prefix-horarios_sem');  		
    }?> 
    
    
    

   
  	 <div class="col-lg-6">
   <div class="box clearfix">
       <div class="box_foto">
       
       <a href="#modal-talleres-<?php the_ID(); ?>" data-toggle="modal" title="Mas información"><?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?></a>
       
       </div><!-- /box-foto-->
       
       <div class="box_info">
       <h3><a href="#modal-talleres-<?php the_ID(); ?>" data-toggle="modal"><?php the_title(); ?></a></h3>
       <p class="destacado"><?php echo $profesor_sem ?></p>
       <div class="texto"><?php echo $horarios_sem ?></div>
       </div>
   
   	   <a href="#modal-talleres-<?php the_ID(); ?>" data-toggle="modal" class="btn_lupa" title="Mas información"><span class="fa fa-search-plus"></span></a>	
   </div><!-- /box-->
   </div>
   

<?php 
        // Si termina una fila que la cierre
        if( $cant_post == 1 ){ echo '</div>'; $cant_post=0;  }
		else { $cant_post++ ; }
		
	   // if ( $cant_post >= $total_post ){ echo '</div></div>'; }
	   // Si es el ultimo
		if (($esp_query->current_post +1) == ($total_post) ) {
 	    echo '</div>';
}
 

    ?>

<div id="modal-talleres-<?php the_ID(); ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    
    <div class="modal-header">
      <h3 class="modal-title">
        <?php the_title();?>
      </h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
     <?php the_content(); ?>
    </div>
    <div class="modal-footer hidden-sm-up">
    <button type="button" class="btn btn-secundario btn-block" data-dismiss="modal">Cerrar</button>
    </div>
  
  </div>
  </div>
  
  </div> <!-- /modal -->


<?php }; // Fin While ?>  

</div><!-- fin container -->
</section>
<?php }; // Fin If?>
<?php wp_reset_postdata();?>


 <?php 
 
 $sala_args = array(
    'p' => 31,
    'post_type' => 'page'
);

$sala_query = new WP_Query( $sala_args ); 
if ( ($sala_query -> have_posts() ) ){
$sala_query ->the_post();
?>
<section class="seccion sala" id="sala">

<div class="container">
<div class="row">
        <div class="titulo_seccion col-md-12">
            <h2>Sala 420</h2>
            <div class="titulo_decoracion"></div>
            <p><?php the_content(); ?></p>
		</div>
<div class="botones_pdf">
    <div class="boton boton_izq">
        <a href="#" class="btn btn-secundario btn_2_lineas" title="Descargar PDF - 52MB">
        La Historia de Sala 420
        <span>PDF - 52 MB</span>
        </a>
    </div>
    <div class="boton boton_der">
        <a href="#" class="btn btn-secundario btn_2_lineas" title="Descargar PDF - 5MB">
        Documentos Técnicos
        <span>PDF - 5 MB</span>
        </a>
    </div>
</div>        
        
    </div>
</div><!-- /container-->


<div class="row_galeria">

<?php  
if (function_exists('rwmb_meta')) {
  $fotos_galeria=rwmb_meta('imgadv','type=image_advanced');
  foreach (   $fotos_galeria as $foto ){
  	

	
    echo "<div class='foto'>
		<a href='{$foto['full_url']}' rel='ilightbox[sala]' data-caption='{$foto['description']}' title='{$foto['title']}'>
    <img src='{$foto['url']}'  srcset='{$foto['srcset']}'  alt='{$foto['title']}' class=''/>
    <div class='epigrafe'>{$foto['description']}</div>
    </a></div>"; 
	// <div class='lupa'><span class='fa fa-search-plus'></span></div> 
 

   }; // fin foreach 
  }; // fin functionexist

 ?>

</div><!-- /row_galeria-->


</section>
<!-- Fin SALA-->
<?php }; // Fin If ?>
<?php wp_reset_postdata();?>


<section class="seccion contacto" id="contacto">
<div class="container">


<div class="row">
        <div class="titulo_seccion col-md-12">
            <h2>Estamos en Contacto</h2>
            <div class="titulo_decoracion"></div>
           
		</div>
    </div>


<div class="row">

    <div class="col-lg-8">
    
    	<div class="contacto_inner">
        <p class="aviso mb-5"><strong>Por favor complete todos los campos del formulario.</strong></p>
        <?php if(  !$detect->isMobile() ) : ?>
        <div class="logo_chico"><img src="<?php print IMAGES; ?>/logo-chico.png" class="no-lazy" /></div>
        <?php endif; // detect mobile ?>
        <div class="formulario">
        
        <form role="form" id="contact-form" method="post" onsubmit="return false">

<div class="row">
<div class="col-lg-8">
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required>
	<input type="hidden" name="tipo" id="tipo" value="contacto">
</div>


<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="" required>
  </div>

<div class="form-group">
    <label for="area">Área</label>
    <select class="form-control" id="area" name="area">
    <option value="" selected>Seleccione el área de destino</option>
    <option value="taller">&Aacute;rea Taller</option>
    <option value="produccion">&Aacute;rea Producción</option>
    <option value="3">Three</option>
   </select>
  </div>
</div>  
</div>


<div class="form-group">
    <label for="comentarios">Mensaje</label>
    <textarea class="form-control" id="comentarios" name="comentarios" rows="8" required></textarea>

  </div>

<div class="form-check mb-4 mt-4" >
    <label class="custom-control custom-checkbox">
       <input type="checkbox" class="custom-control-input" id="suscribirme" name="suscribirme" checked >
  	   <span class="custom-control-indicator"></span>
       <span class="custom-control-description ml-1">Suscribirme al Boletín de Novedades</span>
    </label>
</div>
<div id="form-ok" style="display:none;" class="alert bg-success" role="alert">Su consulta ha sido enviada. Gracias por contactarse con Sala 420.
<button type="button" class="close"  aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="form-error" style="display:none;" class="alert bg-danger" role="alert">Ha ocurrido un error, por favor envíe nuevamente su consulta.
<button type="button" class="close"  aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>   
<button type="submit" id="btn_enviar" onclick="enviar()" class="btn btn_primario" style="min-width:130px;">Enviar 
<span class="fa fa-spinner fa-pulse fa_right_10 js-icono-enviando" style="display:none;"></span></button>

</form>
        
      
        </div><!-- /formulario-->
        </div><!-- /inner -->
   
    
    </div><!-- fin col-->

    <div class="col-lg-4">
    	
        <div class="info_contacto">
  
       <p>
       	<span class="fa fa-map-marker fa_left_15"></span>42 N.571 e/6 y 7, La Plata<br>
        <span class="fa fa-phone fa_left_15"></span><a href="tel:02214893636" style="color:#444;">Tel: (0221) 489-3636</a><br><br>
        
        <span class="fa fa-info-circle fa_left_15"></span>
        <a href="#modal-como-llegar" title="Cómo llegar a Sala 420" data-toggle="modal">¿Cómo llegar a Sala 420?</a><br><br>        
        <span class="fa fa-clock-o fa_left_15"></span>
        Horario de Atención<br>
        <span class="fa fa-angle-right fa_left_15" style="color:#f5f5f5;"></span>
        Lunes a Viernes de 17 a 21hs<br>

        </p>
        
            <div class="info_contacto_footer">
            <a href="https://www.facebook.com/Sala420LaPlata/" title="Síguenos en Facebook" target="_blank"><span class="fa fa-facebook"></span></a>
            <a href="https://www.instagram.com/sala420lp/?hl=es" title="Síguenos en Instagram" target="_blank"><span class="fa fa-instagram"></span></a>
            <a href="https://twitter.com/SALA_420" title="Síguenos en Twitter" target="_blank"><span class="fa fa-twitter"></span></a>
            </div>
        
        </div><!-- fin info-->
        <div class="info_staff">
        <div class="info_staff_header">Staff de Sala 420</div>
      <?php 
 
 $staff_args = array(
    'p' => 91,
    'post_type' => 'page'
);

$staff_query = new WP_Query( $staff_args ); 
if ( ($staff_query -> have_posts() ) ){
$staff_query ->the_post();
?>         
        <div class="info_staff_body">
            <?php the_content(); ?>
        </div>
        
<?php }; wp_reset_postdata(); ?>        
        </div><!-- fin info-->
        
    
    </div><!-- fin col-->

<div id="modal-como-llegar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    
    <div class="modal-header">
      <h3 class="modal-title">
        Cómo llegar a Sala 420
      </h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <p>
    Texto de como llegar
    </p>
    <div class="map_box">

    </div><!-- /map_box-->
    </div>
    
    <div class="modal-footer hidden-sm-up">
    <button type="button" class="btn btn-secundario btn-block" data-dismiss="modal">Cerrar</button>
    </div>
  
  </div>
  </div>
  
  </div> <!-- /modal -->

</div><!-- fin row -->

<!-- SPONSORS -->
<?php  if(  !$detect->isMobile() || $detect->isTablet()) { ?>
<?php 
$sponsors_args = array(
    'p' => 100,
    'post_type' => 'page'
);

$sponsors_query = new WP_Query( $sponsors_args );
 
if ( ($sponsors_query -> have_posts() ) ){
$sponsors_query ->the_post();

?>
<div class="sponsors">

<div class="swiper-container carousel_sponsors">

<div class="swiper-button swiper-button-prev"><img src="<?php print IMAGES?>/arrow-left.svg" />
</div>
<div class="swiper-button swiper-button-next"><img src="<?php print IMAGES?>/arrow-right.svg" />
</div>

<ul class="swiper-wrapper">

<?php 

 if (function_exists('rwmb_meta')) {
  $sponsors = rwmb_meta('sponsors','type=image_advanced');
  foreach (   $sponsors as $sponsor){
  	
    echo "<li class='swiper-slide'>
		<a href='{$sponsor['description']}' target='_blank' title='{$sponsor['title']}'>
    <img src='{$sponsor['url']}'  srcset='{$sponsor['srcset']}' alt='{$sponsor['title']}'/>
    </a></li>";  
  }; // fin foreach 
  }; // fin functionexist

 ?>


</ul>

</div><!-- /swiper-container-->



</div><!-- /sponsors-->

<?php }; // Detect mobile ?>
<?php }; // Detect mobile ?>



</div><!-- /container-->
</section>
<footer class="footer">
<p>&copy; 2017 - Sala 420 <span class="hidden-sm-down"> - </span><br class="hidden-md-up">Todos los derechos reservados</p>
<div class="design hidden-xs-down">by: <a href="http://www.robertostringa.com" target="_blank" title="Sitio desarrollado por RS">RS</a></div>
</footer>
<script>
	
function enviar(){
			jQuery('#contact-form .alert').hide(250);
			jQuery("#contact-form").validate({
			rules: {
				nombre: "required",
				area: "required",
				//numero: {
				//	required: true,
				//	number: true
			    //	},
				comentarios: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
					nombre: "Por favor ingrese su nombre",
					area: "Seleccione un área de destino",
					//numero:"Por favor ingrese un teléfono",
					comentarios:"Por favor ingrese su mensaje",
					email: {
						required: "Por favor ingrese su dirección de email",
						email: "La direccion de email debe tener el siguiente formato nombre@dominio.com"
						}
					}
		});
		
		if(jQuery('#nombre').valid()&&jQuery('#email').valid()&&jQuery('#comentarios').valid()&&jQuery('#area').valid()){
			var url = "<?php print THEMEROOT; ?>/contact.php"; 
			var data = jQuery("#contact-form").serialize();
			jQuery('.js-icono-enviando').show();
			jQuery('#btn_enviar').prop( "disabled", true );
			jQuery.ajax({
				   type: "POST",
				   url: url,
				   data: data, 
				   success: process_form
				
			 });
		}else{
			return false; 
		}
 }
 function process_form(data){
	
	if(data =='ok'){
		//jQuery('#form-contacto').hide();
		jQuery('#form-ok').show(250);
		jQuery('.js-icono-enviando').hide();
		jQuery('#btn_enviar').prop( "disabled", false );
		
	}else{
			jQuery('#form-error').show(250);
			jQuery('.js-icono-enviando').hide();
			jQuery('#btn_enviar').prop( "disabled", false );
	}
	
	jQuery('.alert .close').on('click',function(){
		
		jQuery('#contact-form .alert').hide(250);
		
		})
	
 }

</script>

<?php include ( 'footer.php')?>
