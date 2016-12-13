<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog_users}}".
 *
 * @property integer $user_id
 * @property integer $category_id
 * @property integer $status
 * @property string $name
 * @property string $password
 * @property string $salt
 * @property integer $sex
 * @property string $email
 * @property string $telephone
 * @property string $address
 * @property string $reg_ip
 * @property integer $reg_time
 * @property integer $last_login_time
 * @property string $weixinid
 * @property integer $role_flag
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'status', 'name', 'password', 'salt', 'sex', 'email', 'telephone', 'address', 'reg_ip', 'reg_time', 'last_login_time', 'weixinid'], 'required'],
            [['category_id', 'status', 'sex', 'reg_time', 'last_login_time', 'role_flag'], 'integer'],
            [['name', 'telephone'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 32],
            [['salt'], 'string', 'max' => 4],
            [['email'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 100],
            [['reg_ip'], 'string', 'max' => 15],
            [['weixinid'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
            'status' => 'Status',
            'name' => 'Name',
            'password' => 'Password',
            'salt' => 'Salt',
            'sex' => 'Sex',
            'email' => 'Email',
            'telephone' => 'Telephone',
            'address' => 'Address',
            'reg_ip' => 'Reg Ip',
            'reg_time' => 'Reg Time',
            'last_login_time' => 'Last Login Time',
            'weixinid' => 'Weixinid',
            'role_flag' => 'Role Flag',
        ];
    }
}
