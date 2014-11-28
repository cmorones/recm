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
	        renderTo: 'sector_itae',
	        type: 'column'
	    },
	    title: {
	    	text: ''
		},
		
		xAxis: {
			title: {
                text: 'Periodo'
            },
            labels: {
            	rotation: -50,
                y: 10
            },
            
		    categories: [	
							'2012/01',
							'2012/02',
							'2012/03',
							'2012/04',
							'2013/01',
							'2013/02',
							'2013/03',
							'2013/04',
							'2014/01',
							'2014/02',
							'2014/03']
		},
		yAxis: {
            title: '',
            tickInterval: 10,
            gridLineWidth: 1,
            stackLabels: {
                    enabled: false
            }
        },
         tooltip: {
            formatter: function() {
            	console.log('Series name: ' + this.series.name + ' stack: ' + this.series.stack + ' type: ' + this.series.type);
            	var output = '<b>'+ this.x +'</b><br/>'+
                    		this.series.name +': '+ this.y;
                
                if(this.series.type != 'spline') {
	                output += '<br/>'+
                    		'Total: '+ this.point.stackTotal;
                }
                    
                return output;
            }
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: false
                }
            }
        },
	    series: [{
				       name: 'Terciario',
				       color: '#8A6642',
				       allowPointSelect: true,
				       data: [	
								4.369026028,
								2.684546224,
								4.675895446,
								5.178786541,
								5.252813976,
								4.356588104,
								3.399100534,
								5.659573956,
								1.684236409,
								0.835894073,
								2.140102893]
					},
					{
				       name: 'Secundario',
				       color: '#C6A664',
				       allowPointSelect: true,
				       data: [	-2.97560903,
								4.058011927,
								3.957961741,
								0.023535578,
								7.162909955,
								-1.463125568,
								1.953221388,
								-0.257207691,
								-8.762668107,
								-2.300352751,
								-7.980246509
							  ]
					},
					{
				       name: 'Primario',
				       color: '#FFA420',
				       allowPointSelect: true,
				       data: [	
								4.801918826,
								12.69338155,
								8.944326773,
								23.17795019,
								-0.273512562,
								-7.74905068,
								-7.44041311,
								10.67608523,
								-31.00441625,
								-6.309108792,
								-6.497097988
							]
					}]
				
	}

chart = new Highcharts.Chart(options);
	        
	       
	        });
	        /*
	        
	    chart = new Highcharts.Chart(options);    
	        
      	}); */  
		</script>


   <div class="option_1">
		        	<div id="sector_itae">
		        
		        	</div>
		        	<div class="table_explanation">
		        		<p class="table_exp_title">Nota: Milpa Alta aparece con un valor de 429,646.</p>
				        <p class="table_exp_source"><span>Fuente: </span>Elaboración con base en datos de INEGI, Censo Económico 2009</p>
		        	</div>
		        </div> 