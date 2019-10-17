<?php


class ControllerTypeUser extends ControllerListAbstract
{

    /**
     * @return ModelTypeUser
     */
    public function getModel(): ModelTypeUser
    {
        return new ModelTypeUser();
    }

    /**
     * @return MapperTypeUser
     */
    public function getMapper(): MapperTypeUser
    {
        return new MapperTypeUser();
    }

}