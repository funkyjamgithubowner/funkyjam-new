<!-- Header -->
<header class="text-center">
    <div class="artist-intro-text">
    <div class="clearfix"></div>
</header>

<div id="breadcrumb">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 leftzero">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Mail Magazine</a></li>
            </ol>
        </div>
    </div>
</div>


<!-- Company Section -->
<div id="company-page-section">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
            <h1 class="artist-title2">メールマガジン登録</h1>

                <article id="contentArea">
                    <div id="contentBox">
                        <div id="contentWrapper">
                        <p><span class="indispensability">*</span>は必ずお書きください。</p>
                        <form action="index.php" method="post">
                            <table class="table">
                                <tr>
                                    <th>メールアドレス<span class="indispensability">*</span></th>
                                    <td>
                                        <input name="form[mail]" style="width: 200px" type="text" value="" class="w420" />
                                        <p>半角英数字でご記入ください。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>メールアドレス再確認<span class="indispensability">*</span></th>
                                    <td>
                                    <input name="form[mail2]" style="width: 200px" type="text" value="" class="w420" />
                                    <p>確認のため再度ご記入ください。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>性別<span class="indispensability">*</span></th>
                                    <td>
                                    <input type="radio" name="form[sex]" value="男性" id="formSexMale" /><label style="float: none;" for="formSexMale">男性</label>
                                    <input type="radio" name="form[sex]" value="女性" id="formSexFemale" /><label style="float: none;" for="formSexFemale">女性</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>生年月日<span class="indispensability">*</span></th>
                                    <td>
                                    西暦<input name="form[birthday_year]" style="width: 80px" type="text" value="" class="w30" />年
                                    <input name="form[birthday_month]" style="width: 50px" type="text" value="" class="w30" />月
                                    <input name="form[birthday_day]" style="width: 50px" class="w30" type="text" value="" />日
                                    </td>
                                </tr>
                                <tr>
                                    <th>都道府県<span class="indispensability">*</span></th>
                                    <td>
                                        <select name="form[pref]">
                                        <option value="北海道">北海道</option>

                                        <option value="青森県">青森県</option>
                                        <option value="岩手県">岩手県</option>
                                        <option value="宮城県">宮城県</option>
                                        <option value="秋田県">秋田県</option>
                                        <option value="山形県">山形県</option>
                                        <option value="福島県">福島県</option>

                                        <option value="茨城県">茨城県</option>
                                        <option value="栃木県">栃木県</option>
                                        <option value="群馬県">群馬県</option>
                                        <option value="埼玉県">埼玉県</option>
                                        <option value="千葉県">千葉県</option>
                                        <option value="東京都">東京都</option>
                                        <option value="神奈川県">神奈川県</option>

                                        <option value="新潟県">新潟県</option>
                                        <option value="富山県">富山県</option>
                                        <option value="石川県">石川県</option>
                                        <option value="福井県">福井県</option>
                                        <option value="山梨県">山梨県</option>
                                        <option value="長野県">長野県</option>

                                        <option value="岐阜県">岐阜県</option>
                                        <option value="静岡県">静岡県</option>
                                        <option value="愛知県">愛知県</option>
                                        <option value="三重県">三重県</option>

                                        <option value="滋賀県">滋賀県</option>
                                        <option value="京都府">京都府</option>
                                        <option value="大阪府">大阪府</option>
                                        <option value="兵庫県">兵庫県</option>
                                        <option value="奈良県">奈良県</option>
                                        <option value="和歌山県">和歌山県</option>

                                        <option value="鳥取県">鳥取県</option>
                                        <option value="島根県">島根県</option>
                                        <option value="岡山県">岡山県</option>
                                        <option value="広島県">広島県</option>
                                        <option value="山口県">山口県</option>

                                        <option value="徳島県">徳島県</option>
                                        <option value="香川県">香川県</option>
                                        <option value="愛媛県">愛媛県</option>
                                        <option value="高知県">高知県</option>

                                        <option value="福岡県">福岡県</option>
                                        <option value="佐賀県">佐賀県</option>
                                        <option value="長崎県">長崎県</option>
                                        <option value="熊本県">熊本県</option>
                                        <option value="大分県">大分県</option>
                                        <option value="宮崎県">宮崎県</option>
                                        <option value="鹿児島県">鹿児島県</option>
                                        <option value="沖縄県">沖縄県</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>気になっているアーティスト<span class="indispensability">*</span></th>
                                    <td>
                                        <input type="hidden" name="form[fav_kubota]" value="" />
                                        <input type="checkbox" name="form[fav_kubota]" value="久保田利伸" id="formKubota" /><label style="float: none;" for="formKubota">久保田利伸</label>
                                        <input type="hidden" name="form[fav_urashima]" value="" />
                                        <input type="checkbox" name="form[fav_urashima]" value="浦嶋りんこ" id="formUrashima" /><label style="float: none;" for="formUrashima">浦嶋りんこ</label>
                                        <input type="hidden" name="form[fav_mori]" value="" />
                                        <input type="checkbox" name="form[fav_mori]" value="森大輔" id="formMori" /><label style="float: none;" for="formMori">森大輔</label>
                                        <input type="hidden" name="form[fav_bes]" value="" />
                                        <input type="checkbox" name="form[fav_bes]" value="BROWN EYED SOUL" id="formBes" /><label style="float: none;" for="formBes">BROWN EYED SOUL</label>
                                        <br />
                                        <input type="hidden" name="form[fav_shigemoto]" value="" />
                                        <input type="checkbox" name="form[fav_shigemoto]" value="茂本ヒデキチ" id="formShigemoto" /><label style="float: none;" for="formShigemoto">茂本ヒデキチ</label>
                                        <input type="hidden" name="form[fav_shima]" value="" />
                                        <input type="checkbox" name="form[fav_shima]" value="島かおり" id="formShima" /><label style="float: none;" for="formShima">島かおり</label>
                                        <input type="hidden" name="form[fav_wataru]" value="" />
                                        <input type="checkbox" name="form[fav_wataru]" value="ワタル" id="formWataru" /><label style="float: none;" for="formWataru">ワタル</label>
                                    </td>
                                </tr>
                            </table>
                        <p class="btn" style="padding-left: 0px;">
                        <input type="submit" value="内容を確認する" /></p>
                        </div>
                        <input type="hidden" name="action" value="confirm" />
                        </form>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>




