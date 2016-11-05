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

    <button href="#" ></button>
</div>
<div id="Header">
    <?php print render($page['header']); ?>
    <!-- visible logo-->
    <?php //if ($title == ""): ?>
     <!-- <img  src="/sites/all/themes/bootstrap/yonuferko/img/logo2.png" alt="logo">
    <input placeholder="Поиск">
     </input>  -->
    <?php //endif; ?>
</div>

<div id="Slider">
    <?php print render($page['slider']); ?>
    <?php //print $title; ?>
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

<div  id="Footer">
  <?php print render($page['footer']); ?>
  <br><br>

  <table>
  <tr>
    <th>Cлужба поддержки</th>
    <th>Информация</th>
    <th>Контакты</th>
    <th>Присоединяйтесь</th>
  </tr>
  <tr>
      <td> Проверка и статус заказа</td>
      <td>О компании</td>
      <td>&#10004г. Киев, Бесарабская пл.</td>
    <td>Доступ к информации о подарках и новинках</td>
  </tr>
  <tr>
      <td>Способы доставки</td>
      <td>Гарантия</td>
      <td>&#xe011info@mrlook.com.ua</td>
    <td><input placeholder ='&#xe011' type="text"></td>
  </tr>
  <tr>
    <td>Возврат и обмен </td>
    <td>mr.Fix</td>
    <td>&#9990(044) 24 799 43</td>
    <td>Социальные сети</td>
  </tr>
  <tr>
    <td>Онлайн чат поддержка</td>
    <td>Помощь</td>
    <td>&#9990(044) 24 799 43</td>
  </tr>
  <tr>
    <td> Подарочные сертификаты</td>
    <td>Производители</td>
    <td></td>
  </tr>
</table>




  </div>

