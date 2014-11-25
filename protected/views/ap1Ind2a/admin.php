<?php
/* @var $this Ap1Ind2aController */
/* @var $model Ap1Ind2a */

$this->menu=array(
//	array('label'=>'List Ap1Ind1', 'url'=>array('index')),
	array('label'=>'Regresar', 'url'=>array('ap1Ind2aHist/index')),
	array('label'=>'Agregar registro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ap1-ind2a-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Administrar Datos de este periodo</h3>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ap1-ind2a-grid',
	'dataProvider'=>$model->search($id),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
            'name'=>'id_periodo',
            'value'=>'$data->Periodos->periodo',
            'filter'=>Ap1Ind1Hist::model()->options,
            'htmlOptions'=>array('style'=>'width: 180px;  text-align:center;'),
                    ),
		array(
            'name'=>'id_entidad',
            'value'=>'$data->Entidades->nombre',
            'filter'=>Entidades::model()->options,
            'htmlOptions'=>array('style'=>'width: 80px;  text-align:center;'),
                    ),
		//'valor',
		array(
            'name'=>'valor',
          //  'value'=>'$data->Actividad->nombre',
           // 'filter'=>ActividadesEconomicas::model()->options,
            'htmlOptions'=>array('style'=>'width: 20px;  text-align:center;'),
                    ),
		//'fecha_reg',
		//'fecha_mod',
		/*
		'user_reg',
		'user_mod',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
