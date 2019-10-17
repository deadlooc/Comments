<?php


abstract class ControllerListAbstract
{

    public $records = array();

    public $lists = array();

    public function __construct()
    {
        $this->setRecords();
    }

    /**
     * @return ModelAbstract
     */
    abstract function getModel();

    /**
     * @return MapperAbstract
     */
    abstract function getMapper();

    public function setRecords(): void
    {
        $this->records = $this->getMapper()->list();
    }

    /**
     * @return array
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @return array []
     */
    public function getLists()
    {
        foreach ($this->getRecords() as $data){
            $this->lists[$data['name']] = 0;
        }

        return $this->lists;
    }

    /**
     * @return array ModelAbstract
     */
    public function getObjects()
    {
        foreach ($this->getRecords() as $data){
            $this->lists[] = $this->getModel()
                ->setId($data['id'])
                ->setName($data['name']);
        }

        return $this->lists;
    }

}