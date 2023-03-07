<?php

namespace Drupal\myone\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'myone_namee_key_value' formatter.
 *
 * @FieldFormatter(
 *   id = "myone_namee_key_value",
 *   label = @Translation("Key-value"),
 *   field_types = {"myone_namee"}
 * )
 */
class NameeKeyValueFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $element = [];

    foreach ($items as $delta => $item) {

      $table = [
        '#type' => 'table',
      ];

      // ex1.
      if ($item->ex1) {
        $table['#rows'][] = [
          'data' => [
            [
              'header' => TRUE,
              'data' => [
                '#markup' => $this->t('ex1'),
              ],
            ],
            [
              'data' => [
                '#markup' => $item->ex1,
              ],
            ],
          ],
          'no_striping' => TRUE,
        ];
      }

      // ex2.
      if ($item->ex2) {
        $table['#rows'][] = [
          'data' => [
            [
              'header' => TRUE,
              'data' => [
                '#markup' => $this->t('ex2'),
              ],
            ],
            [
              'data' => [
                '#markup' => $item->ex2,
              ],
            ],
          ],
          'no_striping' => TRUE,
        ];
      }

      // ex3.
      if ($item->ex3) {
        $table['#rows'][] = [
          'data' => [
            [
              'header' => TRUE,
              'data' => [
                '#markup' => $this->t('ex3'),
              ],
            ],
            [
              'data' => [
                '#markup' => $item->ex3,
              ],
            ],
          ],
          'no_striping' => TRUE,
        ];
      }

      $element[$delta] = $table;

    }

    return $element;
  }

}
