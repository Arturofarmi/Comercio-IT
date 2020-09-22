		<?php  

			if(isset($_GET['pagina'])){ 

					$page = $_GET['pagina'];

			}else{
				$page= 'inicio';
			}


			include_once('header.php');

		?>
			<section id="page">
				<?php 

	
				include_once($page.'.php');

				?>
				
			</section>
			<?php
			include_once('footer.php');

		?>		
		