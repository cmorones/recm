<?php



class Api2Controller extends Controller {

public function actionAp1Ind2a($id){

$this->layout=false;

$resultado = Ap1Ind2a::model()->findAll((array(
    'condition'=>'id_periodo='.$id.'',
    'order'=>'id'
	)));

foreach ($resultado as $key => $row) {

	$sql = "SELECT nombre from entidades where id=$row[id_entidad]"; 
	$entidad = Yii::app()->db->createCommand($sql)->queryRow();

			if( !isset($json["informe"]['estado'][$entidad["nombre"]]) ): 
						$json["informe"]['estado'][$entidad["nombre"]] = array(
						'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
						
			          	);

			endif;
}


			header('Content-type: application/json');  
			echo json_encode($json);  
			Yii::app()->end(); 
		}


public function actionAp1Ind2aGrafico($id){

$this->layout=false;

/*$resultado = Ap1Ind1::model()->findAll((array(
  //  'condition'=>'id_periodo=2',
    'order'=>'actividad'
	)));*/

/*
					['Distrito Federal ', 17.10],
                    ['Estado de MÃ©xico',9.10],
                    ['Nuevo LeÃ³n',7.40],
                    ['Jalisco',6.20],
                    ['Veracruz',5.20],
                    ['Resto de las entidades',55]
*/

$json = array(
			array('Distrito Federal', 17.10),
			array('Estado de México',9.10),
			array('Nuevo León',7.40),
			array('Jalisco',6.20),
			array('Veracruz',5.20),
			array('Resto de las entidades',55),
									
	); 
/*foreach ($resultado as $key => $row) {

	    $resultado2 = Delegaciones::model()->findAll((array(

		    'order'=>'id'
			)));


		foreach ($resultado2 as $key2 => $row2) {

			if( !isset($json["informe"][$row["actividad"]][$row2["id"]])): 
			$json["informe"][$row["actividad"]][$row2["id"]] = array(
			
			'valor'=> 0,
		
          	);
	   		 endif;

	   		 if($json["informe"][$row["actividad"]][$row["municipio"]]): 
			$json["informe"][$row["actividad"]][$row["municipio"]] = array(
			
			'valor'=> $row["valor"],
		
          	);
	    endif;	

		}


		} */ 


			header('Content-type: application/json');  
			echo json_encode($json, JSON_NUMERIC_CHECK);
			Yii::app()->end(); 
		}


	}