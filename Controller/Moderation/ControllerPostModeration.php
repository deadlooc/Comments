<?php


class ControllerPostModeration extends ControllerListAbstract
{

    /**
     * @return ModelPostModeration
     */
    public function getModel(): ModelPostModeration
    {
        return new ModelPostModeration();
    }

    /**
     * @return MapperPostModeration
     */
    public function getMapper(): MapperPostModeration
    {
        return new MapperPostModeration();
    }

}