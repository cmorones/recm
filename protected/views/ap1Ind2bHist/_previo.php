  <?php
/* @var $this Ap1ind1JorgeController */
/* @var $model Ap1ind1Jorge */

$this->breadcrumbs=array(
	'Regresar'=>array('index'),
	//"Previo"=>array('previo','id'=>$model->id),
	'Previo',
);

?>

<div id="main_content">
        	
        		
        	<p>

        	<p class="table_title default">
		        	Vista Previa del Indicador
		        </p>
        		<div>
        	  	
	  	<?php
				  if($autoriza){
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'datos'.$registro['periodo'].'',
						'caption'=>'Autorizar',
						'value'=>'Autorizar',
						'htmlOptions'=>array('class'=>'btn btn-success','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
				}
			?>

			<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'validar'.$registro['periodo'].'',
						'caption'=>'Validar',
						'value'=>'Validar',
						'htmlOptions'=>array('class'=>'btn btn-info','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
			?>
		

			<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'pedf'.$registro['periodo'].'',
						'caption'=>'Exportar PDF',
						'value'=>'pedf',
						'htmlOptions'=>array('class'=>'btn btn-primary','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/grafico/'.$registro['id'].''),
						//'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
			?>

			<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'Excel'.$registro['periodo'].'',
						'caption'=>'Exportar Excel',
						'value'=>'Excel',
						'htmlOptions'=>array('class'=>'btn btn-primary','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
			?>
		

			 <?php
                  $this->widget('zii.widgets.jui.CJuiButton', array(
                        'buttonType'=>'link',
                        'name'=>'Grafico'.$registro['periodo'].'',
                        'caption'=>'Mostrar Grafico',
                        'value'=>'Grafico',
                        'htmlOptions'=>array('class'=>'btn btn-warning','style'=>'padding: 0px;'),


                        'url' => array('ap1Ind2aHist/grafico/'.$id.''),
                        //'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
                  ));
            ?>
</div>
        	</p>
		        
		        <p class="table_title option_2">
		        	Estructura productiva del Distrito Federal, 2012
		        </p>
		        
		        <p class="table_title option_3">
		        	Participación de las entidades en el PIB nacional, 2012
		        </p>
		        
		        <div class="default">
		        	<!-- <table class="table_stats">
		        		<tr class="cell_label"> 
							 <td>Periodo / sector económico</td> 
							 <td>2008</td> 
							 <td>2009</td> 
							 <td>2010</td> 
							 <td>2011</td> 
							 <td>2012</td>
						</tr>
			        	<tr class="cell_label"> 
							 <td colspan="6">Sector primario</td>
						</tr>
						<tr class="rOdd"> 
							 <td>Distrito Federal </td> 
							 <td class="data">0.06%</td>	
							 <td class="data">0.07%</td>	
							 <td class="data">0.06%</td>	
							 <td class="data">0.06%</td>	
							 <td class="data">0.06%</td> 
						</tr>
						<tr class="rEven"> 
							 <td>Estado de México</td> 
							 <td class="data">1.61%</td>	
							 <td class="data">1.47%</td>	
							 <td class="data">1.45%</td>
							 <td class="data">1.17%</td>	
							 <td class="data">1.32%</td> 
						</tr>
						<tr class="rOdd"> 
							 <td>Nuevo León</td>  
							 <td class="data">0.66%</td>	
							 <td class="data">0.73%</td>	
							 <td class="data">0.71%</td>	
							 <td class="data">0.60%</td>	
							 <td class="data">0.57%</td> 
						</tr>
						<tr class="rEven"> 
							 <td>Jalisco</td> 
							 <td class="data">5.26%</td>	
							 <td class="data">5.29%</td>	
							 <td class="data">5.45%</td>	
							 <td class="data">5.04%</td>	
							 <td class="data">5.08%</td> 
						</tr>
						<tr class="rOdd"> 
							 <td>Veracruz</td> 
							 <td class="data">4.61%	</td>
							 <td class="data">4.54%</td>	
							 <td class="data">4.39%</td>	
							 <td class="data">4.21%</td>	
							 <td class="data">4.26%</td> 
						</tr>
						<tr class="cell_label"> 
							 <td colspan="6">Sector secundario</td>
						</tr>
						<tr class="rOdd"> 
							 <td>Distrito Federal </td> 
							 <td class="data">13.90%</td>	
							 <td class="data">13.60%</td>	
							 <td class="data">12.32%</td>	
							 <td class="data">12.01%</td>	
							 <td class="data">11.71%</td> 
						</tr>
						<tr class="rEven"> 
							 <td>Estado de México</td> 
							 <td class="data">33.60%</td>	
							 <td class="data">32.81%</td>	
							 <td class="data">34.45%</td>	
							 <td class="data">33.82%</td>	
							 <td class="data">32.82%</td> 
						</tr>
						<tr class="rOdd"> 
							 <td>Nuevo León</td> 
							 <td class="data">39.00%</td>	
							 <td class="data">38.08%</td>	
							 <td class="data">39.03%</td>	
							 <td class="data">39.15%</td>	
							 <td class="data">38.52%</td> 
						</tr>
						<tr class="rEven"> 
							 <td>Jalisco</td> 
							 <td class="data">32.31%</td>	
							 <td class="data">30.87%</td>	
							 <td class="data">30.47%</td>	
							 <td class="data">30.79%</td>	
							 <td class="data">30.16%</td> 
						</tr>
						<tr class="rOdd"> 
							 <td>Veracruz</td> 
							 <td class="data">41.37%</td>	
							 <td class="data">42.61%</td>	
							 <td class="data">42.19%</td>	
							 <td class="data">41.74%</td>	
							 <td class="data">41.59%</td> 
						</tr>
						<tr class="cell_label"> 
							 <td colspan="6">Sector terciario</td>
						</tr>
						<tr class="rOdd"> 
							 <td>Distrito Federal </td> 
							 <td class="data">86.03%</td>	
							 <td class="data">86.33%</td>	
							 <td class="data">87.62%</td>	
							 <td class="data">87.93%</td>	
							 <td class="data">88.23%</td> 
						</tr>
						<tr class="rEven"> 
							 <td>Estado de México</td> 
							 <td class="data">64.79%</td>	
							 <td class="data">65.72%</td>	
							 <td class="data">64.10%</td>	
							 <td class="data">65.01%</td>	
							 <td class="data">65.86%</td> 
						</tr>
						<tr class="rOdd"> 
							 <td>Nuevo León</td> 
							 <td class="data">60.34%</td>	
							 <td class="data">61.19%</td>	
							 <td class="data">60.26%</td>	
							 <td class="data">60.25%</td>	
							 <td class="data">60.91%</td> 
						</tr>
						<tr class="rEven"> 
							 <td>Jalisco</td> 
							 <td class="data">62.42%</td>	
							 <td class="data">63.84%</td>	
							 <td class="data">64.08%</td>	
							 <td class="data">64.17%</td>	
							 <td class="data">64.76%</td> 
						</tr>
						<tr class="rOdd"> 
							 <td>Veracruz</td> 
							 <td class="data">54.01%</td>	
							 <td class="data">52.85%</td>	
							 <td class="data">53.42%</td>	
							 <td class="data">54.04%</td>	
							 <td class="data">54.15%</td> 
						</tr> -->
				


<table class="table_stats">
		        		<tr class="cell_label"> 
							 <td>Periodo / sector económico</td> 
							 <td>2008</td> 
							 <td>2009</td> 
							 <td>2010</td> 
							 <td>2011</td> 
							 <td>2012</td>
						</tr>
						<tr class="cell_label"> 
							 <td colspan="6">Sector primario</td>
						</tr>

			     <?php 

foreach ($model as $indice => $valor) {
//echo ("El indice1 $indice tiene el valor: $valor<br>");
	if (is_array($valor)){ 
   		foreach ($valor as $indice2 => $valor2) {
   			//echo ("El indice2 $indice2 tiene el valor: $valor2<br>");

   				if (is_array($valor2)){ 
			   		foreach ($valor2 as $indice3 => $valor3) {
			   			// año echo ("El indice3 $indice3 tiene el valor: $valor3<br>");
			   			if (is_array($valor3)){ 
					   		foreach ($valor3 as $indice4 => $valor4) {
					   			//echo ("El indice4 $indice4 tiene el valor: $valor4<br>");
					   			if (is_array($valor4)){ 
					   				foreach ($valor4 as $indice5 => $valor5) {
					   			echo ("El indice5 $indice5 tiene el valor: $valor5<br>");

					   		
					   		}
			   			}

					   		
					   		}
			   			}
			   			
			   		}
			   	}
		}
	}
}





?>
			        </table>
			        
			        <div class="table_explanation">
				        <p class="table_exp_source"><span>Fuente:</span>INEGI, Censo Económico 2009, consulta electrónica en: http://www.inegi.org.mx/est/contenidos/espanol/proyectos/censos/ce2009/default.asp?s=est&c=14220</p>
			        </div>
		        </div>

		      
		        
</div>


          