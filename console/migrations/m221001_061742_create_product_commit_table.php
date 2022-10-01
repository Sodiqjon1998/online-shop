<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_commit}}`.
 */
class m221001_061742_create_product_commit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_commit}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'your_name' => $this->text(),
            'rating' => $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(0),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_commit}}');
    }
}
