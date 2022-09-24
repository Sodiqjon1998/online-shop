<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slider}}`.
 */
class m220923_120309_create_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255),
            'content' => $this->text(),
            'status' => $this->tinyInteger()->defaultValue(0),

            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        $this->addForeignKey('fk_slider_created_by_to_user', 'slider', 'created_by', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_slider_updated_by_to_user', 'slider', 'updated_by', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%slider}}');
    }
}
