<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_produk_kategori".
 *
 * @property int $id
 * @property string|null $kategori
 * @property string|null $tanggal
 * @property int|null $order
 */
class ProdukKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_produk_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['order'], 'integer'],
            [['kategori'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategori' => 'Kategori',
            'tanggal' => 'Tanggal',
            'order' => 'Order',
        ];
    }
}
