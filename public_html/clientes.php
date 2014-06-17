<?php
	$seccion = 'clientes';
	include('inc/encabezado.php');

	/* Defino Numero de Paginas */
	if ( isset($_GET['page']) ) {
		$pagina = $_GET['page'];
	} else {
		$pagina = 1;
	}
	if ($pagina<1) {
		$pagina = 1;
	}
	$pag_max=6; /* Tengo que definir cantidad maxima de paginas q
	va a mostrar en las fotos */
?>

<div id="contenedor_secc_fotos_fotos">
    <h3 class="titulo_secc_fotos">Seleccionando la foto de su interés podrá verla en mayor tamaño.</h3>
	<table id="tabla_fotos" cols="5" border="0" summary="Fotos de momentos inolvidables. Aquí podrian estar los tuyos">
      <tr>
	        <!--FOTO 1-->
		    <td>
			<?php
			   if (file_exists ('img/secc_fotos/' .((($pagina-1)*5)+1). '_c.jpg') ) { ?>
			       <a class="fotos" <?php echo 'href="img/secc_fotos/' .((($pagina-1)*5)+1). '_g.jpg"' ?> target="_blank" title="" onClick="window.open(this.href, this.target,'toolbar=0, menubar=0, status=0, location=0,width=589, height=589'); return false;">
				    <img id="primera" class="fotos" <?php echo 'src="img/secc_fotos/' .((($pagina-1)*5)+1). '_c.jpg"' ?> alt="Imagen" />
			<?php }
			   else {
			       echo '<img class="fotos" src="img/secc_foto_vacia.jpg" alt="Imagen" />';
			   } ?>
			</td>

            <!--FOTO 2-->
		    <td>
			<?php
			   if (file_exists ('img/secc_fotos/' .((($pagina-1)*5)+2). '_c.jpg') ) { ?>
			       <a class="fotos" <?php echo 'href="img/secc_fotos/' .((($pagina-1)*5)+2). '_g.jpg"' ?> target="_blank" title="" onClick="window.open(this.href, this.target,'toolbar=0, menubar=0, status=0, location=0,width=589, height=589'); return false;">
				    <img class="fotos" <?php echo 'src="img/secc_fotos/' .((($pagina-1)*5)+2). '_c.jpg"' ?> alt="Imagen" />
			<?php }
			   else {
			       echo '<img class="fotos" src="img/secc_fotos/foto_vacia.jpg" alt="Imagen" />';
			   } ?>
			</td>

            <!--FOTO 3-->
		    <td>
			<?php
			   if (file_exists ('img/secc_fotos/' .((($pagina-1)*5)+3). '_c.jpg') ) { ?>
			       <a class="fotos" <?php echo 'href="img/secc_fotos/' .((($pagina-1)*5)+3). '_g.jpg"' ?> target="_blank" title="" onClick="window.open(this.href, this.target,'toolbar=0, menubar=0, status=0, location=0,width=589, height=589'); return false;">
				    <img class="fotos" <?php echo 'src="img/secc_fotos/' .((($pagina-1)*5)+3). '_c.jpg"' ?> alt="Imagen" />
			<?php }
			   else {
			       echo '<img class="fotos" src="img/secc_fotos/foto_vacia.jpg" alt="Imagen" />';
			   } ?>
			</td>

            <!--FOTO 4-->
		    <td>
			<?php
			   if (file_exists ('img/secc_fotos/' .((($pagina-1)*5)+4). '_c.jpg') ) { ?>
			       <a class="fotos" <?php echo 'href="img/secc_fotos/' .((($pagina-1)*5)+4). '_g.jpg"' ?> target="_blank" title="" onClick="window.open(this.href, this.target,'toolbar=0, menubar=0, status=0, location=0,width=589, height=589'); return false;">
				    <img class="fotos" <?php echo 'src="img/secc_fotos/' .((($pagina-1)*5)+4). '_c.jpg"' ?> alt="Imagen" />
			<?php }
			   else {
			       echo '<img class="fotos" src="img/secc_fotos/foto_vacia.jpg" alt="Imagen" />';
			   } ?>
			</td>

            <!--FOTO 5-->
		    <td>
			<?php
			if (file_exists ('img/secc_fotos/' .((($pagina-1)*5)+5). '_c.jpg') )
			{ ?>
			       <a class="fotos" <?php echo 'href="img/secc_fotos/' .((($pagina-1)*5)+5). '_g.jpg"' ?> target="_blank" title="" onClick="window.open(this.href, this.target,'toolbar=0, menubar=0, status=0, location=0,width=589, height=589'); return false;">
				    <img class="fotos" <?php echo 'src="img/secc_fotos/' .((($pagina-1)*5)+5). '_c.jpg"' ?> alt="Imagen" />
			<?php
			}
			else {
				echo '<img class="fotos" src="img/secc_fotos/foto_vacia.jpg" alt="Imagen" />';
			} ?>
			</td>
      </tr>
    </table>

	<p id="barra_nav_fotos">
		<?php
		$foto_max = $pagina*5;
		$foto_min = ($pagina*5)-4;
		$foto_total = 30;
		if ($pagina==1)
		{
			echo '<span class="link_ant_sig_falso">anterior</span>&nbsp;';
			echo '<span class="simbolo_ant_sig_falso">&lt;</span>&nbsp;';
		}
		else
		{
			echo '<a class="link_ant_sig" href="clientes.php?page='. ($pagina-1) . '">anterior</a>&nbsp;';
			echo '<a class="simbolo_ant_sig" href="clientes.php?page='. ($pagina-1) . '">&lt;</a>&nbsp;';
		}
		echo 'Fotos ' .$foto_min. ' a '.$foto_max. ' de ' .$foto_total. '&nbsp;';

		if ($pagina==$pag_max)
		{
			echo '<span class="simbolo_ant_sig_falso">&gt;</span>&nbsp;';
			echo '<span class="link_ant_sig_falso">siguiente</span>';
		}
		else
		{
			echo '<a class="simbolo_ant_sig" href="clientes.php?page='. ($pagina+1) . '">&gt;</a>&nbsp;';
			echo '<a class="link_ant_sig" href="clientes.php?page='. ($pagina+1) . '">siguiente</a>';
		}
		?>
	</p>



<?php include('inc/pie.php'); ?>

</div>