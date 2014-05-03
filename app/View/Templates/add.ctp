<div class="templates form">
<?php echo $this->Form->create('Template'); ?>
	<fieldset>
		<legend><?php echo __('Add Template'); ?></legend>
	<?php
		echo $this->Form->input('template_category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('thumbnail_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Templates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Template Categories'), array('controller' => 'template_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Category'), array('controller' => 'template_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Landing Pages'), array('controller' => 'landing_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Landing Page'), array('controller' => 'landing_pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
