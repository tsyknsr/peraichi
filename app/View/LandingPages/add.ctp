<?php 
//編集画面
	echo $this->Form->create('LandingPage');
	echo $this->Form->input('template_id', array('type' => 'hidden'));
	echo $this->Form->input('user_id', array('type' => 'hidden'));
	echo $this->Form->input('subdomain');
	echo $this->Form->end(__('編集')); 
?>