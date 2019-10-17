<?php


class ModelPreModeration extends ModelAbstract
{
    /**
     * @var string $name
     */
    public $name;

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

}
