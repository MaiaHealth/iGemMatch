<div class="keywords index">
	<h2><?php echo __('Keywords'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($keywords as $keyword): ?>
	<tr>
		<td><?php echo h($keyword['Keyword']['id']); ?>&nbsp;</td>
		<td><?php echo h($keyword['Keyword']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $keyword['Keyword']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $keyword['Keyword']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $keyword['Keyword']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $keyword['Keyword']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Keyword'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>