<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DeleteNetworkInterfacePermission
 *
 * @method string getResourceOwnerId()
 * @method string getNetworkInterfacePermissionId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getForce()
 */
class DeleteNetworkInterfacePermissionRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Ecs',
            '2014-05-26',
            'DeleteNetworkInterfacePermission',
            'ecs'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $networkInterfacePermissionId
     *
     * @return $this
     */
    public function setNetworkInterfacePermissionId($networkInterfacePermissionId)
    {
        $this->requestParameters['NetworkInterfacePermissionId'] = $networkInterfacePermissionId;
        $this->queryParameters['NetworkInterfacePermissionId'] = $networkInterfacePermissionId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function setForce($force)
    {
        $this->requestParameters['Force'] = $force;
        $this->queryParameters['Force'] = $force;

        return $this;
    }
}
