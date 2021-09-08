<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner row">

	<div class="left">
		<?php
			if ($str[1] == "") {
				echo '<h1 class="logo"><a href="/"><span>静岡県浜松市 分壌マンション管理 株式会社リアル</span><br><img src="/images/common/header_logo.svg" alt=""></a></h1>';
			} else {
				echo '<p class="logo"><a href="/">静岡県浜松市 分壌マンション管理 株式会社リアル<br><img src="/images/common/header_logo.svg" alt=""></a></p>';
			}
		?>
	</div>
	
	<nav class="right">
		<ul>
			<li><a href="/about/" <?php if ($str[1] == "about") {
				echo ' class="here"';
			} ?>>TOP</a></li>
			<li><a href="/about/" <?php if ($str[1] == "about") {
				echo ' class="here"';
			} ?>>分譲マンション管理</a></li>
			<li><a href="/about/" <?php if ($str[1] == "about") {
				echo ' class="here"';
			} ?>>賃貸管理・資産マネジメント</a></li>
			<li><a href="/about/" <?php if ($str[1] == "about") {
				echo ' class="here"';
			} ?>>会社概要</a></li>
			<li><a href="/about/" <?php if ($str[1] == "about") {
				echo ' class="here"';
			} ?>>採用情報</a></li>
			<li><a href="/about/" <?php if ($str[1] == "about") {
				echo ' class="here"';
			} ?>>お問い合わせ</a></li>
		</ul>
		<div class="menu" id="header_menu">
			<span class="line line-t"></span>
			<!-- <span class="line line-m"></span> -->
			<span class="line line-b"></span>
			<p></p>
		</div>
	</nav>

</div>

<div class="big_menu_cont">
	<div class="row">
		<div class="col">

		</div>
		<div class="col">
			<ul class="big_menu">
				<li><a href="/">TOP</a></li>
				<li data-target="big_sub_menu">
					<a>分譲マンション管理 <img src="/images/common/big_menu_arrow.png" alt=""></a>
					<div class="big_sub_menu" id="head_sub_menu">
						<div class="left">
							<nav>
								<p><span>- </span>マネジメントサポート</p>
								<ul>
									<li><a href="/">事務管理業務</a></li>
									<li><a href="/">修繕運用と長期修繕計画</a></li>
									<li><a href="/">中区上島地内町地内<br>大規模修繕工事完成まで</a></li>
									<li><a href="/">関係法令・指針の支援</a></li>
								</ul>
							</nav>
							<nav>
								<p><span>- </span>メンテナンスサポート</p>
								<ul>
									<li><a href="/">日常清掃</a></li>
									<li><a href="/">定期・特別清掃</a></li>
									<li><a href="/">設備管理</a></li>
									<li><a href="/">排水管洗浄</a></li>
									<li><a href="/">諸設備メンテナンス</a></li>
									<li><a href="/">ライフサポート24</a></li>
								</ul>
							</nav>
						</div>
						<div class="right">
							<nav>
								<p><span>- </span>ライフサポート</p>
								<ul>
									<li><a href="/">フロントマネージャー</a></li>
									<li><a href="/">コンシェルジュ(介護専門スタッフ)</a></li>
									<li><a href="/">各種損害保険の取扱い</a></li>
									<li><a href="/">リアルのその他の業務</a></li>
								</ul>
							</nav>
							<nav>
								<p><span>- </span>マンション管理のポイント</p>
								<ul>
									<li><a href="/">管理主体は管理組合</a></li>
									<li><a href="/">理事の皆様へ</a></li>
									<li><a href="/">あなたのマンション大丈夫？</a></li>
								</ul>
							</nav>
							<nav>
								<p><span>- </span>ご依頼までの流れ</p>
							</nav>
							<nav>
								<p><span>- </span>マンション管理Q&A</p>
							</nav>
						</div>
					</div>
				</li>
				<li><a href="/">賃貸管理・資産マネジメント</a></li>
				<li><a href="/">会社概要</a></li>
				<li><a href="/">リアルのや・さ・し・いリフォーム</a></li>
				<li><a href="/">重要事項調査報告 依頼受付</a></li>
				<li><a href="/">プライバシーポリシー</a></li>
				<li><a href="/">お知らせ</a></li>
				<li><a href="/">お問い合わせ</a></li>
			</ul>
		</div>
	</div>
</div>
