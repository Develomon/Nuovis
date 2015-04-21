<?php


/*** PREPROCESS FUNCTIONS ***/

/**
 * Implementation of template_preprocess().
 */
function nuovis_preprocess(&$variables, $hook) {
}

/**
 * Implementation of template_preprocess().
 */
function nuovis_preprocess_html(&$variables) {
}

/**
 * Implementation of template_preprocess().
 */
function nuovis_preprocess_page(&$variables) {
}

/**
 * Implementation of template_preprocess().
 */
function nuovis_preprocess_entity(&$variables) {
}

/**
 * Implementation of template_preprocess().
 */
function nuovis_preprocess_node(&$variables) {
}

/**
 * Implementation of template_preprocess().
 */
function nuovis_preprocess_region(&$variables) {
}

/**
 * Implementation of template_preprocess().
 */
function nuovis_preprocess_block(&$variables) {
}

/**
 * Implementation of template_preprocess().
 */
function nuovis_preprocess_field(&$variables) {
}

/*** PROCESS FUNCTIONS ***/

/*** ALTER FUNCTIONS ***/

/*** TEHEME FUNCTIONS ***/

/**
 * Override theme_menu_local_tasks().
 */
function nuovis_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables ['primary'])) {
    $variables ['primary']['#prefix'] = '<h2 class="tabs__title element-invisible">' . t('Primary tabs') . '</h2>';
    $variables ['primary']['#prefix'] .= '<ul class="tabs tabs--primary">';
    $variables ['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables ['primary']);
  }
  if (!empty($variables ['secondary'])) {
    $variables ['secondary']['#prefix'] = '<h2 class="tabs__title element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables ['secondary']['#prefix'] .= '<ul class="tabs tabs--secondary">';
    $variables ['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables ['secondary']);
  }

  return $output;
}

/*** HELPER FUNCTIONS ***/
