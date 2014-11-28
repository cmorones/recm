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

public function actionAp1Ind2b($id){

$this->layout=false;

$resultado = Ap1Ind2b::model()->findAll((array(
    'condition'=>'id_periodo='.$id.'',
    'order'=>'id'
	)));

			foreach ($resultado as $key => $row) {

				$sql = "SELECT nombre from entidades where id=$row[id_entidad]"; 
				$entidad = Yii::app()->db->createCommand($sql)->queryRow();

						if( !isset($json["informe"]['anio'][$row["anio"]]) ): 
									$json["informe"]['anio'][$row["anio"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'sector'=>array(),
									
						          	);

						endif;
						if( !isset($json["informe"]['anio'][$row["anio"]]['sector'][$row["id_sector"]]) ): 
									$json["informe"]['anio'][$row["anio"]]['sector'][$row["id_sector"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'entidad'=>array(),
									
						          	);

						endif;

						if( !isset($json["informe"]['anio'][$row["anio"]]['sector'][$row["id_sector"]]['entidad'][$row["id_entidad"]]) ): 
									$json["informe"]['anio'][$row["anio"]]['sector'][$row["id_sector"]]['entidad'][$row["id_entidad"]] = array(
									'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									
									
						          	);

						endif;
			}


			header('Content-type: application/json');  
			echo json_encode($json);  
			Yii::app()->end(); 
}


public function actionAp1Ind4as($id){  //SERIES ORIGINALES

$this->layout=false;

$resultado = Ap1Ind4a::model()->findAll((array(
    'condition'=>'id_periodo='.$id.' and tipo_serie=1',
    'order'=>'id'
	)));

			foreach ($resultado as $key => $row) {


						if( !isset($json["info"]['anio'][$row["anio"]]) ): 
									$json["info"]['anio'][$row["anio"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'trim'=>array(),
									
						          	);

						endif;

							if( !isset($json["info"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]]) ): 
									$json["info"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'total'=>round($row["total_act"], 2),
									'vp'=>round($row["vp"], 2),
									
						          	);

						endif;
						
			}


			header('Content-type: application/json');  
			echo json_encode($json);  
			Yii::app()->end(); 
}

public function actionAp1Ind4ad($id){  //SERIES ORIGINALES

$this->layout=false;

$resultado = Ap1Ind4a::model()->findAll((array(
    'condition'=>'id_periodo='.$id.' and tipo_serie=2',
    'order'=>'id'
	)));

			foreach ($resultado as $key => $row) {


						if( !isset($json["info"]['anio'][$row["anio"]]) ): 
									$json["info"]['anio'][$row["anio"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'trim'=>array(),
									
						          	);

						endif;

							if( !isset($json["info"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]]) ): 
									$json["info"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'total'=>round($row["total_act"], 2),
									'vp'=>round($row["vp"], 2),
									
						          	);

						endif;
						
			}


			header('Content-type: application/json');  
			echo json_encode($json);  
			Yii::app()->end(); 
}


public function actionAp1Ind4b($id){

$this->layout=false;

$resultado = Ap1Ind4b::model()->findAll((array(
    'condition'=>'id_periodo='.$id.' and anio=2014 and id_trimestre=2',
    'order'=>'id'
	)));

			foreach ($resultado as $key => $row) {

				$sql = "SELECT nombre from sectores where id=$row[id_sector]"; 
				$sector = Yii::app()->db->createCommand($sql)->queryRow();

				
						if( !isset($json["informe"]['anio'][$row["anio"]]) ): 
									$json["informe"]['anio'][$row["anio"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'trim'=>array(),
									
						          	);

						endif;

						if( !isset($json["informe"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]]) ): 
									$json["informe"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'sector'=>array(),
									
						          	);

						endif;

						if( !isset($json["informe"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]]['sector'][$sector["nombre"]]) ): 
									$json["informe"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]]['sector'][$sector["nombre"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'valor'=>round($row["valor"], 1),
									'vp'=>round($row["vp"], 1),
									
						          	);

						endif;
						
			}


			header('Content-type: application/json');  
			echo json_encode($json);  
			Yii::app()->end(); 
			}



public function actionAp1Ind4c($id){

$this->layout=false;

$resultado = Ap1Ind4c::model()->findAll((array(
    'condition'=>'id_periodo='.$id.'',
    'order'=>'id'
	)));

			foreach ($resultado as $key => $row) {

			
				
						if( !isset($json["informe"]['anio'][$row["anio"]]) ): 
									$json["informe"]['anio'][$row["anio"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'trim'=>array(),
									
						          	);

						endif;

						if( !isset($json["informe"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]]) ): 
									$json["informe"]['anio'][$row["anio"]]['trim'][$row["id_trimestre"]] = array(
									//'valor'=> round($row["valor"], 1, PHP_ROUND_HALF_EVEN),
									'pib'=>round($row["pib"], 2),
									'igae'=>round($row["igae"], 2),
									'itaee'=>round($row["itaee"], 2),
									
						          	);

						endif;

						
						
			}


			header('Content-type: application/json');  
			echo json_encode($json);  
			Yii::app()->end(); 
			}



	}