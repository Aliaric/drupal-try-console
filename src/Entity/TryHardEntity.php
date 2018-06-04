<?php

namespace Drupal\try_console\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Try Hard entity entity.
 *
 * @ConfigEntityType(
 *   id = "TryHard_entity",
 *   label = @Translation("Try Hard entity"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\try_console\TryHardEntityListBuilder",
 *     "form" = {
 *       "add" = "Drupal\try_console\Form\TryHardEntityForm",
 *       "edit" = "Drupal\try_console\Form\TryHardEntityForm",
 *       "delete" = "Drupal\try_console\Form\TryHardEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\try_console\TryHardEntityHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "TryHard_entity",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/TryHard_entity/{TryHard_entity}",
 *     "add-form" = "/admin/structure/TryHard_entity/add",
 *     "edit-form" = "/admin/structure/TryHard_entity/{TryHard_entity}/edit",
 *     "delete-form" = "/admin/structure/TryHard_entity/{TryHard_entity}/delete",
 *     "collection" = "/admin/structure/TryHard_entity"
 *   }
 * )
 */
class TryHardEntity extends ConfigEntityBase implements TryHardEntityInterface {

  /**
   * The Try Hard entity ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Try Hard entity label.
   *
   * @var string
   */
  protected $label;

}
