<?php

namespace Labmagento\Pqrs\Api;

interface PqrsManagementInterface
{
    /**
     * Create a new PQR entry.
     *
     * @param int $customerId
     * @param string $title
     * @param string $category
     * @param string $description
     * @return mixed
     */
    public function create($customerId, $title, $category, $description);

    /**
     * Update the status of a PQR entry.
     *
     * @param int $pqrId
     * @param string $status
     * @return mixed
     */
    public function updateStatus($pqrId, $status);
}