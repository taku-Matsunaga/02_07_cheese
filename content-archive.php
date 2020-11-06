<a class="archive_box" href="<?php the_permalink(); ?>">
      <div>
        <p><?php the_time('Y.m.d'); ?></p>
        <div><?php the_post_thumbnail('news-img'); ?></div>
      </div>
      <div class="archive_box_title">
        <p><?php the_title(); ?></p>
      </div>
    </a>