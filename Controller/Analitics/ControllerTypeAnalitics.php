<?php


class ControllerTypeAnalitics extends ControllerListAbstract
{

    /**
     * @return ModelTypeAnalitics
     */
    public function getModel(): ModelTypeAnalitics
    {
        return new ModelTypeAnalitics();
    }

    /**
     * @return MapperTypeAnalitics
     */
    public function getMapper(): MapperTypeAnalitics
    {
        return new MapperTypeAnalitics();
    }

}