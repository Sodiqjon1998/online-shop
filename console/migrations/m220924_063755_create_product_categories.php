<?php

use yii\db\Migration;

/**
 * Class m220924_063755_create_product_categories
 */
class m220924_063755_create_product_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(0),

            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        $this->createTable('{{%color_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(0),

            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        $this->createTable('{{%manufacture_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(0),

            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);


        $this->createTable("{{%product}}", [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'color_id' => $this->integer(),
            'manufacture_id' => $this->integer(),
            'title' => $this->string(255),
            'price' => $this->integer(),
            'content' => $this->text(),
            'product_code' => $this->string(255),
            'reward_points' => $this->integer(),
            "availability" => $this->string(255),
            'discount' => $this->integer(),
            'review_count' => $this->integer()->defaultValue(0),
            'view_count' => $this->integer()->defaultValue(0),
            'status' => $this->integer()->defaultValue(0),
        ]);



        $this->addForeignKey('fk_category_created_by_to_user', 'category', 'created_by', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_category_updated_by_to_user', 'category', 'updated_by', 'user', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_color_category_created_by_to_user', 'color_category', 'created_by', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_color_category_updated_by_to_user', 'color_category', 'updated_by', 'user', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_manufacture_category_created_by_to_user', 'manufacture_category', 'created_by', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_manufacture_category_updated_by_to_user', 'manufacture_category', 'updated_by', 'user', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_product_category_id_to_category', 'product', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_product_color_id_to_color_category', 'product', 'color_id', 'color_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_product_manufacture_id_to_manufacture_category', 'product', 'color_id', 'manufacture_category', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
        $this->dropTable('{{%manufacture_category}}');
        $this->dropTable('{{%color_category}}');
        $this->dropTable('{{%category}}');
    }

}
