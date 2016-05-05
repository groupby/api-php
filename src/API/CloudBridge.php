<?php

namespace GroupByInc\API;

use GroupByInc\API\Config\ConnectionConfiguration;

class CloudBridge extends AbstractBridge
{
  const DOT = '.';
  const CLOUD_HOST = 'groupbycloud.com';
  const CLOUD_PORT = 443;
  const CLOUD_PATH = '/api/v1';

  /**
   * @param string                  $clientKey
   * @param string                  $customerId
   * @param ConnectionConfiguration $config
   */
  function __construct($clientKey, $customerId, $config = null)
  {
    if ($config != null) {
      $config = new ConnectionConfiguration();
    }
    parent::__construct($clientKey, self::HTTPS . $customerId . self::DOT . self::CLOUD_HOST . self::COLON . self::CLOUD_PORT . self::CLOUD_PATH, $config);
  }
}