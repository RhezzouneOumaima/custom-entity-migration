<?php

namespace Drupal\myone\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the myone type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "myone_type",
 *   label = @Translation("myone type"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\myone\Form\MyoneTypeForm",
 *       "edit" = "Drupal\myone\Form\MyoneTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\myone\MyoneTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer myone types",
 *   bundle_of = "myone",
 *   config_prefix = "myone_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/myone_types/add",
 *     "edit-form" = "/admin/structure/myone_types/manage/{myone_type}",
 *     "delete-form" = "/admin/structure/myone_types/manage/{myone_type}/delete",
 *     "collection" = "/admin/structure/myone_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class MyoneType extends ConfigEntityBundleBase {

  /**
   * The machine name of this myone type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the myone type.
   *
   * @var string
   */
  protected $label;

}
