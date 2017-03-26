<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	'Create',
);

$this->menu=array(
	
);
?>

<h1>Register Member</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
