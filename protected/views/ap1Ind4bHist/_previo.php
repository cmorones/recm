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
		        	Indicador trimestral de la actividad económica del Distrito Federal por sector de actividad económica, 2013<br>Series originales.<br>Índice de volumen físico 2008=100
		        </p>
		       
		        
		        <div class="default">
		        	
		        
		        	
		        

			        	
			     
<table class="table_stats">
			        	<tr>
			        		<td rowspan="2" class="span_time">Sector de actividad económica</td>
			        		<td colspan="3" class="span_time">Series originales</td>
			        		<td colspan="3" class="span_time">Variación anual (%)</td>
			        	</tr>
			        	<tr class="rOdd">
			        		<td colspan="6">2014/02</td>
			        		
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
							   			if (is_array($valor5)){ 
									   		foreach ($valor5 as $indice6 => $valor6) {
									   			//echo ("El indice6 $indice6 tiene el valor: $valor6<br>");
									   			if (is_array($valor6)){ 
											   		foreach ($valor6 as $indice7 => $valor7) {
											   			//echo ("El indice7 $indice7 tiene el valor: $valor7<br>");

											   			$act =$model[$indice][$indice2][$indice3][$indice4][$indice5][$indice6][$indice7]['valor'];
							   							$vp  =$model[$indice][$indice2][$indice3][$indice4][$indice5][$indice6][$indice7]['vp'];

											   			echo "<tr class=\"rOdd\">
												        		<td>$indice7</td>
																<td colspan=\"3\" class=\"data\">$act</td>	
																<td colspan=\"3\" class=\"data\">$vp</td>	
														
												        	</tr>";



											   		}
									   	}
									   		}
									   	}

									   		
							   		
							   	//	$act =$model[$indice][$indice2][$indice3][$indice4][$indice5]['total'];
							   	//	$vp =$model[$indice][$indice2][$indice3][$indice4][$indice5]['vp'];
							   		
							   		}
					   			}

					   
					   		}
			   			}
			   			
			   		}
			   	}
		}
	}
}



   /* $azcapotzalco =number_format($model[$indice][$indice2]['2'][$indice4],0);
    $coyoacan =number_format($model[$indice][$indice2]['3'][$indice4],0);
    $cuajimalpa =number_format($model[$indice][$indice2]['4'][$indice4],0);
    $gam =number_format($model[$indice][$indice2]['5'][$indice4],0);
    $iztacalco =number_format($model[$indice][$indice2]['6'][$indice4],0);
    $iztapalapa =number_format($model[$indice][$indice2]['7'][$indice4],0);
    $contreras =number_format($model[$indice][$indice2]['8'][$indice4],0);
    $milpaalta =number_format($model[$indice][$indice2]['9'][$indice4],0);
    $obregon =number_format($model[$indice][$indice2]['10'][$indice4],0);
    $tlahuac =number_format($model[$indice][$indice2]['11'][$indice4],0);
    $tlalpan =number_format($model[$indice][$indice2]['12'][$indice4],0);
    $xochimilco =number_format($model[$indice][$indice2]['13'][$indice4],0);
    $benito =number_format($model[$indice][$indice2]['14'][$indice4],0);
    $cuautemoc =number_format($model[$indice][$indice2]['15'][$indice4],0);
    $hidalgo =number_format($model[$indice][$indice2]['16'][$indice4],0);
    $venustiano =number_format($model[$indice][$indice2]['17'][$indice4],0);

    /*$total = $azcapotzalco + $coyoacan + $cuajimalpa + $gam + $iztacalco + $iztapalapa + $contreras + $milpaalta + $obregon + $tlahuac + $tlalpan + $xochimilco + $benito + $cuautemoc + $hidalgo + $venustiano;
    
    $totaldf = $totaldf + $total;
    $totaldf =number_format($total,0); */


    



/*

    $sql = "SELECT nombre from actividades_economicas where id=$indice2"; 
	$actividad = Yii::app()->db->createCommand($sql)->queryRow();



     echo "<tr class=\"rEven\">			        		
			        		<td>".$actividad['nombre']."</td>
			        		<td class=\"data\">".$totaldf."</td>
			        		<td class=\"data\">".$azcapotzalco."</td>
			        		<td class=\"data\">".$coyoacan."</td>
			        		<td class=\"data\">".$cuajimalpa."</td>
			        		<td class=\"data\">".$gam."</td>
			        		<td class=\"data\">".$iztacalco."</td>
			        		<td class=\"data\">".$iztapalapa."</td>
			        		<td class=\"data\">".$contreras."</td>
			        		<td class=\"data\">".$milpaalta."</td>
			        		<td class=\"data\">".$obregon."</td>
			        		<td class=\"data\">".$tlahuac."</td>
			        		<td class=\"data\">".$tlalpan."</td>
			        		<td class=\"data\">".$xochimilco."</td>
			        		<td class=\"data\">".$benito."</td>
			        		<td class=\"data\">".$cuautemoc."</td>
			        		<td class=\"data\">".$hidalgo."</td>
			        		<td class=\"data\">".$venustiano."</td>
			        	</tr>";
   	}
 }

}*/



?>
				        		
		
			        </table>
			        
			     <div class="table_explanation">
			        	
						<p class="table_exp_source"><span>Fuente:</span>INEGI, Banco de Información Económica. Cifras preliminares a partir de 2013/03.</p>
			        </div>
		        </div>

		      
		        
</div>


          