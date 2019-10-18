<?php


class ModelComment extends ModelAbstract
{
    /**
     * @var ModelResource $resource
     */
    public $resource;

    /**
     * @var ModelPage $page
     */
    public $page;

    /**
     * @var ModelTypeComment $type
     */
    public $type;

    /**
     * @var ModelTypeValidation $validate
     */
    public $validate;

    /**
     * @var DateTime $date
     */
    public $date;

    /**
     * @var string $comment
     */
    public $comment;

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
     * @param ModelPage $page
     */
    public function setPage(ModelPage $page): void
    {
        $this->page = $page;
    }

    /**
     * @return ModelPage
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param ModelTypeComment $type
     */
    public function setType(ModelTypeComment $type): void
    {
        $this->type = $type;
    }

    /**
     * @return ModelTypeComment
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param ModelTypeValidation $validate
     */
    public function setValidate(ModelTypeValidation $validate): void
    {
        $this->validate = $validate;
    }

    /**
     * @return ModelTypeValidation
     */
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $text
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * ModelComment constructor.
     * @param int $comment
     * @throws Exception
     */
    public function __construct(integer $comment)
    {
        $mapper = new MapperComment();
        $data = $mapper->object($comment);

        if (empty($comment)){
            throw new Exception('Comment not found');
        }

        $this->setId($data['id'])
        ->setResource(new ModelResource($data['resource']))
        ->setPage(new ModelPage($data['page']))
        ->setTypeComment(new ModelTypeComment($data['type']))
        ->setValidate(new ModelTypeValidation($data['validation']))
        ->setDate(new DateTime($data['date']))
        ->setComment($data['comment']);
    }
}
