    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo"><img class="logo" src="sources/logo.png" alt="logo"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="nearlocation.php">주변 시설 찾기</a></li>
                <li><a href="guest.php">게스트/번개모집</a></li>
                <li><a href="#">교류전</a></li>
                <li><a href="#">시설 등록</a></li>
                <?
                    if(!$_SESSION['useremail']) {
                ?>
                
                <li class="font-black">&nbsp;|&nbsp;</li>
                <li><a href="login/login_form.php">로그인</a></li>
                <?
                    }
                    else {
                ?>
                <li><a href="#">내 정보</a></li>
                <li><a href="login/logout.php">로그아웃</a></li>
                <?
                    }
                ?>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="nearlocation.php">주변 시설 찾기</a></li>
                <li><a href="guest.php">게스트/번개모집</a></li>
                <li><a href="#">교류전</a></li>
                <li><a href="#">시설 등록</a></li>
                <? if (!$_SESSION['useremail']) { ?>
                <li><hr class="hr-login"></li>
                <li><a href="login/login_form.php">로그인</a></li>
                <? }
                else {?>
                <li><a href="#">내 정보</a></li>
                <li><a href="login/logout.php">로그아웃</a></li>
                <? } ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>