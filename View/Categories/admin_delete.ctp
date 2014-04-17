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
?>
<?php echo $this->Form->create($modelName);?>
	<fieldset>
 		<legend><?php echo __d('categories', 'Delete Category');?> </legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('confirm', array('type' => 'hidden', 'value'=>'1'));
	?>
		<p>Are you sure you want to delete category <strong><?php echo $category['Category']['name'] ?></strong> ?</p>
	</fieldset>
<?php echo $this->Form->end(__d('categories', 'Confirm'));?>