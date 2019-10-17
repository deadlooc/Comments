<?php


class ControllerWordAnalitics extends ControllerListAbstract
{

    /**
     * @return ModelWordAnalitics
     */
    public function getModel(): ModelWordAnalitics
    {
        return new ModelWordAnalitics();
    }

    /**
     * @return MapperWordAnalitics
     */
    public function getMapper(): MapperWordAnalitics
    {
        return new MapperWordAnalitics();
    }

}