<?php

/**
 * This is the model class for table "{{registrasi}}".
 *
 * The followings are the available columns in table '{{registrasi}}':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $passport_num
 * @property string $job_title
 * @property string $media_name
 * @property string $company_address
 * @property string $company_desc
 * @property string $email_address
 * @property string $mobile_num
 * @property string $photo_graph
 * @property string $letter_of_assignment
 */
class Registrasi extends CActiveRecord {

    public $verifyCode;
    public $is_passport_valid;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Registrasi the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{registrasi}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name, last_name, passport_num, job_title, media_name, company_address, company_desc, email_address, mobile_num', 'required'),
            array('first_name, last_name, passport_num, job_title, media_name, email_address, mobile_num, photo_graph, letter_of_assignment', 'length', 'max' => 255),
            array('verifyCode', 'captcha'),
            array('letter_of_assignment', 'file', 'types' => 'pdf', 'allowEmpty' => true),
            array('photo_graph', 'file', 'types' => 'jpg, png, jpeg', 'allowEmpty' => true),
            array('photo_graph, letter_of_assignment', 'required', 'on' => 'insert'),
            array('email_address', 'email'), // model rules
            array('is_passport_valid', 'compare', 'compareValue' => 1, 'message' => 'Please ensure that your passport valid for at least 6 months prior to the date of entry into Indonesia and must have at least 2 blank page in the book.'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, first_name, last_name, passport_num, job_title, media_name, company_address, company_desc, email_address, mobile_num, photo_graph, letter_of_assignment', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'passport_num' => 'Passport Num',
            'job_title' => 'Job Title',
            'media_name' => 'Media Name',
            'company_address' => 'Company Address',
            'company_desc' => 'Company Desc',
            'email_address' => 'Email Address',
            'mobile_num' => 'Mobile Num',
            'photo_graph' => 'Photo Graph',
            'letter_of_assignment' => 'Letter Of Assignment',
            'is_passport_valid' => 'Please ensure that your passport valid for at least 6 months prior to the date of entry into Indonesia and must have at least 2 blank page in the book.'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('passport_num', $this->passport_num, true);
        $criteria->compare('job_title', $this->job_title, true);
        $criteria->compare('media_name', $this->media_name, true);
        $criteria->compare('company_address', $this->company_address, true);
        $criteria->compare('company_desc', $this->company_desc, true);
        $criteria->compare('email_address', $this->email_address, true);
        $criteria->compare('mobile_num', $this->mobile_num, true);
        $criteria->compare('photo_graph', $this->photo_graph, true);
        $criteria->compare('letter_of_assignment', $this->letter_of_assignment, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}