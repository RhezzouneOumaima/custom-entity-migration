<?php

namespace Drupal\myentity\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the myentity entity edit forms.
 */
class MyentityForm extends ContentEntityForm {

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
      $this->messenger()->addStatus($this->t('New myentity %label has been created.', $message_arguments));
      $this->logger('myentity')->notice('Created new myentity %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The myentity %label has been updated.', $message_arguments));
      $this->logger('myentity')->notice('Updated new myentity %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.myentity.canonical', ['myentity' => $entity->id()]);
  }

}
