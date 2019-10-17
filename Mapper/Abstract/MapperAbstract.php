<?php


abstract class MapperAbstract extends ControllerDatabase
{
    /**
     * @param array $fields
     * @return string
     */
    public function prepare(array $fields){
        $result = [];
        foreach ($fields as $key => $value){
            $result[] = $key . ' = ' . $value;
        }
        return implode(', ', $result);
    }

    /**
     * @return array
     */
    public function list(){
        return $this->db->getQuery(
            'SELECT * FROM ' . $this->table
        );
    }

    /**
     * @param integer $limit
     * @param integer $offset
     *
     * @return array
     */
    public function select(integer $limit, integer $offset){
        return $this->db->getQuery(
            'SELECT * FROM ' . $this->table .
            ' LIMIT ' . $limit . ' OFFSET ' . $offset
        );
    }

    /**
     * @param int $id
     * @param array $fields
     *
     * @return array
     */
    public function update(integer $id, array $fields){
        return $this->db->getQuery(
            'UPDATE ' . $this->table .
            ' SET ' . $this->prepare($fields) .
            ' WHERE id = ' . $id
        );
    }

    /**
     * @param integer $id
     *
     * @return array
     */
    public function delete(integer $id){
        return $this->db->getQuery(
            'DELETE ' . $this->table .
            ' WHERE id = ' . $id
        );
    }
}