<?php

namespace GroupByInc\API\Model;

use JMS\Serializer\Annotation as JMS;

class PartialMatchRule
{
  /**
   * @var int
   * @JMS\Type("integer")
   */
  private $terms;
  /**
   * @var int
   * @JMS\Type("integer")
   */
  private $termsGreaterThan;
  /**
   * @var int
   * @JMS\Type("integer")
   */
  private $mustMatch;
  /**
   * @var bool
   * @JMS\Type("boolean")
   */
  private $percentage;

  /**
   * @return int
   */
  public function getTerms()
  {
    return $this->terms;
  }

  /**
   * @param int $terms
   *
   * @return PartialMatchRule
   */
  public function setTerms($terms)
  {
    $this->terms = $terms;
    return $this;
  }

  /**
   * @return int
   */
  public function getTermsGreaterThan()
  {
    return $this->termsGreaterThan;
  }

  /**
   * @param int $termsGreaterThan
   *
   * @return PartialMatchRule
   */
  public function setTermsGreaterThan($termsGreaterThan)
  {
    $this->termsGreaterThan = $termsGreaterThan;
    return $this;
  }

  /**
   * @return int
   */
  public function getMustMatch()
  {
    return $this->mustMatch;
  }

  /**
   * @param int $mustMatch
   *
   * @return PartialMatchRule
   */
  public function setMustMatch($mustMatch)
  {
    $this->mustMatch = $mustMatch;
    return $this;
  }

  /**
   * @return boolean
   */
  public function isPercentage()
  {
    return $this->percentage;
  }

  /**
   * @param boolean $percentage
   *
   * @return PartialMatchRule
   */
  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
    return $this;
  }

}