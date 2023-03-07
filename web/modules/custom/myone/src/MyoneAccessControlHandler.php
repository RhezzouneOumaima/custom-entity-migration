<?php

namespace Drupal\myone;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the myone entity type.
 */
class MyoneAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view myone');

      case 'update':
        return AccessResult::allowedIfHasPermissions($account, ['edit myone', 'administer myone'], 'OR');

      case 'delete':
        return AccessResult::allowedIfHasPermissions($account, ['delete myone', 'administer myone'], 'OR');

      default:
        // No opinion.
        return AccessResult::neutral();
    }

  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermissions($account, ['create myone', 'administer myone'], 'OR');
  }

}
