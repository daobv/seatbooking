<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */

$this->breadcrumbs=array(
	'Admin Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AdminUser', 'url'=>array('index')),
	array('label'=>'Manage AdminUser', 'url'=>array('admin')),
);
?>

<h1>Create AdminUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>