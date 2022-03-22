<?php

/**
 * This is the model class for table "seasons".
 *
 * The followings are the available columns in table 'seasons':
 * @property integer $id
 * @property integer $number
 * @property string $theme
 * @property string $crt_date
 */
class Seasons extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seasons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('number, theme,', 'required'),
			array('number', 'numerical', 'integerOnly'=>true),
			array('theme', 'length', 'max'=>255),
			array('crt_date', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, number, theme, crt_date', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'number' => 'Season Number',
			'theme' => 'Theme',
		
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
		$criteria->compare('number',$this->number);
		$criteria->compare('theme',$this->theme,true);
		$criteria->compare('crt_date',$this->crt_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seasons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	// public function beforeSave(){
	// 	if(parent::beforeSave()){
	// 		if(($this->isNewRecord)) {
	// 			$this->crt_date=date('Y-m-d H:i:s');
	// 			$this->crt_by=Yii::app()->user->id;
	// 			return true;
	// 		}else
	// 		return false;
	// 	}
	// }
}
