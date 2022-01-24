<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_types}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%status_list}}`
 */
class m220105_170547_create_product_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_types}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'code' => $this->string(),
            'status_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `status_id`
        $this->createIndex(
            '{{%idx-product_types-status_id}}',
            '{{%product_types}}',
            'status_id'
        );

        // add foreign key for table `{{%status_list}}`
        $this->addForeignKey(
            '{{%fk-product_types-status_id}}',
            '{{%product_types}}',
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
        // drops foreign key for table `{{%status_list}}`
        $this->dropForeignKey(
            '{{%fk-product_types-status_id}}',
            '{{%product_types}}'
        );

        // drops index for column `status_id`
        $this->dropIndex(
            '{{%idx-product_types-status_id}}',
            '{{%product_types}}'
        );

        $this->dropTable('{{%product_types}}');
    }
}
