<div id="first">
  <div class="bef-hed" id="Before-Header">
    <?php print render($page['before_header']); ?>
  </div>
  <div id="Before-Header-centr">
    <img  src="/sites/all/themes/bartik/yonuferko/img/titl_menu.jpg" alt="titl_menu">
    <?php print render($page['before_header_centr']); ?>
  </div>
</div>
<div  id="Before-Header-right">
  <?php print render($page['before_header_right']); ?>
  <button href="#" ></button>
</div>
<div id="center">
  <div id="news_brows_default">
    <span>
     <?php
      print render(field_view_field('node', $node, 'field_date_article', array(
        'label' => 0,
      )));
      ?>
      </span>
    <h3>
    <?php
      print render(field_view_field('node', $node, 'field_title', array(
        'label' => 0,
      )));
      ?>
    </h3>
   <?php
        print render(field_view_field('node', $node, 'field_image', array(
          'label' => 0,

        )));

    print render(field_view_field('node', $node, 'body', array(
      'type' => 'text_summary_or_trimmed',
      'label' =>0,
    )));
    ?>
</div>
<div  id="Footer">
  <?php print render($page['footer']); ?>
  </div>

