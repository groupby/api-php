<?php

namespace GroupByInc\API\Config;

class ConnectionConfiguration
{

  const DEFAULT_TIMEOUT = 30;
  const DEFAULT_CONNECT_TIMEOUT = 15;
  const DEFAULT_MAX_CONNECTIONS = 200;

  private $timeout;
  private $connectTimeout;
  private $maxConnections;

  /**
   * ConnectionConfiguration constructor.
   * @param int $timeout        in seconds
   * @param int $connectTimeout in seconds
   * @param int $maxConnections maximum connections cURL will allow at one time.
   */
  public function __construct($timeout = self::DEFAULT_TIMEOUT, $connectTimeout = self::DEFAULT_CONNECT_TIMEOUT, $maxConnections = self::DEFAULT_MAX_CONNECTIONS)
  {
    $this->timeout = $timeout;
    $this->connectTimeout = $connectTimeout;
    $this->maxConnections = $maxConnections;
  }


  /**
   * @return int
   */
  public function getTimeout()
  {
    return $this->timeout;
  }

  /**
   * @param int $timeout seconds
   * @return ConnectionConfiguration
   */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
    return $this;
  }

  /**
   * @return int
   */
  public function getConnectTimeout()
  {
    return $this->connectTimeout;
  }

  /**
   * @param int $connectTimeout seconds
   * @return ConnectionConfiguration
   */
  public function setConnectTimeout($connectTimeout)
  {
    $this->connectTimeout = $connectTimeout;
    return $this;
  }

  /**
   * @return int
   */
  public function getMaxConnections()
  {
    return $this->maxConnections;
  }

  /**
   * @param int $maxConnections seconds
   * @return ConnectionConfiguration
   */
  public function setMaxConnections($maxConnections)
  {
    $this->maxConnections = $maxConnections;
    return $this;
  }

}