<?php

/**
 * This is the model class for table "ap1Ind2a".
 *
 * The followings are the available columns in table 'ap1Ind2a':
 * @property integer $id
 * @property integer $id_periodo
 * @property integer $id_entidad
 * @property double $valor
 * @property string $fecha_reg
 * @property string $fecha_mod
 * @property integer $user_reg
 * @property integer $user_mod
 */
class Ap1Ind2a extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ap1Ind2a';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_periodo, id_entidad, user_reg, user_mod', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('fecha_reg, fecha_mod', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_periodo, id_entidad, valor, fecha_reg, fecha_mod, user_reg, user_mod', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Entidades' => array(self::BELONGS_TO, 'Entidades', 'id_entidad'),
			'Periodos' => array(self::BELONGS_TO, 'Ap1Ind2aHist', 'id_periodo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_periodo' => 'Id Periodo',
			'id_entidad' => 'Id Entidad',
			'valor' => 'Valor',
			'fecha_reg' => 'Fecha Reg',
			'fecha_mod' => 'Fecha Mod',
			'user_reg' => 'User Reg',
			'user_mod' => 'User Mod',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_periodo',$id);
		$criteria->compare('id_entidad',$this->id_entidad);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('fecha_reg',$this->fecha_reg,true);
		$criteria->compare('fecha_mod',$this->fecha_mod,true);
		$criteria->compare('user_reg',$this->user_reg);
		$criteria->compare('user_mod',$this->user_mod);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ap1Ind2a the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
