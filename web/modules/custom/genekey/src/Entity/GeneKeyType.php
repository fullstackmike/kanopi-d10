<?php

namespace Drupal\genekey\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Gene Key type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "gene_key_type",
 *   label = @Translation("Gene Key type"),
 *   label_collection = @Translation("Gene Key types"),
 *   label_singular = @Translation("gene key type"),
 *   label_plural = @Translation("gene keys types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count gene keys type",
 *     plural = "@count gene keys types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\genekey\Form\GeneKeyTypeForm",
 *       "edit" = "Drupal\genekey\Form\GeneKeyTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\genekey\GeneKeyTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer gene key types",
 *   bundle_of = "gene_key",
 *   config_prefix = "gene_key_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/gene_key_types/add",
 *     "edit-form" = "/admin/structure/gene_key_types/manage/{gene_key_type}",
 *     "delete-form" = "/admin/structure/gene_key_types/manage/{gene_key_type}/delete",
 *     "collection" = "/admin/structure/gene_key_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class GeneKeyType extends ConfigEntityBundleBase {

  /**
   * The machine name of this gene key type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the gene key type.
   *
   * @var string
   */
  protected $label;

}
