<div class="templateCategories form">
<?php echo $this->Form->create('TemplateCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Template Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TemplateCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TemplateCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Template Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
