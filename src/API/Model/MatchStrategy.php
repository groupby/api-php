<?php

namespace GroupByInc\API\Model;

use JMS\Serializer\Annotation as JMS;

class MatchStrategy
{
  /**
   * @var PartialMatchRule[]
   * @JMS\Type("array<GroupByInc\API\Model\PartialMatchRule>")
   */
  public $rules;

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