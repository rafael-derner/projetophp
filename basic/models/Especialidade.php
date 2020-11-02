<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "especialidade".
 *
 * @property string $especialidade_sigla
 * @property int $especialidade_id
 * @property string $especialidade_descricao
 *
 * @property Medico[] $medicos
 */

class Especialidade extends \yii\db\ActiveRecord
{

    public $foo;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'especialidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['especialidade_sigla', 'especialidade_descricao'], 'required'],
            [['especialidade_sigla'], 'string', 'max' => 5],
            [['especialidade_descricao'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'especialidade_sigla' => 'Sigla',
            //'especialidade_id' => 'Especialidade ID',
            'especialidade_descricao' => 'Descrição',
        ];
    }

    /**
     * Gets query for [[Medicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicos()
    {
        return $this->hasMany(Medico::className(), ['especialidade_id' => 'especialidade_id']);
    }

}
