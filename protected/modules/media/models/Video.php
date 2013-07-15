<?php

/**
 * This is the model class for table "{{video}}".
 *
 * The followings are the available columns in table '{{video}}':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $file_name
 * @property string $document
 * @property string $view_count
 * @property string $like_count
 * @property string $dislike_count
 * @property string $created
 * @property string $updated
 * @property integer $category_id
 * @property integer $author_id
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property User $author
 */
class Video extends CActiveRecord {

    public $file;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Video the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{video}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, file_name, document, category_id, author_id', 'required'),
            array('category_id, author_id', 'numerical', 'integerOnly' => true),
            array('title, document', 'length', 'max' => 255),
            array('file_name', 'length', 'max' => 45),
            array('description, view_count, like_count, dislike_count', 'safe'),
            array('file', 'file', 'types' => 'mp4, 3gp, vlf', 'allowEmpty' => true),
            array('file', 'required', 'on' => 'insert'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, description, file_name, document, view_count, like_count, dislike_count, created, updated, category_id, author_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
            'author' => array(self::BELONGS_TO, 'User', 'author_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'file_name' => 'File Name',
            'document' => 'Document',
            'view_count' => 'View Count',
            'like_count' => 'Like Count',
            'dislike_count' => 'Dislike Count',
            'created' => 'Created',
            'updated' => 'Updated',
            'category_id' => 'Category',
            'author_id' => 'Author',
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
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('file_name', $this->file_name, true);
        $criteria->compare('document', $this->document, true);
        $criteria->compare('view_count', $this->view_count, true);
        $criteria->compare('like_count', $this->like_count, true);
        $criteria->compare('dislike_count', $this->dislike_count, true);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('updated', $this->updated, true);
        $criteria->compare('category_id', $this->category_id);
        $criteria->compare('author_id', $this->author_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array(
            'timestamps' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'created',
                'updateAttribute' => 'updated',
                'setUpdateOnCreate' => true,
            ),
        );
    }

    public function getCategoryOptions() {
        return CHtml::listData(Category::model()->findAll(), 'id', 'name');
    }

    public function getCategoryText($category = null) {
        $value = ($category === null) ? $this->category : $category;
        $categoryOptions = $this->getCategoryOptions();
        return isset($categoryOptions[$value]) ?
                $categoryOptions[$value] : "unknown Category ({$value})";
    }

}