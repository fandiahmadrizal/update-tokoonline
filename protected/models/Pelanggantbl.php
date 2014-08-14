<?php

/**
 * This is the model class for table "pelanggantbl".
 *
 * The followings are the available columns in table 'pelanggantbl':
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $email
 * @property string $telepon
 * @property string $username
 * @property string $password
 */
class Pelanggantbl extends CActiveRecord
{
	protected function afterValidate() {
    parent::afterValidate();
     $this->password = $this->result($this->password);
	}
        
	public function result($value)
	{
		return ($value);
	}
	public function tableName()
	{
		return 'pelanggantbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, email, telepon, username, password', 'required'),
			array('nama', 'length', 'max'=>35),
			array('telepon', 'length', 'max'=>25),
			array('username', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, alamat, email, telepon, username, password', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'email' => 'Email',
			'telepon' => 'Telepon',
			'username' => 'Username',
			'password' => 'Password',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pelanggantbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
