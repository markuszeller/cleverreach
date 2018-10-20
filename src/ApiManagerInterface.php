<?php

namespace rdoepner\CleverReach;

interface ApiManagerInterface
{
    /**
     * Creates a subscriber
     *
     * @param string $email
     * @param int    $groupId
     * @param bool   $active
     * @param array  $attributes
     *
     * @return mixed
     */
    public function createSubscriber(string $email, int $groupId, bool $active = false, array $attributes = []);

    /**
     * Returns a subscriber
     *
     * @param string   $email
     * @param int|null $groupId
     *
     * @return mixed
     */
    public function getSubscriber(string $email, int $groupId = null);

    /**
     * Deletes a subscriber
     *
     * @param string $email
     * @param int    $groupId
     *
     * @return mixed
     */
    public function deleteSubscriber(string $email, int $groupId);
}
