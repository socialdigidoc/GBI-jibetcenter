<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_produk_layanan".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $tanggal
 * @property int|null $order
 */
class ProdukLayanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_produk_layanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['order'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'tanggal' => 'Tanggal',
            'order' => 'Order',
        ];
    }
}
