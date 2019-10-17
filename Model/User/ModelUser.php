<?php


class ModelUser extends ModelAbstract
{
    /**
     * @var string $name
     */
    public $name;

    /**
     * @var ModelTypeUser $type
     */
    public $type;

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
     * @param ModelTypeUser $type
     */
    public function setType(ModelTypeUser $type): void
    {
        $this->type = $type;
    }

    /**
     * @return ModelTypeUser
     */
    public function getType()
    {
        return $this->type;
    }
}
