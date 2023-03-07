<?php

namespace Drupal\myentity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a myentity entity type.
 */
interface MyentityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the myentity title.
   *
   * @return string
   *   Title of the myentity.
   */
  public function getTitle();

  /**
   * Sets the myentity title.
   *
   * @param string $title
   *   The myentity title.
   *
   * @return \Drupal\myentity\MyentityInterface
   *   The called myentity entity.
   */
  public function setTitle($title);

  /**
   * Gets the myentity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the myentity.
   */
  public function getCreatedTime();

  /**
   * Sets the myentity creation timestamp.
   *
   * @param int $timestamp
   *   The myentity creation timestamp.
   *
   * @return \Drupal\myentity\MyentityInterface
   *   The called myentity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the myentity status.
   *
   * @return bool
   *   TRUE if the myentity is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the myentity status.
   *
   * @param bool $status
   *   TRUE to enable this myentity, FALSE to disable.
   *
   * @return \Drupal\myentity\MyentityInterface
   *   The called myentity entity.
   */
  public function setStatus($status);

}
