<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function autumn_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  autumn_preprocess_html($variables, $hook);
  autumn_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */

function autumn_preprocess_html(&$variables, $hook) {

    // set footer column classes
    if (!empty($variables['page']['footer_first']) && !empty($variables['page']['footer_second']) && !empty($variables['page']['footer_third'])) {
        $variables['classes_array'][] = 'three-footers';
    } elseif (!empty($variables['page']['footer_first']) && !empty($variables['page']['footer_second'])) {
        $variables['classes_array'][] = 'footer1-footer2';
    } elseif (!empty($variables['page']['footer_first']) && !empty($variables['page']['footer_third'])) {
        $variables['classes_array'][] = 'footer1-footer3';
    } elseif (!empty($variables['page']['footer_second']) && !empty($variables['page']['footer_third'])) {
        $variables['classes_array'][] = 'footer2-footer3';
    } elseif (!empty($variables['page']['footer_first'])) {
        $variables['classes_array'][] = 'first-footer';
    } elseif (!empty($variables['page']['footer_second'])) {
        $variables['classes_array'][] = 'second-footer';
    } elseif (!empty($variables['page']['footer_third'])) {
        $variables['classes_array'][] = 'third-footer';
    } else {
        $variables['classes_array'][] = 'no-footers';
    }
    
    // set class when nice menu is turned on
    if (!empty($variables['page']['vertical_menu'])) {
        $variables['classes_array'][] = 'vertical-menu';
    }

    // set class when navigation region is being used
    if (!empty($variables['page']['navigation'])) {
        $variables['classes_array'][] = 'navigation-bar';
    }
} // autumn_preprocess_html end

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */

function autumn_preprocess_page(&$variables, $hook) {
  $variables['vertical_menu'] = theme_get_setting('vertical_menu');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function autumn_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // autumn_preprocess_node_page() or autumn_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function autumn_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/*
function autumn_preprocess_region(&$variables, $hook) {
  
  
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function autumn_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

/*
function autumn_nice_menus_main_menu($variables) {
  
    
    
  $direction = $variables['direction'];
  $depth = $variables['depth'];
  $menu_name = variable_get('menu_main_links_source', 'main-menu');
  $output = theme('nice_menus', array('id' => 0, 'menu_name' => $menu_name, 'mlid' => 0, 'direction' => $direction, 'depth' => $depth));
  return $output['content'];
}*/