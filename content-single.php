<div class="topic_box">
    <div class="topic_box_img">
      <div><?php the_post_thumbnail('news-img'); ?></div>
    </div>
    <div class="topic_box_text">
      <div>
        <p><?php the_time('Y.m.d'); ?></p>
      </div>
      <div class="topic_box_text_title">
        <h2><?php the_title(); ?></h2>
      </div>
      <div>
        <p><?php the_content(); ?></p>
      </div>
    </div>
  </div>