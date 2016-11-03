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
  <!--<a href="#"><img src="/sites/all/themes/bootstrap/yonuferko/img/korz.jpg" alt="Пример"></a>
-->
    <button href="#" ></buttonhr>
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

    <div  id="Footer-Left">
        <?php print render($page['footer-left']); ?>
        <h2>Cлужба поддержки</h2>
        <ul>
            <li>Проверка статуса заказа</li>
            <li>Способы доставки</li>
            <li>Возврат и обмен</li>
            <li>Онлайн чат поддержка</li>
            <li>Подарочные сертификаты</li>
        </ul>
    </div>
    <div  id="Footer">
        <?php print render($page['footer']); ?>
        <h2>Информация</h2>
        <ul>
            <li>О компании </li>
            <li>Гарантия</li>
            <li>mr.Fix</li>
            <li>Помощь</li>
            <li>Производители</li>
        </ul>
    </div>
    <div  id="Footer-Right">
        <?php print render($page['footer-right']); ?>
        <h2>Контакты</h2>
        <ul>
            <li> &#10004г. Киев, Бесарабская пл.  </li>
            <li>&#xe011info@mrlook.com.ua</li>
            <li>&#9990(044) 24 799 43</li>
            <li>&#9990(044) 24 799 34<li>
    </div>
    <div  id="Footer-Right1">
        <?php print render($page['footer-right1']); ?>
        <h2>Присоединяйтесь</h2>
        <li>Доступ к информации о подарках и новинках<li>
            <input placeholder ='&#xe011' type="text">
        <li>Социальные сети<li>
    </div>