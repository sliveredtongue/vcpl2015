<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
<?php if ($search_results): ?>
  <h2><?php print t('Search results');?></h2>
  <ol class="search-results <?php print $module; ?>-results">
    <?php print $search_results; ?>
  </ol>
  <?php print $pager; ?>
<?php else : ?>
  <div class="search-no-results">
  <h2><?php print t('Your search yielded no results');?></h2>
  <?php print search_help('search#noresults', drupal_help_arg()); ?>
  <p>To locate Special Collections Online Resources, please visit <a href="http://www.vigo.lib.in.us/archives/onlinebooks.php" title="Local History Books Online">Local History Books Online</a>, <a href="http://www.vigo.lib.in.us/archives/oralhistory.php">the Oral History Index</a> or <a href="http://www.vigo.lib.in.us/archives/inventories_index.php">the Collections Inventories Master List</a>.
  </div>
<?php endif; ?>
