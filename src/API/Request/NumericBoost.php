<?php

namespace GroupByInc\API\Request;

use JMS\Serializer\Annotation as JMS;

class NumericBoost
{
  /**
   * @var string
   * @JMS\Type("string")
   */
  private $name;

  /**
   * @var boolean
   * @JMS\Type("boolean")
   */
  private $inverted;

  /**
   * @var double
   * @JMS\Type("double")
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
   * @param $name    string to be the name of this Numeric Boost
   * @return        NumericBoost
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
   * @param $inverted    boolean True if this is to be an iverted Numeric Boost, false otherwise
   * @return            NumericBoost
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
   * @param $strength  double value to be the strength of this Numeric Boost
   * @return        NumericBoost
   */
  public function setStrength($strength)
  {
    $this->strength = $strength;
    return $this;
  }

}