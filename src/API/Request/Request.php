<?php

namespace GroupByInc\API\Request;

use GroupByInc\API\Model\CustomUrlParam;
use GroupByInc\API\Model\Navigation;
use JMS\Serializer\Annotation as JMS;

class Request
{
  /**
   * @var string
   */
  public $clientKey;
  /**
   * @var string
   */
  public $userId;
  /**
   * @var string
   * @JMS\Type("string")
   */
  public $collection;
  /**
   * @var string
   * @JMS\Type("string")
   */
  public $area;
  /**
   * @var string
   * @JMS\Type("string")
   */
  public $biasingProfile;
  /**
   * @var string
   * @JMS\Type("string")
   */
  public $language;
  /**
   * @var string
   * @JMS\Type("string")
   */
  public $query;
  /**
   * @var string
   * @JMS\Type("string")
   */
  public $refinementQuery;
  /**
   * @var RestrictNavigation
   * @JMS\Type("GroupByInc\API\Request\RestrictNavigation")
   */
  public $restrictNavigation;
  /**
   * @var MatchStrategy
   * @JMS\Type("GroupByInc\API\Request\MatchStrategy")
   */
  public $matchStrategy;
  /**
   * @var Biasing
   * @JMS\Type("GroupByInc\API\Request\Biasing")
   */
  public $biasing;

  /**
   * @var Sort[]
   * @JMS\Type("array<GroupByInc\API\Request\Sort>")
   */
  public $sort = array();
  /**
   * @var string[]
   * @JMS\Type("array<string>")
   */
  public $fields = array();
  /**
   * @var string[]
   * @JMS\Type("array<string>")
   */
  public $orFields = array();
  /**
   * @var SelectedRefinement[]
   * @JMS\Type("array<GroupByInc\API\Request\SelectedRefinement>")
   */
  public $refinements = array();
  /**
   * @var CustomUrlParam[]
   * @JMS\Type("array<GroupByInc\API\Model\CustomUrlParam>")
   */
  public $customUrlParams = array();

  /**
   * @var string[]
   * @JMS\Type("array<string>")
   */
  public $includedNavigations;
  /**
   * @var string[]
   * @JMS\Type("array<string>")
   */
  public $excludedNavigations;

  /**
   * @var int
   * @JMS\Type("integer")
   */
  public $skip;
  /**
   * @var int
   * @JMS\Type("integer")
   */
  public $pageSize;
  /**
   * @var bool
   * @JMS\Type("boolean")
   */
  public $returnBinary;
  /**
   * @var bool
   * @JMS\Type("boolean")
   */
  public $disableAutocorrection;
  /**
   * @var bool
   * @JMS\Type("boolean")
   */
  public $pruneRefinements = true;
  /**
   * @var bool
   * @JMS\Type("boolean")
   */
  public $wildcardSearchEnabled = false;
}