<?php

/**
 * @var $this    \yii\web\View
 * @var $logoUrl string
 */

?>
<header>
  <div class="container">
    <div class="row">
      <div class="col-2">
        <a href="/">
          <img src="<?= $logoUrl ?>" alt="logo">
        </a>
      </div>
      <div class="col-10">
        <div class="row align-items-center">
          <div class="col-2">
            <div>000 298-22-12</div>
            <div>000 298-22-12</div>
          </div>
          <div class="col-7">
            <div class="info">
              <ul class="inline">
                <li><a href="/" class="link">How to buy</a></li>
                <li><a href="/" class="link">Payment</a></li>
                <li><a href="/" class="link">Delivery</a></li>
                <li><a href="/" class="link">Contacts</a></li>
                <li><a href="/" class="link">Question answer</a></li>
              </ul>
            </div>
            <div class="search">
              <form action="/search" method="get">
                <input type="text" class="input" placeholder="Search product ...">
              </form>
            </div>
          </div>
          <div class="col-3">
            <div class="user-actions">
              <a href="/">
                <i class="far fa-heart"></i>
              </a>
              <a href="/">
                <i class="far fa-heart"></i>
              </a>
              <a href="/cart">
                <i class="fas fa-shopping-cart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<nav>
  <div class="container">
    <ul class="inline">
      <li><a href="/">Spare parts</a></li>
      <li><a href="/">Consumables</a></li>
      <li><a href="/">Accessories</a></li>
      <li><a href="/">Tires</a></li>
      <li><a href="/">Discs</a></li>
    </ul>
  </div>
</nav>