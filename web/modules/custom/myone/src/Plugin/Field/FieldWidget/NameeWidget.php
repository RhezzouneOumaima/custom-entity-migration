<?php

namespace Drupal\myone\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\Validator\ConstraintViolationInterface;

/**
 * Defines the 'myone_namee' field widget.
 *
 * @FieldWidget(
 *   id = "myone_namee",
 *   label = @Translation("namee"),
 *   field_types = {"myone_namee"},
 * )
 */
class NameeWidget extends WidgetBase {

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
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

    $element['ex1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('ex1'),
      '#default_value' => isset($items[$delta]->ex1) ? $items[$delta]->ex1 : NULL,
      '#size' => 20,
    ];

    $element['ex2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('ex2'),
      '#default_value' => isset($items[$delta]->ex2) ? $items[$delta]->ex2 : NULL,
      '#size' => 20,
    ];

    $element['ex3'] = [
      '#type' => 'textfield',
      '#title' => $this->t('ex3'),
      '#default_value' => isset($items[$delta]->ex3) ? $items[$delta]->ex3 : NULL,
      '#size' => 20,
    ];

    $element['#theme_wrappers'] = ['container', 'form_element'];
    $element['#attributes']['class'][] = 'container-inline';
    $element['#attributes']['class'][] = 'myone-namee-elements';
    $element['#attached']['library'][] = 'myone/myone_namee';

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function errorElement(array $element, ConstraintViolationInterface $violation, array $form, FormStateInterface $form_state) {
    return isset($violation->arrayPropertyPath[0]) ? $element[$violation->arrayPropertyPath[0]] : $element;
  }

  /**
   * {@inheritdoc}
   */
  public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
    foreach ($values as $delta => $value) {
      if ($value['ex1'] === '') {
        $values[$delta]['ex1'] = NULL;
      }
      if ($value['ex2'] === '') {
        $values[$delta]['ex2'] = NULL;
      }
      if ($value['ex3'] === '') {
        $values[$delta]['ex3'] = NULL;
      }
    }
    return $values;
  }

}
