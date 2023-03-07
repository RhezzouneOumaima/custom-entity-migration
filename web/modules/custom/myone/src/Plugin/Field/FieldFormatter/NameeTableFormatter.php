<?php

namespace Drupal\myone\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'myone_namee_table' formatter.
 *
 * @FieldFormatter(
 *   id = "myone_namee_table",
 *   label = @Translation("Table"),
 *   field_types = {"myone_namee"}
 * )
 */
class NameeTableFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $header[] = '#';
    $header[] = $this->t('ex1');
    $header[] = $this->t('ex2');
    $header[] = $this->t('ex3');

    $table = [
      '#type' => 'table',
      '#header' => $header,
    ];

    foreach ($items as $delta => $item) {
      $row = [];

      $row[]['#markup'] = $delta + 1;

      $row[]['#markup'] = $item->ex1;

      $row[]['#markup'] = $item->ex2;

      $row[]['#markup'] = $item->ex3;

      $table[$delta] = $row;
    }

    return [$table];
  }

}
