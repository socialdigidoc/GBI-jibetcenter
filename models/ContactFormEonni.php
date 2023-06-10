<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_contact_form".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $telp
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $time
 * @property string|null $ip
 * @property string|null $session_id
 */
class ContactFormEonni extends \yii\db\ActiveRecord
{
    public $verifyCode;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_contact_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['time'], 'safe'],
            [['name', 'telp', 'subject', 'ip', 'session_id'], 'string', 'max' => 255],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'telp' => 'Telp',
            'subject' => 'Subject',
            'body' => 'Body',
            'time' => 'Time',
            'ip' => 'Ip',
            'session_id' => 'Session ID',
            'verifyCode' => 'Verification Code',
        ];
    }
}
