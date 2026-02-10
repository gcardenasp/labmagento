<?php

namespace Labmagento\Pqrs\Api;

use Labmagento\Pqrs\Api\Data\PqrsInterface;

interface PqrsRepositoryInterface
{
    /**
     * Save PQRS
     *
     * @param PqrsInterface $pqrs
     * @return PqrsInterface
     */
    public function save(PqrsInterface $pqrs);

    /**
     * Get PQRS by ID
     *
     * @param int $id
     * @return PqrsInterface
     */
    public function getById($id);

    /**
     * Get PQRS by Customer ID
     *
     * @param int $customerId
     * @return PqrsInterface[]
     */
    public function getByCustomerId($customerId);
}