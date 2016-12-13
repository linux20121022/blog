<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog_article_extend}}".
 *
 * @property integer $content_id
 * @property string $content
 */
class ArticleExtend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_article_extend}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'content_id' => 'Content ID',
            'content' => 'Content',
        ];
    }
}
