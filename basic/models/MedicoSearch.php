<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Medico;

/**
 * MedicoSearch represents the model behind the search form of `app\models\Medico`.
 */
class MedicoSearch extends Medico
{

    public $especialidade;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medico_id', 'especialidade_id'], 'integer'],
            [['medico_nome', 'medico_sexo', 'medico_crm', 'medico_cpf', 'medico_email', 'especialidade'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Medico::find();

        // add conditions that should always apply here:
        $query->joinWith(['especialidade']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['especialidade'] = [
            'asc' => ['especialidade.especialidade_descricao' => SORT_ASC],
            'desc' => ['especialidade.especialidade_descricao' => SORT_DESC]
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'medico_id' => $this->medico_id,
            'especialidade_id' => $this->especialidade_id,
        ]);

        $query->andFilterWhere(['ilike', 'medico_nome', $this->medico_nome])
            ->andFilterWhere(['ilike', 'medico_sexo', $this->medico_sexo])
            ->andFilterWhere(['ilike', 'medico_crm', $this->medico_crm])
            ->andFilterWhere(['ilike', 'medico_cpf', $this->medico_cpf])
            ->andFilterWhere(['ilike', 'medico_email', $this->medico_email])
            ->andFilterWhere(['like', 'especialidade.especialidade_descricao', $this->especialidade]);

        return $dataProvider;
    }
}
