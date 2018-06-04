<?php

namespace Drupal\try_console\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class TryHardEntityForm.
 */
class TryHardEntityForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $tryhard_entity = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $tryhard_entity->label(),
      '#description' => $this->t("Label for the Try Hard entity."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $tryhard_entity->id(),
      '#machine_name' => [
        'exists' => '\Drupal\try_console\Entity\TryHardEntity::load',
      ],
      '#disabled' => !$tryhard_entity->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $tryhard_entity = $this->entity;
    $status = $tryhard_entity->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Try Hard entity.', [
          '%label' => $tryhard_entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Try Hard entity.', [
          '%label' => $tryhard_entity->label(),
        ]));
    }
    $form_state->setRedirectUrl($tryhard_entity->toUrl('collection'));
  }

}
