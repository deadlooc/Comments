<?php


class ModelTypeComment extends ModelAbstract
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

    /**
     * ModelTypeComment constructor.
     * @param int $type
     * @throws Exception
     */
    public function __construct(integer $type)
    {
        $mapper = new MapperTypeComment();
        $data = $mapper->object($type);

        if(empty($data)){
            throw new Exception('Type comment not found');
        }

        $this->setId($data['id'])
            ->setName($data['name']);
    }
}
