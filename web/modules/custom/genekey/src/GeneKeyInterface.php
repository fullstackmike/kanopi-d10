<?php

namespace Drupal\genekey;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a gene key entity type.
 */
interface GeneKeyInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
