<?php

namespace GroupByInc\API\Util;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class SerializerFactory
{

  /**
   * @return Serializer
   */
  public static function build()
  {
    return SerializerBuilder::create()
        ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
        ->build();
  }
}