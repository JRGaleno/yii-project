<?php

/**
 * This is the model class for table "person".
 *
 * The followings are the available columns in table 'person':
 * @property integer $id_person
 * @property string $name
 * @property string $lastname
 * @property string $role
 * @property string $user
 * @property string $pass
 * @property string $birthday
 * @property integer $id_gender
 * @property integer $id_studies
 * @property integer $id_country_current
 * @property integer $id_civil_estatus
 * @property integer $id_country_origin
 * @property string $status
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
			array('name, lastname, role, user, pass, birthday, id_gender, id_studies, id_country_current, id_civil_estatus, id_country_origin', 'required'),
			array('id_gender, id_studies, id_country_current, id_civil_estatus, id_country_origin', 'numerical', 'integerOnly'=>true),
			array('name, lastname, user, pass', 'length', 'max'=>50),
			array('role, status', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_person, name, lastname, role, user, pass, birthday, id_gender, id_studies, id_country_current, id_civil_estatus, id_country_origin, status', 'safe', 'on'=>'search'),
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
			'role' => 'Role',
			'user' => 'User',
			'pass' => 'Pass',
			'birthday' => 'Birthday',
			'id_gender' => 'Id Gender',
			'id_studies' => 'Id Studies',
			'id_country_current' => 'Id Country Current',
			'id_civil_estatus' => 'Id Civil Estatus',
			'id_country_origin' => 'Id Country Origin',
			'status' => 'Status',
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

		$criteria->compare('id_person',$this->id_person);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('lastname',$this->lastname,true);

		$criteria->compare('role',$this->role,true);

		$criteria->compare('user',$this->user,true);

		$criteria->compare('pass',$this->pass,true);

		$criteria->compare('birthday',$this->birthday,true);

		$criteria->compare('id_gender',$this->id_gender);

		$criteria->compare('id_studies',$this->id_studies);

		$criteria->compare('id_country_current',$this->id_country_current);

		$criteria->compare('id_civil_estatus',$this->id_civil_estatus);

		$criteria->compare('id_country_origin',$this->id_country_origin);

		$criteria->compare('status',$this->status,true);

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