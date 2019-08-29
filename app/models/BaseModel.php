<?php
class BaseModel extends \Phalcon\Mvc\Model
{
    public function initialize()
    {
    }

    public function beforeValidationOnCreate()
    {
        if ($this->email==="test@test.com") {
            die('so simple');
        }
    }

    public function beforeCreate()
    {
        $this->created_at=date("Y-m-d H:i:s");
    }

    public function beforeUpdate()
    {
        $this->updated_at=date("Y-m-d H:i:s");
    }
}
