<?php
use Drupal\Core\Form\FormStateInterface;
//...

class HighlightedContentBlock extends BlockBase {
 //...
 public function blockForm($form, FormStateInterface $form_state) {

 $form['ave_blocks_block_message'] = array(
 '#type' => 'textfield',
 '#title' => $this->t('Numero de ticket'),
 '#default_value' => $this->configuration['block_message'],
 );

 $range = range(1, 10);
 $form['forcontu_blocks_node_number'] = array(
 '#type' => 'select',
 '#title' => $this->t('Estatus'),
 '#default_value' => $this->configuration['estatus_number'],
 '#options' => array_combine($range, $range),
 );
 return $form;
 }
}
