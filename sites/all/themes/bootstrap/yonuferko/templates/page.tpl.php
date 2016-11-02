<div id="first">
    <div class="bef-hed" id="Before-Header">
        <?php print render($page['before_header']); ?>
    </div>
    <div id="Before-Header-centr">(044) 963 25 14
        <p> с 10:00 до 20:00<p>
    <?php print render($page['before_header_centr']); ?>
    </div>
</div>
<div  id="Before-Header-right">
    <?php print render($page['before_header_right']); ?>
  <a href="#"><img src="/sites/all/themes/bootstrap/yonuferko/img/korz.jpg" alt="Пример"></a>
</div>
<div id="Header">
    <?php print render($page['header']); ?>
    <!-- visible logo-->
    <?php if ($title == ""): ?>
      <img  src="/sites/all/themes/bootstrap/yonuferko/img/logo2.png" alt="logo">
    <input placeholder="Поиск">
     </input>
    <?php endif; ?>
</div>
<div id="Slider">
    <?php print render($page['slider']); ?>
    <?php print $title; ?>
</div>
<div id="Before-Main">
    <?php print render($page['before-main']); ?>
</div>
<div id="Before-Content">
    <?php print render($page['before-content']); ?>
</div>
<div id="center">
    <div id="Aside-Left">
        <?php print render($page['aside-left']); ?>
    </div>
    <div id="Content">
        <?php print render($page['content']); ?>
    </div>
    <div id="Aside-Right">
        <?php print render($page['aside-right']); ?>
    </div>
</div>
<div id="After-Content">
    <?php print render($page['after-content']); ?>
</div>
<div id="After-Main">
    <?php print render($page['after-main']); ?>
</div>
<div id="Footer">
    <?php print render($page['footer']); ?>
</div>
