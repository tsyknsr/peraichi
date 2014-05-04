<?php foreach ($templates as $template): ?>
	<?php echo h($template['Template']['name']); ?>
<?php endforeach; ?>
<?php echo $this->Html->link('選択', array('controller' => 'landing_pages', 'action' => 'add')); ?>