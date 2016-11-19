<?php

/**
 * This is the model class for table "person".
 *
 * The followings are the available columns in table 'person':
 * @property string $id_person
 * @property string $name
 * @property string $lastname
 * @property string $birthday
 * @property string $id_gender
 * @property string $id_studies
 * @property string $id_country_current
 * @property string $annual_income
 * @property string $id_civil_estatus
 * @property string $id_country_origin
 */
class person extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_person, name, lastname, birthday, id_gender, id_studies, id_country_current, annual_income, id_civil_estatus, id_country_origin', 'required'),
			array('id_person, id_gender, id_studies, id_country_current, annual_income, id_civil_estatus, id_country_origin', 'length', 'max'=>10),
			array('name, lastname', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_person, name, lastname, birthday, id_gender, id_studies, id_country_current, annual_income, id_civil_estatus, id_country_origin', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_person' => 'Id Person',
			'name' => 'Name',
			'lastname' => 'Lastname',
			'birthday' => 'Birthday',
			'id_gender' => 'Id Gender',
			'id_studies' => 'Id Studies',
			'id_country_current' => 'Id Country Current',
			'annual_income' => 'Annual Income',
			'id_civil_estatus' => 'Id Civil Estatus',
			'id_country_origin' => 'Id Country Origin',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_person',$this->id_person,true);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('lastname',$this->lastname,true);

		$criteria->compare('birthday',$this->birthday,true);

		$criteria->compare('id_gender',$this->id_gender,true);

		$criteria->compare('id_studies',$this->id_studies,true);

		$criteria->compare('id_country_current',$this->id_country_current,true);

		$criteria->compare('annual_income',$this->annual_income,true);

		$criteria->compare('id_civil_estatus',$this->id_civil_estatus,true);

		$criteria->compare('id_country_origin',$this->id_country_origin,true);

		return new CActiveDataProvider('person', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return person the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}