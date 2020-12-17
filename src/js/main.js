/* global  */ // tUrl等のグローバル変数を宣言する
import Swiper from 'swiper' // Swiper
// import PerfectScrollbar from 'perfect-scrollbar' // 独自スクロールバー
// position:styckyのポリフィル
// Stickyfill.add(document.querySelectorAll('.sticky'))

jQuery(function ($) {
  // ######  ##      ## #### ########  ######## ########
  // ##    ## ##  ##  ##  ##  ##     ## ##       ##     ##
  // ##       ##  ##  ##  ##  ##     ## ##       ##     ##
  //  ######  ##  ##  ##  ##  ########  ######   ########
  //       ## ##  ##  ##  ##  ##        ##       ##   ##
  // ##    ## ##  ##  ##  ##  ##        ##       ##    ##
  //  ######   ###  ###  #### ##        ######## ##     ##
  if ($('.MV-swiper__container')[0]) {
    // Swiperコンテナを検出したら実行
    const mvSwiper = new Swiper('.MV-swiper__container', {
      effect: 'cube', // slide,fade,cube,coverflow
      speed: 1500, // アニメ速度
      loop: true, // ループ
      loopAdditionalSlides: 5, //ループ演出用のクローン数を増やして安定化させる
      centeredSlides: true,
      slidesPerView: 1, //表示数変更
      autoplay: {
        delay: 5000, // 待機時間
        disableOnInteraction: false // 操作されたらオート解除
      },
      navigation: {
        nextEl: '.MV-swiper-button-next',
        prevEl: '.MV-swiper-button-prev'
      },
      pagination: {
        el: '.MV-swiper-pagination',
        // clickable: true
        type: 'fraction'
      }
    })
  }
  // ######   #######   #######  ##    ## #### ########
  // ##    ## ##     ## ##     ## ##   ##   ##  ##
  // ##       ##     ## ##     ## ##  ##    ##  ##
  // ##       ##     ## ##     ## #####     ##  ######
  // ##       ##     ## ##     ## ##  ##    ##  ##
  // ##    ## ##     ## ##     ## ##   ##   ##  ##
  //  ######   #######   #######  ##    ## #### ########
  /* global Cookies */
  // Cookies.remove('opFlag')
  const opFlag = Cookies.get('opFlag')
  if (opFlag !== 1) {
    Cookies.set('opFlag', 1, { expires: 1 / 24, path: '/' }) //Cookie定義
  }
  // ######## ########  ##     ## ##    ## ##    ##  #######
  //    ##    ##     ## ##     ## ###   ## ##   ##  ##     ##
  //    ##    ##     ## ##     ## ####  ## ##  ##   ##     ##
  //    ##    ########  ##     ## ## ## ## #####     #######
  //    ##    ##   ##   ##     ## ##  #### ##  ##   ##     ##
  //    ##    ##    ##  ##     ## ##   ### ##   ##  ##     ##
  //    ##    ##     ##  #######  ##    ## ##    ##  #######
  function trunk8() {
    $('.js-t8.line4').trunk8({
      // 指定要素に行数制限をかける
      lines: 4,
      fill: '...'
    })
    $('.js-t8.line3').trunk8({
      // 指定要素に行数制限をかける
      lines: 3,
      fill: '...'
    })
    $('.js-t8.line2').trunk8({
      // 指定要素に行数制限をかける
      lines: 2,
      fill: '...'
    })
    $('.js-t8.line1').trunk8({
      // 指定要素に行数制限をかける
      lines: 1,
      fill: '...'
    })
  }
  if ($('.js-t8')[0]) {
    // 要素を検出したら実行
    trunk8()
    $(window).on('load resize ', function () {
      trunk8()
    })
  }
})
