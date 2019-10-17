<?php


class ModelResource extends ModelAbstract
{
    /**
     * @var ModelUser $user
     */
    public $user;

    /**
     * @var string $name
     */
    public $name;

    /**
     * @param ModelUser $user
     */
    public function setUser(ModelUser $user): void
    {
        $this->user = $user;
    }

    /**
     * @return ModelUser
     */
    public function getUser()
    {
        return $this->user;
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

}
