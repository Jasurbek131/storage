<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attribute_types}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%status_list}}`
 */
class m220105_172536_create_attribute_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attribute_types}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'code' => $this->string(),
            'type' => $this->integer(),
            'status_id' => $this->integer(),
        ]);

        // creates index for column `status_id`
        $this->createIndex(
            '{{%idx-attribute_types-status_id}}',
            '{{%attribute_types}}',
            'status_id'
        );

        // add foreign key for table `{{%status_list}}`
        $this->addForeignKey(
            '{{%fk-attribute_types-status_id}}',
            '{{%attribute_types}}',
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
        // drops foreign key for table `{{%status_list}}`
        $this->dropForeignKey(
            '{{%fk-attribute_types-status_id}}',
            '{{%attribute_types}}'
        );

        // drops index for column `status_id`
        $this->dropIndex(
            '{{%idx-attribute_types-status_id}}',
            '{{%attribute_types}}'
        );

        $this->dropTable('{{%attribute_types}}');
    }
}
