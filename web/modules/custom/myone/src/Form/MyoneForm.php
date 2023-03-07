<?php

namespace Drupal\myone\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the myone entity edit forms.
 */
class MyoneForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New myone %label has been created.', $message_arguments));
      $this->logger('myone')->notice('Created new myone %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The myone %label has been updated.', $message_arguments));
      $this->logger('myone')->notice('Updated new myone %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.myone.canonical', ['myone' => $entity->id()]);
  }

}
