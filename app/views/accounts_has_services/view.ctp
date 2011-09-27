<div class="accountsHasServices view">
<h2><?php  __('Accounts Has Service');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Accounts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($accountsHasService['Accounts']['id'], array('controller' => 'accounts', 'action' => 'view', $accountsHasService['Accounts']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Services'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($accountsHasService['Services']['id'], array('controller' => 'services', 'action' => 'view', $accountsHasService['Services']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prefixes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($accountsHasService['Prefixes']['id'], array('controller' => 'prefixes', 'action' => 'view', $accountsHasService['Prefixes']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Numbers'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($accountsHasService['ShortNumbers']['id'], array('controller' => 'short_numbers', 'action' => 'view', $accountsHasService['ShortNumbers']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Account Identifier'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($accountsHasService['AccountIdentifier']['id'], array('controller' => 'account_identifiers', 'action' => 'view', $accountsHasService['AccountIdentifier']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Currencies'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($accountsHasService['Currencies']['id'], array('controller' => 'currencies', 'action' => 'view', $accountsHasService['Currencies']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($accountsHasService['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $accountsHasService['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Palabra'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['palabra']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comision'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['comision']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['fecha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Saldo Actual'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['saldo_actual']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Saldo Anterior'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['saldo_anterior']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Saldo Promedio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['saldo_promedio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $accountsHasService['AccountsHasService']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accounts Has Service', true), array('action' => 'edit', $accountsHasService['AccountsHasService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Accounts Has Service', true), array('action' => 'delete', $accountsHasService['AccountsHasService']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $accountsHasService['AccountsHasService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts Has Services', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts Has Service', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Services', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prefixes', true), array('controller' => 'prefixes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefixes', true), array('controller' => 'prefixes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Short Numbers', true), array('controller' => 'short_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Short Numbers', true), array('controller' => 'short_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Identifiers', true), array('controller' => 'account_identifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Identifier', true), array('controller' => 'account_identifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies', true), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currencies', true), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
