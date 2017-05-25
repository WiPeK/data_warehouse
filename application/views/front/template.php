<?php $this->load->view('front/header'); ?>
	<div class="container">
		<?php $this->load->view('front/menu'); ?>
		<?php $this->load->view($subview); ?>
	</div>
<?php $this->load->view('front/footer'); ?>
