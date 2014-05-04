<?php
	echo $this->Form->create('Templates', array('action' => 'index'));
	echo $this->Form->input('App.url', array('placeholder' => 'http://')); 
	echo $this->Form->end(__('決定')); 

?>