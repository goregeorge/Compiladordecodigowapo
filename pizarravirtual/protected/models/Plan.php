<?php

/**
 * This is the model class for table "plan".
 *
 * The followings are the available columns in table 'plan':
 * @property integer $id
 * @property string $fecha
 * @property integer $folio
 * @property integer $idProyecto
 * @property integer $idTutor
 *
 * The followings are the available model relations:
 * @property Usuario $idTutor0
 * @property Proyecto $idProyecto0
 * @property PlanUsuario[] $planUsuarios
 */
class Plan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, folio, idProyecto, idTutor', 'required'),
			array('folio, idProyecto, idTutor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, folio, idProyecto, idTutor', 'safe', 'on'=>'search'),
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
			'idTutor0' => array(self::BELONGS_TO, 'Usuario', 'idTutor'),
			'idProyecto0' => array(self::BELONGS_TO, 'Proyecto', 'idProyecto'),
			'alumnos' => array(self::MANY_MANY, 'Usuario', 'plan_usuario(idPlan, idUsuario)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'folio' => 'Folio',
			'idProyecto' => 'Id Proyecto',
			'idTutor' => 'Id Tutor',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('folio',$this->folio);
		$criteria->compare('idProyecto',$this->idProyecto);
		$criteria->compare('idTutor',$this->idTutor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
