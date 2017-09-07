<?php

namespace GroupByInc\API\Request;

use JMS\Serializer\Annotation as JMS;

class Biasing
{
  /**
   * @var string[]
   * @JMS\Type("array<string>")
   */
  private $bringToTop = array();

  /**
   * @var bool
   * @JMS\Type("boolean")
   */
  private $augmentBiases = false;

  /**
   * @var float|null
   * @JMS\Type("float")
   */
  private $influence = null;

  /**
   * @var Bias[]
   * @JMS\Type("array<GroupByInc\API\Request\Bias>")
   */
  private $biases = array();

  /**
   * @var NumericBoost[]
   * @JMS\Type("array<GroupByInc\API\Request\NumericBoost>")
   */
  private $numericBoosts = array();

  /**
   * @return string[]
   */
  public function getBringToTop()
  {
    return $this->bringToTop;
  }

  /**
   * @param string[] $bringToTop
   *
   * @return Biasing
   */
  public function setBringToTop($bringToTop)
  {
    $this->bringToTop = $bringToTop;
    return $this;
  }

  /**
   * @return boolean
   */
  public function isAugmentBiases()
  {
    return $this->augmentBiases;
  }

  /**
   * @param boolean $augmentBiases
   *
   * @return Biasing
   */
  public function setAugmentBiases($augmentBiases)
  {
    $this->augmentBiases = $augmentBiases;
    return $this;
  }

  /**
   * @return float|null
   */
  public function getInfluence()
  {
    return $this->influence;
  }

  /**
   * @param float|null $influence
   *
   * @return Biasing
   */
  public function setInfluence($influence)
  {
    $this->influence = $influence;
    return $this;
  }

  /**
   * @return NumericBoost[]
   */
  public function getNumericBoosts()
  {
    return $this->numericBoosts;
  }

  /**
   * @param NumericBoost[] $numericBoosts
   *
   * @return Biasing
   */
  public function setNumericBoosts($numericBoosts)
  {
    $this->numericBoosts = $numericBoosts;
    return $this;
  }

  /**
   * @return Bias[]
   */
  public function getBiases()
  {
    return $this->biases;
  }

  /**
   * @param Bias[] $biases
   *
   * @return Biasing
   */
  public function setBiases($biases)
  {
    $this->biases = $biases;
    return $this;
  }
}