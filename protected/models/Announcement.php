<?php

/**
 * This is the model class for table "announcement".
 *
 * The followings are the available columns in table 'announcement':
 * @property integer $id
 * @property string $description
 * @property string $highlight
 * @property string $pic
 * @property integer $season_id
 * @property integer $event_id
 * @property integer $cat_id
 * @property string $crt_by
 * @property string $crt_date
 */
class Announcement extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'announcement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, highlight, season_id, event_id, cat_id', 'required'),
			array('season_id, event_id, cat_id', 'numerical', 'integerOnly'=>true),
			array('description, highlight, pic', 'length', 'max'=>255),
			array('crt_by, crt_date', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, description, highlight, pic, season_id, event_id, cat_id, crt_by, crt_date', 'safe', 'on'=>'search'),
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
			'description' => 'Description',
			'highlight' => 'Highlight Title',
			'pic' => 'Picture',
			'season_id' => 'Season',
			'event_id' => 'Event',
			'cat_id' => 'Category',
			'crt_by' => 'Crt By',
			'crt_date' => 'Crt Date',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('highlight',$this->highlight,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('season_id',$this->season_id);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('crt_by',$this->crt_by,true);
		$criteria->compare('crt_date',$this->crt_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Announcement the static model class
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
