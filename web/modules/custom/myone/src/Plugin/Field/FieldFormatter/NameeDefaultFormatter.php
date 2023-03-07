<?php

namespace Drupal\myone\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'myone_namee_default' formatter.
 *
 * @FieldFormatter(
 *   id = "myone_namee_default",
 *   label = @Translation("Default"),
 *   field_types = {"myone_namee"}
 * )
 */
class NameeDefaultFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return ['foo' => 'bar'] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $settings = $this->getSettings();
    $element['foo'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Foo'),
      '#default_value' => $settings['foo'],
    ];
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $settings = $this->getSettings();
    $summary[] = $this->t('Foo: @foo', ['@foo' => $settings['foo']]);
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {

      if ($item->ex1) {
        $element[$delta]['ex1'] = [
          '#type' => 'item',
          '#title' => $this->t('ex1'),
          '#markup' => $item->ex1,
        ];
      }

      if ($item->ex2) {
        $element[$delta]['ex2'] = [
          '#type' => 'item',
          '#title' => $this->t('ex2'),
          '#markup' => $item->ex2,
        ];
      }

      if ($item->ex3) {
        $element[$delta]['ex3'] = [
          '#type' => 'item',
          '#title' => $this->t('ex3'),
          '#markup' => $item->ex3,
        ];
      }

    }

    return $element;
  }

}
