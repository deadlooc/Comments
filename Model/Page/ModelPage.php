<?php

class ModelPage extends ModelAbstract
{
    /**
     * @var ModelResource $resource
     */
    public $resource;

    /**
     * @var string $name
     */
    public $name;

    /**
     * @param ModelResource $resource
     */
    public function setResource(ModelResource $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @return ModelResource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(){
        return $this->resource->getName() . $this->getName();
    }

}
