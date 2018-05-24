<?php $this->load->view('_partials/navbarEli'); ?>


		<?php 
		//echo "<script>alert('".$inner_view."')</script>";
		$this->load->view($inner_view);
		 ?>


<?php $this->load->view('_partials/footerEli'); ?>