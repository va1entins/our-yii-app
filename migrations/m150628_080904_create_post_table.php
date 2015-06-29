<?php

use yii\db\Schema;
use yii\db\Migration;

class m150628_080904_create_post_table extends Migration
{
    // Если в методах Ap и Down, выполняется более одной операции, обязательно заварачиваем эти методы в транзакцию.
    //Нужно изменить метод up на safeUp а метод down на safeDown.
    //"Это делается для того, если возникает ошибка в одной операции, отменяются все операции данной миграции
    // и так будет до тех пор, пока все операвции в миграции не будут ис правлены и корректно выполнеы
    public function safeUp()
    {
        $this->createTable('post', [
            'id'        =>  'pk',
            'post'      =>  'text', //тип текс
            'user_id'   =>  'int'   //колонка для id пользователя который создал статью. тип int(11)
        ]);
        $this->addForeignKey(
            'post_user_id',     //название связи
            'post',              //таблица которую связываем
            'user_id',           //колонка которую связываем
            'user',              //таблица с которой связыываем
            'id'                //колонка с которой свзываем
            );
    }

    public function safeDown()
    {
        $this->dropTable('post');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
