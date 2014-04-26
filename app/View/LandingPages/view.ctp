<div class="landingPages view">
<h2><?php echo __('Landing Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($landingPage['LandingPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template'); ?></dt>
		<dd>
			<?php echo $this->Html->link($landingPage['Template']['name'], array('controller' => 'templates', 'action' => 'view', $landingPage['Template']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($landingPage['User']['id'], array('controller' => 'users', 'action' => 'view', $landingPage['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subdomain'); ?></dt>
		<dd>
			<?php echo h($landingPage['LandingPage']['subdomain']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($landingPage['LandingPage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($landingPage['LandingPage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Landing Page'), array('action' => 'edit', $landingPage['LandingPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Landing Page'), array('action' => 'delete', $landingPage['LandingPage']['id']), null, __('Are you sure you want to delete # %s?', $landingPage['LandingPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Landing Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Landing Page'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
