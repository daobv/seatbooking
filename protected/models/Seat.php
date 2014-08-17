<?php

/**
 * This is the model class for table "seat".
 *
 * The followings are the available columns in table 'seat':
 * @property integer $id
 * @property string $row
 * @property integer $number
 * @property integer $floor
 * @property integer $customer
 * @property integer $price_id
 */
class Seat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('row, number, floor, customer, price_id', 'required'),
			array('number, floor, customer, price_id', 'numerical', 'integerOnly'=>true),
			array('row', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, row, number, floor, customer, price_id', 'safe', 'on'=>'search'),
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
			'row' => 'Row',
			'number' => 'Number',
			'floor' => 'Floor',
			'customer' => 'Customer',
			'price_id' => 'Price',
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
		$criteria->compare('row',$this->row,true);
		$criteria->compare('number',$this->number);
		$criteria->compare('floor',$this->floor);
		$criteria->compare('customer',$this->customer);
		$criteria->compare('price_id',$this->price_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
