<?php 
/**
 * @file
 * Alpha's theme implementation to display a zone.
 */
?>
<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
    <?php if(drupal_is_front_page()): ?><h1 class="element-invisible">Digital Library Resources</h1><?php endif; ?>
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>