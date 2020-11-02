<?php

namespace app\models;

use Yii;
use app\models\Especialidade;

/**
 * This is the model class for table "medico".
 *
 * @property int $medico_id
 * @property string $medico_nome
 * @property string $medico_sexo
 * @property string $medico_crm
 * @property string $medico_cpf
 * @property string|null $medico_email
 * @property int $especialidade_id
 *
 * @property Especialidade $especialidade
 */
class Medico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medico_nome', 'medico_sexo', 'medico_crm', 'medico_cpf', 'especialidade_id'], 'required'],
            [['medico_email'], 'string'],
            [['especialidade_id'], 'default', 'value' => null],
            [['especialidade_id'], 'integer'],
            [['medico_nome'], 'string', 'max' => 100],
            [['medico_sexo'], 'string', 'max' => 1],
            [['medico_crm'], 'string', 'max' => 13],
            [['medico_cpf'], 'string', 'max' => 11],
            [['especialidade_id'], 'exist', 'skipOnError' => true, 'targetClass' => Especialidade::className(), 'targetAttribute' => ['especialidade_id' => 'especialidade_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        //$t = $this->especialidadeDescricao(1);
        return $a = [
            'medico_id' => 'ID',
            'medico_nome' => 'Nome',
            'medico_sexo' => 'Sexo',
            'medico_crm' => 'CRM',
            'medico_cpf' => 'CPF',
            'medico_email' => 'E-mail',
            'especialidade_id' => 'Especialidade',
            'especialidade_descricao' => 'Especialidade'
        ];
    }

    /**
     * Gets query for [[Especialidade]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecialidade()
    {
        return $this->hasOne(Especialidade::className(), ['especialidade_id' => 'especialidade_id']);
    }

}
