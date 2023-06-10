<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_produk_packages".
 *
 * @property int $id
 * @property string|null $id_produk bisa lebih dari 1 kategori
 * @property string|null $name
 * @property string|null $label
 * @property string|null $description
 * @property string|null $cara_penggunaan
 * @property string|null $kandungan
 * @property string|null $name_en
 * @property string|null $label_en
 * @property string|null $description_en
 * @property string|null $cara_penggunaan_en
 * @property string|null $kandungan_en
 * @property string|null $image
 * @property string|null $mechine
 * @property string|null $chemical
 * @property int|null $order
 * @property float|null $price
 * @property string|null $time
 * @property int|null $status
 * @property int|null $status_diskon
 * @property int|null $diskon
 * @property string|null $ranting
 * @property string|null $slug
 */
class ProdukPackages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_produk_packages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'cara_penggunaan', 'kandungan', 'description_en', 'cara_penggunaan_en', 'kandungan_en', 'ranting'], 'string'],
            [['order', 'status', 'status_diskon', 'diskon'], 'integer'],
            [['price'], 'number'],
            [['time'], 'safe'],
            [['id_produk', 'name', 'label', 'name_en', 'label_en', 'image', 'mechine', 'chemical', 'slug'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'label' => 'Label',
            'description' => 'Description',
            'cara_penggunaan' => 'Cara Penggunaan',
            'kandungan' => 'Kandungan',
            'name_en' => 'Name En',
            'label_en' => 'Label En',
            'description_en' => 'Description En',
            'cara_penggunaan_en' => 'Cara Penggunaan En',
            'kandungan_en' => 'Kandungan En',
            'image' => 'Image',
            'mechine' => 'Mechine',
            'chemical' => 'Chemical',
            'order' => 'Order',
            'price' => 'Price',
            'time' => 'Time',
            'status' => 'Status',
            'status_diskon' => 'Status Diskon',
            'diskon' => 'Diskon',
            'ranting' => 'Ranting',
            'slug' => 'Slug',
        ];
    }
}
