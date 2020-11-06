<?php get_header(); ?>

  <main>
    <section class="about observe" id="about">
      <div class="about_text">
        <h2>ABOUT</h2>
        <p class="about_text_1st">チーズアカデミーについて</p>
        <p class="about_text_2nd">チーズアカデミーは，チーズ職人養成学校です．</p>
        <p class="about_text_3rd">チーズの素晴らしさを，自給自足を通じて，できるだけ多くの人に知っていただきたい．</p>
        <p>そして，食卓にはいつもチーズがあった，あの頃の当たり前をこの手で取り戻したい．</p>
        <p class="about_text_4th">そんな思いから，チーズ職人養成学校「チーズアカデミーFUKUOKA」は歩みを始めています．</p>
        <p class="about_text_5th">卒業後，チーズ自給自足のバックアップはもちろんのこと，<br> チーズ職人への就職・転職もサポートします．</p>
      </div>
      <div class="about_img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about_01.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about_02.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about_03.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about_04.jpg" alt="">
      </div>
    </section>

    <section class="course observe" id="course">
      <div class="course_text">
        <h2>COURSE</h2>
        <p>未経験からでもスタートができるよう，カリキュラムは多くの専門家や</p>
        <p>現役チーズ職人のアドバイスのもと，作られました．</p>
      </div>

      <div class="course_box">
        <div class="course_box_list">
          <div class="course_box_list_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/course_01.jpg" alt="">
          </div>
          <div class="course_box_list_item">
            <div>
              <h3>本格的な農園を使った実地研修</h3>
              <p>
                チーズアカデミーでは，本格的な農園を使った実地研修を行うことができます．プロとして活躍するチーズ職人も使用するような，広大で環境も整った農園を余すところなく使い，卒業時には本格的なチーズを自分の力で作れる実践力の養成を目指します．
              </p>
            </div>
          </div>
        </div>

        <div class="course_box_list reverse">
          <div class="course_box_list_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/course_02.jpg" alt="">
          </div>
          <div class="course_box_list_item">
            <div class="reverse_margin">
              <h3>必要な知識もしっかりと取得</h3>
              <p>
                チーズ作りには，しっかりとした食に関する知識が欠かせません．チーズアカデミーでは，一流講師陣による，チーズ作りに必要ないろはを余すところなく学べます．チーズそのものでなく，栄養学全般を学ぶことも可能ですので，チーズ以外への展開も夢ではないでしょう．
              </p>
            </div>
          </div>
        </div>

        <div class="course_box_list">
          <div class="course_box_list_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/course_03.jpg" alt="">
          </div>
          <div class="course_box_list_item">
            <div>
              <h3>卒業制作はティスティング審査あり</h3>
              <p>
                チーズアカデミーでは最後の2ヶ月間で卒業制作を実施．卒業制作として，チーズ作りを実際に行います．卒業後，一般参加によるティスティング審査があるため，作り手の目線だけでなく，消費者の目線から，卒業制作作品としてのチーズを，しっかりと評価いただくことができます．
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="news observe" id="news">
<?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
      <div class="news_title">
        <h2>NEWS</h2>
        <p>ニュース</p>
      </div>

      <div class="news_box">

<?php
$args = array(
  'post_type' => 'post',
  'category_name' => 'news',
  'posts_per_page' => 3,
);

$news_posts = new WP_Query($args);
if($news_posts->have_posts()):
  while($news_posts->have_posts()):$news_posts->the_post();
?>

        <a class="news_box_item" href="<?php the_permalink(); ?>">
         <?php the_post_thumbnail('news-img'); ?>
          <p class="news_box_item_date"><?php the_time('Y.m.d'); ?></p>
          <p><?php the_title(); ?></p>
        </a>

