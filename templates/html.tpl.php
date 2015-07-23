<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!-- Universal Analytics -->
          <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-17568113-1', 'vigo.lib.in.us');
          ga('require', 'linkid', 'linkid.js');
          ga('set', 'anonymizeIp', true);
          ga('send', 'pageview');

        </script>
    <!-- End Universal Analytics -->
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <ul class="skiplinknav">
        <li><a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></li>
        <li><a href="#superfish-1" class="element-invisible element-focusable"><?php print t('Skip to main menu'); ?></a></li>
        <li><a href="#region-sidebar-first" class="element-invisible element-focusable"><?php print t('Skip to side bar menu'); ?></a></li>
    </ul>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>