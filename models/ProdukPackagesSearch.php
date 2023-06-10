<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProdukPackages;

/**
 * ProdukPackagesSearch represents the model behind the search form about `app\models\ProdukPackages`.
 */
class ProdukPackagesSearch extends ProdukPackages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'order', 'status', 'status_diskon', 'diskon'], 'integer'],
            [['id_produk', 'name', 'label', 'description', 'cara_penggunaan', 'kandungan', 'name_en', 'label_en', 'description_en', 'cara_penggunaan_en', 'kandungan_en', 'image', 'mechine', 'chemical', 'time', 'ranting', 'slug'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProdukPackages::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'order' => $this->order,
            'price' => $this->price,
            'time' => $this->time,
            'status' => $this->status,
            'status_diskon' => $this->status_diskon,
            'diskon' => $this->diskon,
        ]);

        $query->andFilterWhere(['like', 'id_produk', $this->id_produk])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'label', $this->label])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'cara_penggunaan', $this->cara_penggunaan])
            ->andFilterWhere(['like', 'kandungan', $this->kandungan])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'label_en', $this->label_en])
            ->andFilterWhere(['like', 'description_en', $this->description_en])
            ->andFilterWhere(['like', 'cara_penggunaan_en', $this->cara_penggunaan_en])
            ->andFilterWhere(['like', 'kandungan_en', $this->kandungan_en])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'mechine', $this->mechine])
            ->andFilterWhere(['like', 'chemical', $this->chemical])
            ->andFilterWhere(['like', 'ranting', $this->ranting])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
