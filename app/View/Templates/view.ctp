<div class="templates view">
<h2><?php echo __('Template'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($template['Template']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($template['TemplateCategory']['name'], array('controller' => 'template_categories', 'action' => 'view', $template['TemplateCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($template['Template']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail Path'); ?></dt>
		<dd>
			<?php echo h($template['Template']['thumbnail_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($template['Template']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($template['Template']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template'), array('action' => 'edit', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Template'), array('action' => 'delete', $template['Template']['id']), null, __('Are you sure you want to delete # %s?', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Categories'), array('controller' => 'template_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Category'), array('controller' => 'template_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Landing Pages'), array('controller' => 'landing_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Landing Page'), array('controller' => 'landing_pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Landing Pages'); ?></h3>
	<?php if (!empty($template['LandingPage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Template Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Subdomain'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($template['LandingPage'] as $landingPage): ?>
		<tr>
			<td><?php echo $landingPage['id']; ?></td>
			<td><?php echo $landingPage['template_id']; ?></td>
			<td><?php echo $landingPage['user_id']; ?></td>
			<td><?php echo $landingPage['subdomain']; ?></td>
			<td><?php echo $landingPage['created']; ?></td>
			<td><?php echo $landingPage['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'landing_pages', 'action' => 'view', $landingPage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'landing_pages', 'action' => 'edit', $landingPage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'landing_pages', 'action' => 'delete', $landingPage['id']), null, __('Are you sure you want to delete # %s?', $landingPage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Landing Page'), array('controller' => 'landing_pages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
