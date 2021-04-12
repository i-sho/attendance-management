<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <span class="navbar-brand">営業管理システム</span>
    <!-- トグルボタンの作成 -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- 各メニューの設定 -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link @yield('nav_index')" href="">勤怠履歴</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">出勤報告</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">退勤報告</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">ログアウト</a>
            </li>
        </ul>
    </div>
</nav>