<?php
// $Id: panels-pane.tpl.php,v 1.1.2.1 2009/10/13 21:38:52 merlinofchaos Exp $
/**
 * @file panels-pane.tpl.php
 * Main panel pane template
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
?>
<div class="<?php print $classes; ?>" <?php print $id; ?>>
  <?php if ($admin_links): ?>
    <div class="admin-links panel-hide">
      <?php print $admin_links; ?>
    </div>
  <?php endif; ?>

  <?php if ($title): ?>
    <h2 class="pane-title"><?php print $title; ?></h2>
  <?php endif; ?>

  <?php if ($feeds): ?>
    <div class="feed">
      <?php print $feeds; ?>
    </div>
  <?php endif; ?>

  <?php
    if (!drupal_is_front_page() && arg(0) == 'node') {
    	$destination = drupal_get_destination();
    	$node = node_load(arg(1));
      switch ($title) {
      	case 'Discussions':
      		//print '<a href="add/blog-post?gids[]=' . arg(1) . '">Add a Post</a>'; 
      		break;
      	case 'Events':
      		//print '<a href="add/event?gids[]=' . arg(1) . '">Add an Event</a>'; 
          break;
        case 'Action':
          //print '<a href="add/blog-post?gids[]=' . arg(1) . '">Add an Action</a>'; 
          break;
        case 'Recent Images':
          //print '<a href="add/image?gids[]=' . arg(1) . '&op=image&' . $destination . '">Add an Image</a>'; 
          break;          
      }
      //dsm($header);
    }
  ?>

  <div class="pane-content">
    <?php print $content; ?>
  </div>

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <div class="more-link">
      <?php print $more; ?>
    </div>
  <?php endif; ?>
</div>
