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

    /**
     * ModelResource constructor.
     * @param int $resource
     * @throws Exception
     */
    public function __construct(integer $resource)
    {
        $mapper = new MapperResource();
        $data = $mapper->object($resource);

        if (empty($data)) {
            throw new Exception('Resource not found');
        }

        $this->setId($data['id'])
            ->setUser(new ModelUser($data['user']))
            ->setName($data['name']);
    }
}
