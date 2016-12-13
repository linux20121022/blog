<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog_article_category}}".
 *
 * @property integer $category_id
 * @property string $category
 * @property integer $create_user_id
 * @property string $update_time
 * @property string $create_time
 */
class ArticleCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_article_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'create_user_id'], 'required'],
            [['create_user_id'], 'integer'],
            [['update_time', 'create_time'], 'safe'],
            [['category'], 'string', 'max' => 220],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category' => 'Category',
            'create_user_id' => 'Create User ID',
            'update_time' => 'Update Time',
            'create_time' => 'Create Time',
        ];
    }
}
