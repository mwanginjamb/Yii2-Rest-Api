<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m200129_061753_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(512),
            'body' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer()
        ]);

        //Add a foreign  key
        $this->addForeignKey('FK_post_user_created_by', '{{%post}}','created_by','{{%user}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //First drop the foreign key
        $this->dropForeignKey('FK_post_user_created_by', '{{%post}}');
        $this->dropTable('{{%post}}');
    }
}
