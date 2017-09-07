<?php

namespace GroupByInc\API\Model;

class NumericBoost
{
  /**
   * @var string
   */
  private $name;

  /**
   * @var boolean
   */
  private $inverted;

  /**
   * @var double
   */
  private $strength = 1.0;

  /**
   * @return string The name of this Numeric Boost
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param name    The string to be the name of this Numeric Boost
   * @return        This Numeric Boost
   */
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  /**
   * @return boolean Whether this is an inverted Numeric Boost
   */
  public function isInverted()
  {
    return $this->inverted;
  }

  /**
   * @param inverted    True if this is to be an iverted Numeric Boost, false otherwise
   * @return            This Numeric Boost
   */
  public function setInverted($inverted)
  {
    $this->inverted = $inverted;
    return $this;
  }

  /**
   * @return double The strength of this Numeric Boost
   */
  public function getStrength()
  {
    return $this->strength;
  }

  /**
   * @param double  The value to be the strength of this Numeric Boost
   * @return        This Numeric Boost
   */
  public function setStrength($strength)
  {
    $this->strength = $strength;
    return $this;
  }

}