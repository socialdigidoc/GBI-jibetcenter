<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_produk".
 *
 * @property int $id
 * @property string|null $id_kategori bisa lebih dari 1 kategori
 * @property int|null $id_layanan
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
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order', 'status', 'status_diskon', 'diskon'], 'integer'],
            [['description', 'cara_penggunaan', 'kandungan', 'description_en', 'cara_penggunaan_en', 'kandungan_en', 'ranting', 'for', 'skin'], 'string'],
            [['price'], 'number'],
            [['id_kategori','id_layanan','time'], 'safe'],
            [['name', 'label', 'name_en', 'label_en', 'mechine', 'chemical', 'slug'], 'string', 'max' => 255],
            [['description','name','image','id_kategori','id_layanan','cara_penggunaan','for','skin'], 'required'],
            [['image'], 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 1080*1080],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kategori' => 'Kategori',
            'id_layanan' => 'Skin Solution',
            'name' => 'Name',
            'label' => 'Label',
            'description' => 'Description',
            'cara_penggunaan' => 'How to Use',
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
            'price' => 'Harga',
            'time' => 'Time',
            'status' => 'Status',
            'status_diskon' => 'Status Diskon',
            'diskon' => 'Diskon',
            'ranting' => 'Ranting',
            'slug' => 'Slug',
            'for' => 'For',
            'skin' => 'Skin',
        ];
    }
    
    public function getArray()
    {
        return explode(',', $this->id_kategori);
    }

    public function setArray(array $value)
    {
        $this->id_kategori = implode(',', $value);
    }

      
    public function getKategori()
    {
        return $this->hasOne(ProdukKategori::className(), ['id' => 'id_kategori']);
    }
    
    public function getLayanan()
    {
        return $this->hasOne(ProdukLayanan::className(), ['id' => 'id_layanan']);
    }

    public function getTblProdukFavorit() {
        return $this->hasMany(ProdukFavorit::className(), ['id_produk' => 'id']);
    }

}
