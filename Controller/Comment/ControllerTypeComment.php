<?php


class ControllerTypeComment extends ControllerListAbstract
{

    /**
     * @return ModelTypeComment
     */
    public function getModel(): ModelTypeComment
    {
        return new ModelTypeComment();
    }

    /**
     * @return MapperTypeComment
     */
    public function getMapper(): MapperTypeComment
    {
        return new MapperTypeComment();
    }

}