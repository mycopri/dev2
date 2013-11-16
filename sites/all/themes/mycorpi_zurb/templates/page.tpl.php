<div class="row">
  <?php if ($linked_site_name || $linked_logo): ?>
    <div style="padding-top: 15px" class="two mobile-one columns text-left">
      <?php if ($linked_logo): ?>
        <?php print $linked_logo; ?>
      <?php endif; ?>
    </div>
    <div style="padding-top: 30px" class="ten mobile-three columns hide-for-small text-left">
      <?php if ($is_front): ?>
        <h1 style="font-size: 32px" id="site-name "><strong><?php print $linked_site_name; ?></h1>
      <?php else: ?>
        <div style="font-size: 32px" id="site-name"><strong><?php print $linked_site_name; ?></div>
      <?php endif; ?>
    </div>
    <div style="padding-top: 30px" class="ten mobile-three columns show-for-small text-left">
      <?php if ($is_front): ?>
        <h1 style="font-size: 21px" id="site-name "><?php print $linked_site_name; ?></h1>
      <?php else: ?>
        <div style="font-size: 21px" id="site-name"><?php print $linked_site_name; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div>

<?php if (!empty($page['header'])): ?>
  <div class="row">
    <div class="twelve columns">
      <?php print render($page['header']);?>
    </div>
  </div>
<?php endif; ?>

<?php if ($main_menu_links || !empty($page['navigation'])): ?>
  <div class="row">
    <nav class="twelve columns">
      <?php if (!empty($page['navigation'])): ?>
        <?php print render($page['navigation']);?>
      <?php else: ?>
        <?php print $main_menu_links; ?>
      <?php endif; ?>
    </nav>
  </div>
<?php endif; ?>

<?php if ($site_slogan): ?>
  <div class="row">
    <div class="twelve columns panel radius">
      <?php print $site_slogan; ?>
    </div>
  </div>
<?php endif; ?>
<div class="row">
  <div id="main" class="<?php print $main_grid; ?> columns">
    <?php if ($breadcrumb): print $breadcrumb; endif; ?>  
    <?php if ($messages): print $messages; endif; ?>
    <?php if (!empty($page['help'])): print render($page['help']); endif; ?>
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight panel callout">
        <?php print render($page['highlighted']); ?>
      </div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php if ($title && !$is_front): ?>
      <?php print render($title_prefix); ?>
      <h1 id="page-title" class="title"><?php print $title; ?></h1>
      <?php print render($title_suffix); ?>
    <?php endif; ?>

    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
      <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
    <?php endif; ?>
    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  </div>
  <?php if (!empty($page['sidebar_first'])): ?>
    <div id="sidebar-first" class="<?php print $sidebar_first_grid; ?> columns sidebar">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['sidebar_second'])): ?>
    <div id="sidebar-second" class="<?php print $sidebar_sec_grid; ?> columns sidebar">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
</div>
<?php if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
  <footer class="row">
    <?php if (!empty($page['footer_first'])): ?>
      <div id="footer-first" class="four columns">
        <?php print render($page['footer_first']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_middle'])): ?>
      <div id="footer-middle" class="four columns">
        <?php print render($page['footer_middle']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_last'])): ?>
      <div id="footer-last" class="four columns">
        <?php print render($page['footer_last']); ?>
      </div>
    <?php endif; ?>
  </footer>
<?php endif; ?>
<div class="bottom-bar panel">
  <div class="row">
    <div class="twelve columns text-center">
       An Institute of the American Society of Civil Engineers<br><a href="http://www.asce.org/lib/copyright/copy.cfm" target="_blank">Copyright© 2009 - 2013</a>&nbsp;| <a href="http://www.asce.org/lib/copyright/privacy.cfm" target="_blank">Privacy </a>| <a href="http://www.asce.org/lib/copyright/legal.cfm" target="_blank">Terms and Conditions</a>
    </div>
  </div>
</div>
