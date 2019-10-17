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
     * @var string $text
     */
    public $text;

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
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
