<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attributes}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%status_list}}`
 */
class m220105_173312_create_attributes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attributes}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'type_id' => $this->integer(),
            'status_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `type_id`
        $this->createIndex(
            '{{%idx-attributes-type_id}}',
            '{{%attributes}}',
            'type_id'
        );

        // add foreign key for table `{{%status_list}}`
        $this->addForeignKey(
            '{{%fk-attributes-type_id}}',
            '{{%attributes}}',
            'type_id',
            '{{%attribute_types}}',
            'id',
            'RESTRICT'
        );

        // creates index for column `status_id`
        $this->createIndex(
            '{{%idx-attributes-status_id}}',
            '{{%attributes}}',
            'status_id'
        );

        // add foreign key for table `{{%status_list}}`
        $this->addForeignKey(
            '{{%fk-attributes-status_id}}',
            '{{%attributes}}',
            'status_id',
            '{{%status_list}}',
            'id',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%attribute_types}}`
        $this->dropForeignKey(
            '{{%fk-attributes-type_id}}',
            '{{%attributes}}'
        );

        // drops index for column `type_id`
        $this->dropIndex(
            '{{%idx-attributes-type_id}}',
            '{{%attributes}}'
        );

        // drops foreign key for table `{{%status_list}}`
        $this->dropForeignKey(
            '{{%fk-attributes-status_id}}',
            '{{%attributes}}'
        );

        // drops index for column `status_id`
        $this->dropIndex(
            '{{%idx-attributes-status_id}}',
            '{{%attributes}}'
        );
        $this->dropTable('{{%attributes}}');
    }
}
