<?php

namespace Drupal\tables\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Defines the member entity.
 *
 * @ingroup member
 *
 * @ContentEntityType(
 *   id = "member",
 *   label = @Translation("member"),
 *   handlers = {
 *   "view_builder" = "Drupal\Core\Entity\Member",
 *   "list_builder" = "Drupal\tables\Entity\MemberListBuilder",
 *   },
 *   base_table = "member",
 *   entity_keys = {
 *     "id" = "id",
 *     "nom" = "nom",
 *     "prenom" = "prenom",
 *     "role" = "role",
 *     "decide" = "decide",
 *     "uuid" = "uuid",
 *   },
 * )
 */

class Member extends ContentEntityBase implements ContentEntityInterface {

  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    // Standard field, used as unique if primary index.
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the entity.'))
      ->setReadOnly(TRUE);

    // Standard field, used as unique if primary index.
    $fields['nom'] = BaseFieldDefinition::create('string')
      ->setLabel(t('NOM'))
      ->setDescription(t('The NAME of the entity.'))
      ->setReadOnly(TRUE);

     // Standard field, used as unique if primary index.
    $fields['prenom'] = BaseFieldDefinition::create('string')
      ->setLabel(t('PRENOM'))
      ->setDescription(t('The NAME of the entity.'))
      ->setReadOnly(TRUE);

     // Standard field, used as unique if primary index.
    $fields['role'] = BaseFieldDefinition::create('string')
      ->setLabel(t('ROLE'))
      ->setDescription(t('The ROLE of the entity.'))
      ->setReadOnly(TRUE);
    
     // Standard field, used as unique if primary index.
    $fields['decide'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('DECIDE'))
      ->setDescription(t('The decide of the entity.'))
      ->setReadOnly(TRUE);

    // Standard field, unique outside of the scope of the current project.
    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the entity.'))
      ->setReadOnly(TRUE);

    return $fields;
  }
}

