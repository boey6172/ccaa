<?php

/**
 * This is the model class for table "athlete".
 *
 * The followings are the available columns in table 'athlete':
 * @property integer $id
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $suffix
 * @property string $birthday
 * @property string $email
 * @property string $street
 * @property string $barangay
 * @property string $city_municipality
 * @property string $province
 * @property string $psa
 * @property string $coe
 * @property string $waiver
 * @property string $cog
 * @property string $medical
 * @property string $gender
 */
class Athlete extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'athlete';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, mname, lname, birthday, email, street, barangay, city_municipality, province, school, event_id, cat_id, season_id, gender, cnum', 'required'),
			array('fname,lname,mname', 'match', 'pattern'=>"/^([ a-zA-Z0-9_-]*)$/", 'message'=>'only letters, number, "-" and "_"'),
			
			array('fname, mname, lname, email, street, barangay, city_municipality, province, psa, coe, waiver, cog, medical', 'length', 'max'=>255),
			array('suffix, event_id, cat_id,', 'length', 'max'=>45),
			array('gender', 'length', 'max'=>12),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, mname, lname, suffix, birthday, email, street, barangay, city_municipality, province, gender,school, season_id, cnum', 'safe', 'on'=>'search'),
			
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
            'School'=>array(self::HAS_ONE, 'School', array( 'id' => 'school' )),
			'Gender'=>array(self::HAS_ONE, 'Gender', array( 'id' => 'gender' )),
			'Seasons'=>array(self::HAS_ONE, 'Seasons', array( 'id' => 'season_id' )),
			'Event'=>array(self::HAS_ONE, 'Event', array( 'id' => 'event_id' )),
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
			'fname' => 'First Name',
			'mname' => 'Middle Name',
			'lname' => 'Last Name',
			'suffix' => 'Suffix',
			'birthday' => 'Birthday',
			'email' => 'Email',
			'street' => 'Street',
			'barangay' => 'Barangay',
			'city_municipality' => 'City Municipality',
			'province' => 'Province',
			'psa' => 'Psa',
			'coe' => 'Coe',
			'waiver' => 'Waiver',
			'cog' => 'Cog',
			'medical' => 'Medical',
			'gender' => 'Gender',
			'school' => 'School',
			'School' => 'School',
			'cnum' => 'Contact No.',
			'cat_id' => 'Category',
			'event_id' => 'Event',

			
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('suffix',$this->suffix,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('barangay',$this->barangay,true);
		$criteria->compare('city_municipality',$this->city_municipality,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('psa',$this->psa,true);
		$criteria->compare('coe',$this->coe,true);
		$criteria->compare('waiver',$this->waiver,true);
		$criteria->compare('cog',$this->cog,true);
		$criteria->compare('medical',$this->medical,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('season_id',$this->season_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getFullName(){
		return $this->fname . " " . $this->mname . " " . $this->lname;
	}

	public function getFullAddress(){
		return $this->street . " " . $this->barangay . " " . $this->city_municipality . " " . $this->province;
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Athlete the static model class
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
