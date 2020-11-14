/* global  AjaxZip3 */
jQuery(function($) {
  // セレクトボックスのデフォルト文
  // $('select option[value=""]').html('----')
  // アップロードするファイルのパスを掲載
  // $('input[type=file]').on('change', 'input', function() {
  //   $('#upval').html(this.value)
  // })
  // jQuery-Validation-Engine
  const formDOM = $('.mw_wp_form')

  $('[name^="ok"]').attr('data-errormessage', '同意の上チェックしてください')
  formDOM.find('form').validationEngine({
    scrollOffset: 200
  })
  // jQuery-Validation-Engine for MW WP Form
  /*
  必須入力
  validate【required】
  指定の書式
  validate【custom【email】】
  validate【custom【phone】】
  validate【custom【url】】
  custom【date】
  指定IDと入力内容が一致
  validate【equals【id】】
  指定IDがチェック済みなら必須入力に変更
  validate【condRequired【id】】
  指定範囲の文字数
  validate【maxSize【10】】
  validate【minSize【10】】
  整数のみ
  validate【custom【integer】】
  数字のみ
  validate【custom【number】】
  英数字のみ
  validate【custom【onlyLetterNumber】】
  英字と空白のみ
  validate【custom【onlyLetterSp】】
  数字と空白のみ
  validate【custom【onlyNumberSp】】
  指定範囲の数値
  validate【min【-5】】
  validate【max【30】】
  指定範囲の日付
  validate【custom【date】,past【2010/01/01】】
  validate【custom【date】,future【NOW】】
  チェックボックスのチェック数
  validate【minCheckbox【2】】
  validate【maxCheckbox【2】】
  */
  formDOM.find('input,textarea,select').each(function() {
    var domclass = $(this).attr('class')
    if (domclass) {
      domclass = domclass.replace(/【/g, '[').replace(/】/g, ']') // ショートコード誤認回避の【】を[]に戻す
      $(this).attr('class', domclass)
    }
  })
  $(window).on('load scroll resize focus blur click ', function() {
    $('input[type="submit"]').removeAttr('disabled') // MW側のSubmit禁止処理を外す
  })

  // PrettyBox for MW WP Form
  /*
  ラジオボタンとチェックボックスのクオリティを上げる
  JSは無し　_js.scssでSCSSだけインポートする
  クラスは公式ドキュメントで調べる
  https://lokesh-coder.github.io/pretty-checkbox/
  */
  // $('.mwform-checkbox-field').each(function() {
  //   $(this)
  //     .addClass('pretty p-default p-thick p-pulse') // チェックボックスをPrettyBoxに変更
  //     .find('.mwform-checkbox-field-text')
  //     .unwrap()
  //     .wrap('<div class="state p-primary-o"><label></label></div>') // MWのlabelを剥がしてPBox用MWのlabelを貼り直す
  // })

  // $('.mwform-radio-field').each(function() {
  //   $(this)
  //     .addClass('pretty p-default p-round p-thick p-pulse') // ラジオボタンをPrettyBoxに変更
  //     .find('.mwform-radio-field-text')
  //     .unwrap()
  //     .wrap('<div class="state p-primary-o"><label></label></div>') // MWのlabelを剥がしてPBox用MWのlabelを貼り直す
  // })

  // 電話番号、郵便番号最適化
  // $('input[name="tel"],input[name="zip"]').on('input change click keyup paste', function() {
  //   // 数字系データを整理
  //   var txt = $(this).val()
  //   var han = txt.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
  //     // 半角変換
  //     return String.fromCharCode(s.charCodeAt(0) - 0xfee0)
  //   })
  //   han = han.replace(/[〒－\- 　]/gi, '') // ハイフン、郵便マーク除去
  //   $(this).val(han)
  // })
  // AjaxZip3
  $('#zipsearch').on('click', function() {
    $('input[name=zip]').each(function() {
      // 「zip」の郵便番号で見つけた住所を「address」に挿入
      AjaxZip3.zip2addr(this, '', 'address', 'address')
    })
  })

  // メールアドレス最適化
  // $('input[name="email"],input[name="email1"],input[name="email2"]').on('input change click keyup paste', function() {
  //   // メールアドレスを半角変換
  //   var txt = $(this).val()
  //   var han = txt.replace(/[Ａ-Ｚａ-ｚ０-９＠－．]/g, function(s) {
  //     // 半角変換
  //     return String.fromCharCode(s.charCodeAt(0) - 0xfee0)
  //   })
  //   $(this).val(han)
  // })
})
