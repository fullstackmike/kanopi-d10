<?php

namespace Drupal\genekey\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the gene key entity edit forms.
 */
class GeneKeyForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $result = parent::save($form, $form_state);

    $entity = $this->getEntity();

    $message_arguments = ['%label' => $entity->toLink()->toString()];
    $logger_arguments = [
      '%label' => $entity->label(),
      'link' => $entity->toLink($this->t('View'))->toString(),
    ];

    switch ($result) {
      case SAVED_NEW:
        $this->messenger()->addStatus($this->t('New gene key %label has been created.', $message_arguments));
        $this->logger('genekey')->notice('Created new gene key %label', $logger_arguments);
        break;

      case SAVED_UPDATED:
        $this->messenger()->addStatus($this->t('The gene key %label has been updated.', $message_arguments));
        $this->logger('genekey')->notice('Updated gene key %label.', $logger_arguments);
        break;
    }

    $form_state->setRedirect('entity.gene_key.canonical', ['gene_key' => $entity->id()]);

    return $result;
  }

}
