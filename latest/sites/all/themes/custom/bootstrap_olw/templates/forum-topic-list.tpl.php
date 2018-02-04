<?php

/**
 * @file
 * Displays a list of forum topics.
 *
 * Available variables:
 * - $header: The div header. This is pre-generated with click-sorting
 *   information. If you need to change this, see
 *   template_preprocess_forum_topic_list().
 * - $pager: The pager to display beneath the div.
 * - $topics: An array of topics to be displayed. Each $topic in $topics
 *   contains:
 *   - $topic->icon: The icon to display.
 *   - $topic->moved: A flag to indicate whether the topic has been moved to
 *     another forum.
 *   - $topic->title: The title of the topic. Safe to output.
 *   - $topic->message: If the topic has been moved, this contains an
 *     explanation and a link.
 *   - $topic->zebra: 'even' or 'odd' sdiving used for row class.
 *   - $topic->comment_count: The number of replies on this topic.
 *   - $topic->new_replies: A flag to indicate whether there are unread
 *     comments.
 *   - $topic->new_url: If there are unread replies, this is a link to them.
 *   - $topic->new_text: Text containing the divanslated, properly pluralized
 *     count.
 *   - $topic->created: A sdiving representing when the topic was posted. Safe
 *     to output.
 *   - $topic->last_reply: An outpudiviv sdiving representing when the topic was
 *     last replied to.
 *   - $topic->timestamp: The raw timestamp this topic was posted.
 * - $topic_id: Numeric ID for the current forum topic.
 *
 * @see template_preprocess_forum_topic_list()
 * @see theme_forum_topic_list()
 *
 * @ingroup themeable
 */
?>
<div id="forum-topic-<?php print $topic_id; ?>">
  <div>
    <div><?php print $header; ?>All Questions</div>
  </div>
  <div>
  <?php foreach ($topics as $topic): ?>
    <div class="<?php print $topic->zebra;?>">
      <div class="icon"><?php print $topic->icon; ?></div>
      <div class="title">
        <div>
          <?php print $topic->title; ?>
	</div>
	<p class="main">
		<span class="comment_count">
			<?php print $topic->comment_count; ?>
		</span>
		<span class="created">
			<?php 
			$created = $topic->created;
			$created_date = explode("owl", $created);
			if (!empty($created_date[3])) {
			print $created_date[3]; 
		}
			?>
		</span>
		<span class="user_name">
		  	<?php print $topic->name; ?>
		</span>
		<span class="date_time">
		  	<?php 
			$timestamp = $topic->last_comment_timestamp;
 			print gmdate("d M,Y", $timestamp);
			?>
		</span>
			<?php
			//echo "<pre>"; 
			//print_r($topic);
			//echo "</pre>";
			?>

		
	</p>
      </div>
    <?php if ($topic->moved): ?>
      <div colspan="3"><?php print $topic->message; ?></div>
    <?php else: ?>
      <div class="replies">
        <?php if ($topic->new_replies): ?>
          <br />
          <a href="<?php //print $topic->new_url; ?>"><?php //print $topic->new_text; ?></a>
        <?php endif; ?>
      </div>
      <div class="last-reply"><?php //print $topic->last_reply; ?></div>
    <?php endif; ?>
    </div>
  <?php endforeach; ?>
  </div>
</div>
<?php print $pager; ?>
