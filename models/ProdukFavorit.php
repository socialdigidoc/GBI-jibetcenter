<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_produk_favorit".
 *
 * @property int $id
 * @property int $id_produk ID Produk
 * @property int|null $id_guest ID User Guest
 * @property int|null $id_user ID User Login
 * @property string|null $tanggal
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class ProdukFavorit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_produk_favorit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_produk'], 'required'],
            [['id_produk', 'id_guest', 'id_user'], 'integer'],
            [['tanggal', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_produk' => 'Id Produk',
            'id_guest' => 'Id Guest',
            'id_user' => 'Id User',
            'tanggal' => 'Tanggal',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getTblProduk() {
        return $this->hasMany(Produk::className(), ['id' => 'id_produk']);
    }
}
