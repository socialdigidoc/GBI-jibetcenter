<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_guest".
 *
 * @property int $id
 * @property string|null $ip
 * @property string|null $tanggal
 * @property string|null $http_user_agent
 * @property string|null $md5_ip_browser
 * @property string|null $session_id
 * @property string $updated_at
 * @property string $created_at
 */
class Guest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_guest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'updated_at', 'created_at'], 'safe'],
            [['http_user_agent', 'md5_ip_browser', 'session_id'], 'string'],
            [['ip'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'tanggal' => 'Tanggal',
            'http_user_agent' => 'Http User Agent',
            'md5_ip_browser' => 'Md 5 Ip Browser',
            'session_id' => 'Session ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
