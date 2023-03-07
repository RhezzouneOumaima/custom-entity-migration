<?php

namespace Drupal\myone;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a myone entity type.
 */
interface MyoneInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the myone title.
   *
   * @return string
   *   Title of the myone.
   */
  public function getTitle();

  /**
   * Sets the myone title.
   *
   * @param string $title
   *   The myone title.
   *
   * @return \Drupal\myone\MyoneInterface
   *   The called myone entity.
   */
  public function setTitle($title);

  /**
   * Gets the myone creation timestamp.
   *
   * @return int
   *   Creation timestamp of the myone.
   */
  public function getCreatedTime();

  /**
   * Sets the myone creation timestamp.
   *
   * @param int $timestamp
   *   The myone creation timestamp.
   *
   * @return \Drupal\myone\MyoneInterface
   *   The called myone entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the myone status.
   *
   * @return bool
   *   TRUE if the myone is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the myone status.
   *
   * @param bool $status
   *   TRUE to enable this myone, FALSE to disable.
   *
   * @return \Drupal\myone\MyoneInterface
   *   The called myone entity.
   */
  public function setStatus($status);

}
