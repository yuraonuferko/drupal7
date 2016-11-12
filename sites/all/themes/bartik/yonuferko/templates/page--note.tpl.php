
<div id="first">
  <div class="bef-hed" id="Before-Header">
    <?php print render($page['before_header']); ?>

  </div>
  <div id="Before-Header-centr"><!--(044) 963 25 14
        <p> с 10:00 до 20:00<p>-->
    <img  src="/sites/all/themes/bartik/yonuferko/img/titl_menu.jpg" alt="titl_menu">
    <?php print render($page['before_header_centr']); ?>
  </div>
</div>
<div  id="Before-Header-right">
  <?php print render($page['before_header_right']); ?>

  <button href="#" ></button>
</div>
<div id="center">
  <div id="note_default">


      <h3>Не упустите свой шанс, акция действует только до</h3>
      <p>
        <?php
      print render(field_view_field('node', $node, 'field_date', array(
        'label' => 0,

      )));

      ?>
      <p>
    <?php //print_r($page['content']); ?>
    <?php //print render($page['content']); ?>
    <?php //print render($page['content']['#body']); ?>

   <?php
    //$node = node_load($node->nid);
    //print $node;
    //$field = field_get_items("note", $node, "body");
    //print print_r(field_view_field('node', $node, 'body'));
    //$output = field_view_value("node", $node, "body", $field[$delta]);*/
    print render(field_view_field('node', $node, 'field_img', array(
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

