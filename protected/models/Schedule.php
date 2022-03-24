<?php

/**
 * This is the model class for table "schedule".
 *
 * The followings are the available columns in table 'schedule':
 * @property integer $id
 * @property integer $event_id
 * @property string $datetime_sched
 * @property integer $cat_id
 * @property integer $school_1
 * @property integer $school_2
 */
class Schedule extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'schedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, cat_id, school_1, school_2,season_id,time,datetime_sched, venue', 'required'),
			array('event_id, cat_id, school_1, school_2', 'numerical', 'integerOnly'=>true),
			// array('datetime_sched', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, event_id, datetime_sched, cat_id, school_1, school_2, season_id, time, venue', 'safe', 'on'=>'search'),
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
			'Event'=>array(self::HAS_ONE, 'Event', array( 'id' => 'event_id' )),
			'Seasons'=>array(self::HAS_ONE, 'Seasons', array( 'id' => 'season_id' )),
			'School_1'=>array(self::HAS_ONE, 'School', array( 'id' => 'school_1' )),
			'School_2'=>array(self::HAS_ONE, 'School', array( 'id' => 'school_2' )),
			'Category'=>array(self::HAS_ONE, 'Category', array( 'id' => 'cat_id' )),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'event_id' => 'Event',
			'datetime_sched' => 'Datetime Sched',
			'time' => 'Time',
			'cat_id' => 'Category',
			'school_1' => 'School 1',
			'school_2' => 'School 2',
			'season_id' => 'Season',

			
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
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('datetime_sched',$this->datetime_sched,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('school_1',$this->school_1);
		$criteria->compare('school_2',$this->school_2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getVs(){
		return $this->School_1->name . " " . " " . "VS" . " " . " " . $this->School_2->name;
	}
	public function getDateTime(){
		return $this->datetime_sched . " " . $this->time;
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Schedule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave(){
		if(parent::beforeSave()){
			if(($this->isNewRecord)) {
				$this->crt_date=date('Y-m-d H:i:s');
				$this->crt_by=Yii::app()->user->id;
				return true;
			}
		
			return true;
		}else{
			return false;
		}
	}
}
