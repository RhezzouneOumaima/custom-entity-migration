<?php

namespace Drupal\myone\Plugin\Field\FieldType;

use Drupal\Component\Utility\Random;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Defines the 'myone_namee' field type.
 *
 * @FieldType(
 *   id = "myone_namee",
 *   label = @Translation("namee"),
 *   category = @Translation("General"),
 *   default_widget = "myone_namee",
 *   default_formatter = "myone_namee_default"
 * )
 */
class NameeItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultFieldSettings() {
    $settings = ['bar' => 'example'];
    return $settings + parent::defaultFieldSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function fieldSettingsForm(array $form, FormStateInterface $form_state) {
    $settings = $this->getSettings();

    $element['bar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Foo'),
      '#default_value' => $settings['bar'],
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    if ($this->ex1 !== NULL) {
      return FALSE;
    }
    elseif ($this->ex2 !== NULL) {
      return FALSE;
    }
    elseif ($this->ex3 !== NULL) {
      return FALSE;
    }
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {

    $properties['ex1'] = DataDefinition::create('string')
      ->setLabel(t('ex1'));
    $properties['ex2'] = DataDefinition::create('string')
      ->setLabel(t('ex2'));
    $properties['ex3'] = DataDefinition::create('string')
      ->setLabel(t('ex3'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function getConstraints() {
    $constraints = parent::getConstraints();

    // @todo Add more constraints here.
    return $constraints;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {

    $columns = [
      'ex1' => [
        'type' => 'varchar',
        'length' => 255,
      ],
      'ex2' => [
        'type' => 'varchar',
        'length' => 255,
      ],
      'ex3' => [
        'type' => 'varchar',
        'length' => 255,
      ],
    ];

    $schema = [
      'columns' => $columns,
      // @DCG Add indexes here if necessary.
    ];

    return $schema;
  }

  /**
   * {@inheritdoc}
   */
  public static function generateSampleValue(FieldDefinitionInterface $field_definition) {

    $random = new Random();

    $values['ex1'] = $random->word(mt_rand(1, 255));

    $values['ex2'] = $random->word(mt_rand(1, 255));

    $values['ex3'] = $random->word(mt_rand(1, 255));

    return $values;
  }

}
