<?php
namespace eZ\Publish\API\Repository\Values\User;
use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class is used to update a role
 *
 */
class RoleUpdateStruct extends ValueObject
{
    /**
     * Name of the role
     *
     * @var string
     */
    public $name;

    /**
     * The description of the role
     *
     * @since 5.x
     * @var string
     */
    public $description;
}
