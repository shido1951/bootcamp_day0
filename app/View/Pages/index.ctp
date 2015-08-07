<div class="row container-side">
  <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
    <article class="row">
      <div class="col-sm-3">
        <h3>2015-08-04</h3>

      </div>
      <div class="col-sm-9">
        <h2>吾輩は猫である</h2>
        <p>少々分かりにくいのですが、本来であればページ最下部にくるべき
          フッター（コピーライト表示）部分が、floatの解除がないためそのまま
          メインスペース部分に回りこみ、サイドバーの直下に表示されてしまっています。
          このようにならないよう、floatを解除するためのプロパティが「clear」
          です。回り込ませたくない部分のセレクタに「clear:both」と記載することで、
          回り込みが回避されちゃんと下に表示されるようになります。clear用の
          セレクタを用意しておくの</p>
        <p><a href="/detail/1"><h3>Continue Reading ..... </h3></a></p>
        <span class="fa fa-tags"></span>
        <a href="">夏目漱石</a>
        <a href="">小説</a>
        <a href="">明治時代</a>
      </div>
    </article>

  </div>
  <?php echo $this->element('aside') ;?>
</div>
