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

    /**
     * ModelUser constructor.
     * @param int $user
     * @throws Exception
     */
    public function __construct(integer $user)
    {
        $mapper = new MapperUser();
        $data = $mapper->object($user);

        if (empty($data)) {
            throw new Exception('User not found');
        }

        $this->setId($data['id'])
            ->setName($data['name'])
            ->setType(new ModelTypeUser($data['type']));
    }
}