<!-- Artist Section -->
<div id="artist-section-top">
    <div class="container">
        <h2>Artist</h2>
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <article class="home-news-item sample5">
                    <a class="showf" href="/artist/kubota">
                    <img src="img/portfolio/KubotaTop.jpg" class="img-responsive" alt="Toshinobu Kubota">
                    <div class="home-news-overlay blk-back f18">
                    <h3 class="en">Toshinobu Kubota</h3>
                        <div class="mask">
                        <h3 class="caption">久保田利伸</h3>
                        </div>
                    </div>
                    </a>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <article class="home-news-item sample5">
                    <a class="showf" href="/artist/urashima">
                    <img src="img/portfolio/Urashima_Top.jpg" class="img-responsive" alt="Rinko Urashima">
                    <div class="home-news-overlay blk-back f18">
                    <h3 class="en">Rinko Urashima</h3>
                        <div class="mask">
                        <h3 class="caption">浦嶋りんこ</h3>
                        </div>
                    </div>
                    </a>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <article class="home-news-item sample5">
                    <a class="showf" href="/artist/mori">
                    <img src="img/portfolio/MoriTop.jpg" class="img-responsive" alt="Daisuke Mori">
                    <div class="home-news-overlay blk-back f18">
                    <h3 class="en">Daisuke Mori</h3>
                        <div class="mask">
                        <h3 class="caption">森大輔</h3>
                        </div>
                    </div>
                    </a>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <article class="home-news-item sample5">
                    <a class="showf" href="/artist/bes">
                    <img src="img/portfolio/BROWN-EYED-SOUL_Top.jpg" class="img-responsive" alt="BROWN EYED SOUL">
                    <div class="home-news-overlay blk-back f18">
                    <h3 class="en">BROWN EYED SOUL</h3>
                        <div class="mask">
                        <h3 class="caption">ブラウン・<br>アイド・ソウル</h3>
                        </div>
                    </div>
                    </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Introduction Section -->
<div id="services-section">
    <div class="container"> 
        <div class="section-title">
            <h2>Introduction</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a class="home-introduction-item introduction" href="https://twitter.com/funky_manager" >
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <h3 class="top-ten">Funky Managers Twitter</h4>
                    </a>
                    <p>久保田利伸、森大輔、浦嶋りんこ、ファンキー・ジャムアーティストの熱い最新情報をいち早くお届けします！Twitterでしか見れない写真も多数ありますので、是非フォローして下さい。</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="home-introduction-item" href="/mailmagazine" ><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h3 class="top-ten">Mail Magazine</h4>
                    </a>
                    <p>ファンキー・ジャムのアーティストの最新情報を、いち早く皆様にメールマガジンでお届け致します。登録は無料で、簡単な質問にお答え頂くだけで、すぐに登録することが出来ます。</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="home-introduction-item" href="/art" ><i class="fa fa-pencil" aria-hidden="true"></i>
                    <h3 class="top-ten">Airt Master</h4>
                    </a>
                    <p>久保田利伸のFC会報表誌イラストでお馴染みの墨絵アーチストや、人形作家、さらに、政治＆スポーツ＆グルメから芸能まで、多彩な分野を広く浅く知る文筆系ラーメン屋をご紹介。</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="home-introduction-item" href="/fanletter" ><i class="fa fa-comment-o" aria-hidden="true"></i>
                    <h3 class="top-ten">Fan Letter</h4>
                    </a>
                    <p>ファンキー・ジャム所属の久保田利伸、浦嶋りんこ、森大輔、BROWN EYED SOULへのファンレターはこちらからお願いします。</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="pageTop"><a style="padding-top: 8px; padding-left: 0px;" href="menu"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a></div>


<div id="footer-other-page">
</div>

<div id="footer" style="padding-bottom: 20px;">
  <div class="container" style="text-align: center;">
    <p style="margin-bottom: 0px;">Copyright &copy; Funky Jam All rights reserved.</p>
    <a href="privacy.html">Privacy Policy</a></div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>