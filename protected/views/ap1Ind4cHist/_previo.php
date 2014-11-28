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


                        'url' => array('ap1Ind4bHist/grafico/'.$id.''),
                        //'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
                  ));
            ?>
</div>
        	</p>
		     <p class="table_title default">
		        	HISTÓRICO: PRODUCTO INTERNO BRUTO NACIONAL, INDICADOR GLOBAL DE LA ACTIVIDAD ECONÓMICA, INDICADOR TRIMESTRAL DE LA ACTIVIDAD ECONÓMICA ESTATAL DEL DISTRITO FEDERAL, 2009 A 2013, BASE 2008=100, SERIES ORIGINALES (VAR. % ANUAL)
		        </p>
		        
		      
		        <div class="default">
		        
		        	
		        	
		        	<table class="table_stats">
			        	<tr class="cell_label"> 
							 <td>Periodo</td>
							 <td>PIB</td> 
							 <td>IGAE<sup>1</sup></td> 
							 <td>ITTAEE D.F.<sup>2</sup></td> 
						</tr>
						<tr class="rEven">
							<td>2009/01</td>
							<td class="data">-5.23</td>
							<td class="data">-5.25</td>
							<td class="data">-4.51</td>
						</tr>
						
			        	
			     



			     <?php 


foreach ($model as $indice => $valor) {
//echo ("El indice1 $indice tiene el valor: $valor<br>");
	if (is_array($valor)){ 
   		foreach ($valor as $indice2 => $valor2) {
   			//echo ("El indice2 $indice2 tiene el valor: $valor2<br>");

   				if (is_array($valor2)){ 
			   		foreach ($valor2 as $indice3 => $valor3) {
			   			//echo ("El indice3 $indice3 tiene el valor: $valor3<br>");
			   			if (is_array($valor3)){ 
					   		foreach ($valor3 as $indice4 => $valor4) {
					   			//echo ("El indice4 $indice4 tiene el valor: $valor4<br>");
					   			if (is_array($valor4)){ 
							   		foreach ($valor4 as $indice5 => $valor5) {
							   			//echo ("El indice5 $indice5 tiene el valor: $valor5<br>");

							   		
							   		
							   		$pib =$model[$indice][$indice2][$indice3][$indice4][$indice5]['pib'];
							   		$igae =$model[$indice][$indice2][$indice3][$indice4][$indice5]['igae'];
							   		$itaee =$model[$indice][$indice2][$indice3][$indice4][$indice5]['itaee'];
							   		echo "	<tr class=\"rEven\">
													<td>$indice3/$indice5</td>
													<td class=\"data\">$pib</td>
													<td class=\"data\">$igae</td>
													<td class=\"data\">$itaee</td>
												</tr>";
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
				        <p class="table_exp_title"><sup>*</sup>Promedio trimestral</p>
				        <p class="table_exp_title"><sup>**</sup>El dato del cuarto trimestre del 2013 corresponde a estimaciones propias con base en los datos de la serie desestacionalizada del ITAEE del Distrito Federal</p>
			        	<p class="table_exp_source"><span>Fuente:</span>INEGI. Banco de Información Económica. Cifras preliminares.</p>		
			        </div>
		        </div>

		      
		        
</div>


          