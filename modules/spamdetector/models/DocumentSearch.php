<?php

namespace app\modules\spamdetector\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\spamdetector\models\Document;

/**
 * DocumentSearch represents the model behind the search form about `app\modules\spamdetector\models\Document`.
 */
class DocumentSearch extends Document
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['subject', 'from', 'body', 'class'], 'safe'],
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
        $query = Document::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'from', $this->from])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'class', $this->class]);

        return $dataProvider;
    }
}
