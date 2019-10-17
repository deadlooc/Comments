<?php


class ControllerPreModeration extends ControllerListAbstract
{

    /**
     * @return ModelPreModeration
     */
    public function getModel(): ModelPreModeration
    {
        return new ModelPreModeration();
    }

    /**
     * @return MapperPreModeration
     */
    public function getMapper(): MapperPreModeration
    {
        return new MapperPreModeration();
    }

}