<?php
endwhile;
wp_reset_postdata();
endif;
?>

      </div>

      <div class="news_btn" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
        <button>More</button>
      </div>
    </section>

    <section class="access observe" id="access">
      <div class="access_container">
        <div class="access_container_title">
          <h2>ACCESS</h2>
          <p>会社情報</p>
        </div>

        <div class="access_map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.7180644101118!2d130.39228031515233!3d33.58666874956824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191aa0929fbdf%3A0xd5e535b27b5236c6!2z44K444O844K644Ki44Kr44OH44Of44O856aP5bKh77yP6LW35qWt5a6244O744Ko44Oz44K444OL44Ki6aSK5oiQ5a2m5qCh77yI44OX44Ot44Kw44Op44Of44Oz44Kw77yJ!5e0!3m2!1sja!2sjp!4v1604115285787!5m2!1sja!2sjp"
            width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>

        <div class="access_container_box">
          <table class="access_container_box_table">
            <tbody>
              <tr>
                <th>学校名</th>
                <td>チーズアカデミーFUKUOKA</td>
              </tr>
              <tr>
                <th>事務所所在地</th>
                <td>〒810-0041 福岡県福岡市中央区大名1丁目3-41 プリオ大名ビル1F</td>
              </tr>
              <tr>
                <th>TEL</th>
                <td>000-000-0000</td>
              </tr>
              <tr>
                <th>FAX</th>
                <td>999-999-9999</td>
              </tr>
              <tr>
                <th>MAIL</th>
                <td>dummy@cheeseacademy.tokyo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="contact observe" id="contact">
      <div class="contact_title">
        <h2>CONTACT</h2>
        <p>説明会お申し込み・お問い合わせ</p>
      </div>
      <div class="contact_text">
        <p>ぜひ1度，足を運んでみませんか．説明会は随時開催中．</p>
        <p>その他，お問い合わせもお気軽にどうぞ．お待ちしております．</p>
        <p class="contact_text_last">※チーズアカデミーは実際には存在しません．<br>間違っても問い合わせしないようお願いいたします．</p>
      </div>

      <form class="contact_form" action="" method="POST">
        <dl>
          <div class="contact_form_list">
            <dt>
              <label for="name">名前</label>
            </dt>
            <dd>
              <input class="enter" type="text" id="name" name="name">
            </dd>
          </div>
          <div class="contact_form_list">
            <dt>
              <label for="kana">カナ</label>
            </dt>
            <dd>
              <input class="enter" type="text" id="kana" name="kana">
            </dd>
          </div>
          <div class="contact_form_list">
            <dt>
              <label for="email">メールアドレス</label>
            </dt>
            <dd>
              <input class="enter forty" type="email" id="email" name="email">
            </dd>
          </div>
          <div class="contact_form_list">
            <dt>
              <p class="list_purpose">志望動機</p>
            </dt>
            <div class="contact_form_list_check">

              <dd>
                <div>
                  <input type="checkbox" id="purpose" name="build">
                  <label for="purpose">起業したい</label>
                </div>
              </dd>
              <dd>
                <div>
                  <input type="checkbox" id="change" name="build">
                  <label for="change">チーズ系企業に就職・転職したい</label>
                </div>
              </dd>
              <dd>
                <div>
                  <input type="checkbox" id="growup" name="build">
                  <label for="growup">チーズと関わる仕事をしており，仕事に生かしたい</label>
                </div>
              </dd>
              <dd>
                <div class="thrtytwo">
                  <input type="checkbox" id="learn" name="build">
                  <label for="learn">チーズの教養を身につけたい</label>
                </div>
              </dd>
            </div>

          </div>
          <div class="contact_form_list">
            <dt>
              <label for="text">詳細</label>
            </dt>
            <dd>
              <textarea name="text" id="text" cols="30" rows="10"></textarea>
            </dd>
          </div>
        </dl>

        <div class="contact_form_btn">
          <input type="submit" value="送信">
        </div>
      </form>
    </section>

    <div id="js-scroll-fadein" class="js-scroll-fadein arrow"></div>

  </main>

<?php get_footer(); ?>