<?php

/**
 * This is the model class for table "achievement".
 *
 * The followings are the available columns in table 'achievement':
 * @property integer $id
 * @property string $season
 * @property string $athlete
 * @property integer $event_id
 * @property integer $cat_id
 * @property string $school
 * @property string $rank
 * @property string $s_achievement
 * @property string $crt_date
 */
class Achievement extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'achievement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('athlete, event_id, cat_id, school, rank, 	season_id ', 'required'),
			array('event_id, cat_id, season_id', 'numerical', 'integerOnly'=>true),
			array('athlete, school, rank, s_achievement', 'length', 'max'=>255),
			//array('crt_date', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, athlete, event_id, cat_id, school, rank, s_achievement, crt_date, season_id', 'safe', 'on'=>'search'),
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
			'School'=>array(self::HAS_ONE, 'School', array( 'id' => 'school' )),
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
			'athlete' => 'Name of Athlete',
			'event_id' => 'Event',
			'cat_id' => 'Category',
			'school' => 'School',
			'rank' => 'Rank',
			's_achievement' => 'Special Achievement',
			'season_id' => 'Season',
			'crt_date' => 'Create Date',
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
		$criteria->compare('season_id',$this->season_id,true);
		$criteria->compare('athlete',$this->athlete,true);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('rank',$this->rank,true);
		$criteria->compare('s_achievement',$this->s_achievement,true);
		$criteria->compare('crt_date',$this->crt_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Achievement the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
