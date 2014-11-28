<?php
/* @var $this Ap1ind1JorgeController */
/* @var $model Ap1ind1Jorge */

$this->breadcrumbs=array(
	'Regresar'=>array('index'),
	"Previo"=>array('previo','id'=>$model->id),
	'Gráfico',
);

?>
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
		

		

		
		

		
</div>
<br>
<br>
<br>
<br>
<br>
<script>
/*$(document).ready(function(){
  $("button").click(function(){
    $.getJSON("http://localhost/recm/index.php/api/ap1Ind1Grafico/1",function(result){
      $.each(result, function(i, field){
        $("#div").append(field + " ");
      });
    });
  });
});*/
</script>



  <script type="text/javascript">
		$(document).ready(function() {

	var options = {
		credits: false,
	    chart: {
	        renderTo: 'variacion_itaee',
	        type: 'bar'
	    },
	     title: {
            text: ''
        },
		xAxis: {
			title: {
                text: '',
            },
            
            labels: {
                rotation: -10,
                y: 10
            },
		    categories: [	'Baja California Sur', 
							'Aguascalientes', 
							'Chihuahua', 
							'Guanajuato', 
							'Oaxaca', 
							'México', 
							'Jalisco', 
							'Querétaro', 
							'Nayarit', 
							'MichoacÃ¡n',
							'Baja California', 
							'Veracruz',
							'Hidalgo', 
							'Quintana Roo', 
							'Tamaulipas',
							'Coahuila',
							'Guerrero', 
							'Tlaxcala', 
							'Distrito Federal', 
							'Sonora', 
							'Nuevo LeÃ³n',
							'Colima', 
							'Morelos', 
							'Zacatecas', 
							'Yucatán', 
							'Sinaloa', 
							'Campeche', 
							'San Luis Potosí',
							'Durango', 
							'Puebla',
							'Tabasco',
							'Chiapas']
		},
		yAxis: {
            title: 'Porcentaje',
            tickInterval: 1,
            gridLineWidth: 1,
        },
        scrollbar: {
	    	height: 15
	    },
	    
	    rangeSelector: {
	    	selected: 1
	    },
	    series: [{
				       name: 'Variación % real del ITAEE',
				       color: '#0A64A4',
				       allowPointSelect: true,
				       data: [	7.8,
								6.5,
								5.1,
								4.5,
								4.0,
								3.3,
								3.0,
								2.7,
								2.2,
								1.8,
								1.7,
								1.5,
								1.5,
								1.1,
								1.1,
								1.0,
								1.0,
								1.0,
								0.9,
								0.7,
								0.4,
								0.2,
								0.0,
								-0.2,
								-0.2,
								-0.4,
								-0.4,
								-0.7,
								-1.0,
								-2.1,
								-2.7,
								-4.5]
					}]
				
	}

chart = new Highcharts.Chart(options);
	        
	       
	        });
	        /*
	        
	    chart = new Highcharts.Chart(options);    
	        
      	}); */  
		</script>
 <p class="table_title default">VARIACIÓN % REAL DEL ITAEE DEL TRIMESTRE 2013/03 RESPECTO AL MISMO TRIMESTRE DEL AÑO 2012 POR ENTIDAD FEDERATIVA</p>

   <div class="option_1">
		        	<div id="variacion_itaee">
		        
		        	</div>
		        	<div class="table_explanation">
		        		
				        <p class="table_exp_source"><span>Fuente: </span>INEGI, Banco de Información Económica. Cifras preliminares.</p>
		        	</div>
		        </div> 