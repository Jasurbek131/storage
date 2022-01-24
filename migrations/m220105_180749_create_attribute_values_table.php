<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attribute_values}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%attributes}}`
 * - `{{%status_list}}`
 */
class m220105_180749_create_attribute_values_table extends Migration
{
    /**
     * {@inheritdoc}
     * @throws \yii\base\Exception
     */
    public function safeUp()
    {
        $this->createTable('{{%attribute_values}}', [
            'id' => $this->primaryKey(),
            'attribute_id' => $this->integer(),
            'value' => $this->string(),
            'data' => $this->json(),
            'status_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `attribute_id`
        $this->createIndex(
            '{{%idx-attribute_values-attribute_id}}',
            '{{%attribute_values}}',
            'attribute_id'
        );

        // add foreign key for table `{{%attributes}}`
        $this->addForeignKey(
            '{{%fk-attribute_values-attribute_id}}',
            '{{%attribute_values}}',
            'attribute_id',
            '{{%attributes}}',
            'id',
            'CASCADE'
        );

        // creates index for column `status_id`
        $this->createIndex(
            '{{%idx-attribute_values-status_id}}',
            '{{%attribute_values}}',
            'status_id'
        );

        // add foreign key for table `{{%status_list}}`
        $this->addForeignKey(
            '{{%fk-attribute_values-status_id}}',
            '{{%attribute_values}}',
            'status_id',
            '{{%status_list}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%attributes}}`
        $this->dropForeignKey(
            '{{%fk-attribute_values-attribute_id}}',
            '{{%attribute_values}}'
        );

        // drops index for column `attribute_id`
        $this->dropIndex(
            '{{%idx-attribute_values-attribute_id}}',
            '{{%attribute_values}}'
        );

        // drops foreign key for table `{{%status_list}}`
        $this->dropForeignKey(
            '{{%fk-attribute_values-status_id}}',
            '{{%attribute_values}}'
        );

        // drops index for column `status_id`
        $this->dropIndex(
            '{{%idx-attribute_values-status_id}}',
            '{{%attribute_values}}'
        );

        $this->dropTable('{{%attribute_values}}');
    }
}
