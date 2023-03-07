<?php

namespace Drupal\tables\Entity;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Defines a class to build a listing of My Custom Entity entities.
 *
 * @ingroup my_custom_module
 */
class MemberListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['nom'] = $this->t('NOM');
    $header['prenom'] = $this->t('PRENOM');
    $header['role'] = $this->t('ROLE');
    $header['decide'] = $this->t('DECIDE');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['id'] = $entity->id();
    $header['nom'] = $entity->label();
    $header['prenom'] = $entity->label();
    $header['role'] = $entity->label();
    $header['decide'] = $entity->label();
    return $row + parent::buildRow($entity);
  }

}
