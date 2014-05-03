<div class="templateCategories view">
<h2><?php echo __('Template Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($templateCategory['TemplateCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($templateCategory['TemplateCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($templateCategory['TemplateCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($templateCategory['TemplateCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template Category'), array('action' => 'edit', $templateCategory['TemplateCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Template Category'), array('action' => 'delete', $templateCategory['TemplateCategory']['id']), null, __('Are you sure you want to delete # %s?', $templateCategory['TemplateCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Templates'); ?></h3>
	<?php if (!empty($templateCategory['Template'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Template Category Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Thumbnail Path'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($templateCategory['Template'] as $template): ?>
		<tr>
			<td><?php echo $template['id']; ?></td>
			<td><?php echo $template['template_category_id']; ?></td>
			<td><?php echo $template['name']; ?></td>
			<td><?php echo $template['thumbnail_path']; ?></td>
			<td><?php echo $template['created']; ?></td>
			<td><?php echo $template['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'templates', 'action' => 'view', $template['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'templates', 'action' => 'edit', $template['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'templates', 'action' => 'delete', $template['id']), null, __('Are you sure you want to delete # %s?', $template['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
