<?php

/**
 * This is the model class for table "student_course".
 *
 * The followings are the available columns in table 'student_course':
 * @property integer $id_student
 * @property integer $id_course
 * @property string $grade
 * @property integer $id_profesor
 * @property string $status
 * @property integer $id_student_course
 */
class student_course extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_student, id_course, id_profesor, status', 'required'),
			array('id_student, id_course, id_profesor', 'numerical', 'integerOnly'=>true),
			array('grade', 'length', 'max'=>11),
			array('status', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_student, id_course, grade, id_profesor, status, id_student_course', 'safe', 'on'=>'search'),
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
			'id_student' => 'Id Student',
			'id_course' => 'Id Course',
			'grade' => 'Grade',
			'id_profesor' => 'Id Profesor',
			'status' => 'Status',
			'id_student_course' => 'Id Student Course',
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

		$criteria->compare('id_student',$this->id_student);

		$criteria->compare('id_course',$this->id_course);

		$criteria->compare('grade',$this->grade,true);

		$criteria->compare('id_profesor',$this->id_profesor);

		$criteria->compare('status',$this->status,true);

		$criteria->compare('id_student_course',$this->id_student_course);

		return new CActiveDataProvider('student_course', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return student_course the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}