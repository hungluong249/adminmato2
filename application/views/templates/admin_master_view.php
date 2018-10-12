<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/admin_parts/admin_master_header_view');
?>
<!--main content start-->
<div class="container-scroller">
	<div class="container-fluid page-body-wrapper">
		<?php
		$this->load->view('templates/admin_parts/admin_master_sidebar_view');
		?>
		<div class="main-panel">
			<div class="content-wrapper">
				<?php
				echo $the_view_content;
				?>
			</div>
		</div>
	</div>
</div>
<!--main content end-->
<?php
$this->load->view('templates/admin_parts/admin_master_footer_view');
?>
