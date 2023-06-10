<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_produk_images".
 *
 * @property int $id
 * @property int|null $id_produk
 * @property string|null $foto ukuran 1 : 1
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class ProdukImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_produk_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_produk'], 'integer'],
            [['foto'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
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
            'foto' => 'Foto',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
