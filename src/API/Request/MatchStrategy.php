<?php

namespace GroupByInc\API\Request;

use JMS\Serializer\Annotation as JMS;

class MatchStrategy
{
  /**
   * @var PartialMatchRule[]
   * @JMS\Type("array<GroupByInc\API\Request\PartialMatchRule>")
   */
  private $rules;

  /**
   * @return PartialMatchRule[]
   */
  public function getRules()
  {
    return $this->rules;
  }

  /**
   * @param PartialMatchRule[] $rules
   *
   * @return MatchStrategy
   */
  public function setRules($rules)
  {
    $this->rules = $rules;
    return $this;
  }

}