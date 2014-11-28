  <?php
/* @var $this Ap1ind1JorgeController */
/* @var $model Ap1ind1Jorge */

$this->breadcrumbs=array(
	'Regresar'=>array('index'),
	"Previo"=>array('previo','id'=>$model->id),
	'Gráfico',
);

?>

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
            renderTo: 'hist_itae',
            type: 'spline'
        },
        title: {
            text: 'HISTÓRICO ITAEE, IGAE Y PIB NACIONAL'
        },
       /* subtitle: {
            text: 'Source: WorldClimate.com'
        },*/
        xAxis: {
            categories: ['2012/3', '2012/4', '2013/1', '2013/2', '2013/3', '2013/4',
                '2014/1', '2014/2', '2014/3', '2014/4', '2014/1', '2014/2']
        },
        yAxis: {
            title: {
                text: 'Cantidad'
            },
            labels: {
                formatter: function () {
                    return this.value + '1';
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'PIB',
            marker: {
                symbol: 'square'
            },
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
                y: 26.5,
                marker: {
                    symbol: 'url(http://www.highcharts.com/demo/gfx/sun.png)'
                }
            }, 23.3, 18.3, 13.9, 9.6]

        }, {
            name: 'IGAE',
            marker: {
                symbol: 'diamond'
            },
            data: [{
                y: 3.9,
                marker: {
                    symbol: 'url(http://www.highcharts.com/demo/gfx/snow.png)'
                }
            }, 4.2, 5.7, 8.5, 12.9, 15.2, 12.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        },
        {
            name: 'ITAEE',
            marker: {
                symbol: 'triangle'
            },
            data: [{
                y: 4.8,
                marker: {
                    symbol: 'url(http://www.highcharts.com/demo/gfx/sun.png)'
                }
            }, 3, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }
        ]
				
	}


	        	chart = new Highcharts.Chart(options);
	        
	        
	       
	        });
	        /*
	        
	    chart = new Highcharts.Chart(options);    
	        
      	}); */  
		</script>


   <div class="option_1">
		        	<div id="hist_itae">
		        
		        	</div>
		        	<div class="table_explanation">
		        		<p class="table_exp_title">Nota: Milpa Alta aparece con un valor de 429,646.</p>
				        <p class="table_exp_source"><span>Fuente: </span>Elaboración con base en datos de INEGI, Censo Económico 2009</p>
		        	</div>
		        </div> 