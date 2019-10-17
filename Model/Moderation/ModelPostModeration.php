<?php


class ModelPostModeration extends ModelAbstract
{
    /**
     * @var string $name
     */
    public $name;

    /**
     * @param string $name
     */
    public function setName($name): void
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
}
