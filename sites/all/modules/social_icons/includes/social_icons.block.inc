<?php
function social_icons_block_info() {
  $blocks['social_icons'] = array(
    'info' => t('Social icons'),
    'cache' => DRUPAL_CACHE_GLOBAL,
  );
  return $blocks;
}
/**
 * Implements hook_block_configure().
  //https://www.fourkitchens.com/blog/article/building-custom-blocks-drupal-7
 */
function social_icons_block_configure($delta='') {
  $form = array();
  switch ($delta) {
    case 'social_icons' :
      // Text field form element
      $form['width'] = array(
        '#type' => 'textfield',
        '#title' => t('Enter width icon. Default value 50px'),
        '#size' => 3,
        '#default_value' =>  '50px',
        );
      $form['height'] = array(
        '#type' => 'textfield',
        '#title' => 'Enter height icon. Default value 50px',
        '#size' => 3,
        '#default_value' => '50px',
        );
      break;
  }
  $options = array(
    'horizontal' => 'horizontal',
    'vertical' => 'vertical',
  );

  $form['align'] = array(
    '#type' => 'radios',
    '#title' => t('Select align panel'),
    '#options' => $options,
    '#default_value' => $options['horizontal'],
  );
   return $form;
}
/*https://205k.in/2011/05/modul-bloka-chast-vtoraya*/
/**
 * Implements hook_block_save().
 */
function social_icons_block_save($delta = '', $edit = array()) {
  //$rad = $form_state['values']['align'];
  switch($delta) {
    case 'social_icons' :
      // Saving the WYSIWYG text
      variable_set('width', $edit['width']);
      variable_set('height',$edit['height']);
      variable_set('align',$edit['align']);
      // Saving the file, setting it to a permanent state, setting a FID variable
      break;
  }
}
function social_icons_block_view($delta = '') {
  $block = array();
  switch ($delta) {
    case 'social_icons':
      $block['subject'] = '';
      $rows = array();
      $result = db_query('SELECT link,icon FROM {social_icons}');
      foreach ($result as $id) {
        $block['content']  = $block['content'].
          '<a href="'.$id->link.'">'.theme_image(_image_array($id->icon)).'</a>';
        if (variable_get('align') == 'vertical'){
          $block['content']  = $block['content'].'<br>';
        }
      }
      break;
  }
  return $block;
}
/** кінець вивовду у формі блока */
/**/