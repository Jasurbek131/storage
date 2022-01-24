<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%product_types}}`
 * - `{{%status_lists}}`
 */
class m220105_170843_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
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
            '{{%idx-products-type_id}}',
            '{{%products}}',
            'type_id'
        );

        // add foreign key for table `{{%product_types}}`
        $this->addForeignKey(
            '{{%fk-products-type_id}}',
            '{{%products}}',
            'type_id',
            '{{%product_types}}',
            'id',
            'RESTRICT'
        );

        // creates index for column `status_id`
        $this->createIndex(
            '{{%idx-products-status_id}}',
            '{{%products}}',
            'status_id'
        );

        // add foreign key for table `{{%status_lists}}`
        $this->addForeignKey(
            '{{%fk-products-status_id}}',
            '{{%products}}',
            'status_id',
            '{{%status_lists}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%product_types}}`
        $this->dropForeignKey(
            '{{%fk-products-type_id}}',
            '{{%products}}'
        );

        // drops index for column `type_id`
        $this->dropIndex(
            '{{%idx-products-type_id}}',
            '{{%products}}'
        );

        // drops foreign key for table `{{%status_lists}}`
        $this->dropForeignKey(
            '{{%fk-products-status_id}}',
            '{{%products}}'
        );

        // drops index for column `status_id`
        $this->dropIndex(
            '{{%idx-products-status_id}}',
            '{{%products}}'
        );

        $this->dropTable('{{%products}}');
    }
}
