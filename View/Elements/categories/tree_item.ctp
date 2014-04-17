<?php
/**
 * Copyright 2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Element displaying a category item in a tree list
 * 
 * @param array $data
 * @param int $depth => $depth ? $depth : count($stack),
 * @param boolean $hasChildren
 * @param int $numberOfDirectChildren
 * @param int $numberOfTotalChildren
 * @param array $firstChild
 * @param array $lastChild
 * @param boolean $hasVisibleChildren
 */
$link = $this->Html->link($data[$modelName]['name'], array('action' => 'edit', $data[$modelName]['id']));?>
<div class="navbar navbar-nav">
<span id='<?php echo $data[$modelName]['id']; ?>'> <?php echo $link ?></span>
<ul class="nav navbar-nav navbar-right">
	<li class="nav navbar-right"><?php echo $this->Html->link('delete', array('action' => 'delete', $data[$modelName]['id']));?></li>
	<li class="nav navbar-right"><?php echo $this->Html->link('move up', array('action' => 'moveup', $data[$modelName]['id']));?></li>
	<li class="nav navbar-right"><?php echo $this->Html->link('move down', array('action' => 'movedown', $data[$modelName]['id']));?></li>
	<li class="nav navbar-right"><?php echo $this->Html->link('edit', array('action' => 'edit', $data[$modelName]['id']));?></li>
</ul>
</div>