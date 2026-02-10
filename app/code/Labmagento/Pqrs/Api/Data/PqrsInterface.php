<?php

namespace Labmagento\Pqrs\Api\Data;

interface PqrsInterface
{
    const ID = 'entity_id';
    const CUSTOMER_ID = 'customer_id';
    const TITLE = 'title';
    const CATEGORY = 'category';
    const DESCRIPTION = 'description';
    const PRIORITY = 'priority';
    const STATUS = 'status';

    /**
     * Get entity ID
     */
    public function getId();

    /**
     * Set entity ID
     */
    public function setId($id);

    /**
     * Get customer ID
     */
    public function getCustomerId();

    /**
     * Set customer ID
     */
    public function setCustomerId($customerId);

    /**
     * Get title
     */
    public function getTitle();

    /**
     * Set title
     */
    public function setTitle($title);

    /**
     * Get category
     */
    public function getCategory();

    /**
     * Set category
     */
    public function setCategory($category);

    /**
     * Get description
     */
    public function getDescription();

    /**
     * Set description
     */
    public function setDescription($description);

    /**
     * Get priority
     */
    public function getPriority();

    /**
     * Set priority
     */
    public function setPriority($priority);

    /**
     * Get status
     */
    public function getStatus();

    /**
     * Set status
     */
    public function setStatus($status);
}