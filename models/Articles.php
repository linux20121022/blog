<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog_articles}}".
 *
 * @property integer $article_id
 * @property integer $user_id
 * @property integer $category_id
 * @property integer $status
 * @property string $title
 * @property string $desc
 * @property integer $content_id
 * @property string $update_time
 * @property string $create_time
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_articles}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'category_id', 'status', 'title', 'desc', 'content_id'], 'required'],
            [['user_id', 'category_id', 'status', 'content_id'], 'integer'],
            [['update_time', 'create_time'], 'safe'],
            [['title', 'desc'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => 'Article ID',
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
            'status' => 'Status',
            'title' => 'Title',
            'desc' => 'Desc',
            'content_id' => 'Content ID',
            'update_time' => 'Update Time',
            'create_time' => 'Create Time',
        ];
    }
}
