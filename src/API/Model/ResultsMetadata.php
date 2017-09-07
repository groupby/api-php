<?php

namespace GroupByInc\API\Model;

class ResultsMetadata
{
  /**
   * @var boolean
   */
  private $recordLimitReached;

  /**
   * @var long
   */
  private $totalTime;

  /**
   * @return boolean  True if the total record count is actually greater than the returned record count in the response, false otherwise
   */
  public function hasRecordLimitReached()
  {
    return $this->recordLimitReached;
  }

  /**
   * @param recordLimitReached    Whether the total record count is actually greater than the returned record count
   * @return                      This ResultsMetadata object
   */
  public function setRecordLimitReached($recordLimitReached)
  {
    $this->recordLimitReached = $recordLimitReached;
    return $this;
  }

  /**
   * @return long  The total time spent in milliseconds
   */
  public function getTotalTime()
  {
    return $this->totalTime;
  }

  /**
   * @param totalTime    The total time spent in milliseconds to generate results
   * @return             This ResultsMetadata object
   */
  public function setTotalTime($totalTime)
  {
    $this->totalTime = $totalTime;
    return $this;
  }
}