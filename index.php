<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
	<meta charset="UTF-8" />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo CANONICAL ?>">
	<meta name="keywords" content="<?php echo KEY_WORD ?>">
	<meta name="description" content="<?php echo DESCRIPTION ?>">
	<meta property="og:title" content="<?php echo SITE_NAME ?>">
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<div class="container">
						<h3>
							<img src="/images/top/section_1/top_txt_1.svg" alt="">
							<img src="/images/top/section_1/top_txt_2.svg" alt="">
						</h3>
					</div>
					<a href="" class="btn_scrolldown"></a>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col">
								<h3>
									<span><span>分譲マンションの</span><br><span>管理体制</span>を<span>一新</span>します</span>
								</h3>
								<p>皆様がお住まいのマンション共用部や設備は、清潔で安全な管理の下で使用されていますか？<br>
								現在のマンション管理に少しでもご不満な点があるのであれば、それは管理会社を変更するチャンスです。
									<img src="/images/top/sp/section_2/img_1.png" alt="">
								</p>
								<p>分譲マンション管理 株式会社リアルは、皆様に全ての業務内容をご理解いただけるよう、明確な体制を確立。</p>
								<p>静岡・浜松から愛知のマンション管理体制を一新すべく経営に力を入れています。</p>
							</div>
							<div class="col">
								<img src="/images/top/section_2/img_1.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_3">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<ul>
								<li class="s_3_li" data-target="img_1">
									<a>
										<span>MANAGEMENT SUPPORT</span>
										マネジメントサポート
									</a>
								</li>
								<li class="s_3_li" data-target="img_2">
									<a>
										<span>MAINTENANCE SUPPORT</span>
										メンテナンスサポート
									</a>
								</li>
								<li class="s_3_li" data-target="img_3">
									<a>
										<span>LIFE SUPPORT</span>
										ライフサポート
									</a>
								</li>
								<li class="s_3_li" data-target="img_4">
									<a>
										<span>MANAGEMENT POINTS</span>
										マンション管理のポイント
									</a>
								</li>
								<li class="s_3_li" data-target="img_5">
									<a>
										<span>FLOW TO REQUEST</span>
										ご依頼までの流れ
									</a>
								</li>
								<li class="s_3_li" data-target="img_6">
									<a>
										<span>MANAGEMENT Q&A</span>
										マンション管理Q&A
									</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<div class="wrap img_1">
								<span>分譲マンション</span>
								<h4>MANAGEMENT SUPPORT</h4>
								<p>当社管理業務のうち、マネジメントに関するサービスをご紹介いたします。適正価格競争を生き抜いた独立系の特長を生かし、皆様に快適なマンションライフをお届けします。</p>
							</div>
							<div class="wrap img_2">
								<span>分譲マンション</span>
								<h4>MANAGEMENT SUPPORT</h4>
								<p>株式会社リアルでは、明瞭会計と、徹底した社員教育を行い、マンション管理業界を一新しようと考えております。日常の清掃から設備管理まで、マンションメンテナンスはお任せください。</p>
							</div>
							<div class="wrap img_3">
								<span>分譲マンション</span>
								<h4>LIFE SUPPORT</h4>
								<p>深夜でも早朝でも、お電話一本で当社スタッフが状況に応じて駆けつけ、その場で機械の故障、設備の補修（一次対応）を行います。快適なマンションライフを24時間体制で見守る、株式会社リアルのライフサポートです。</p>
							</div>
							<div class="wrap img_4">
								<span>分譲マンション</span>
								<h4>MANAGEMENT POINTS</h4>
								<p>管理会社はマンションの所有者である皆様が選ぶものです。<br>
									マンション管理のポイントをご参考いただき、正しいマンション管理を実現してください。</p>
							</div>
							<div class="wrap img_5">
								<span>分譲マンション</span>
								<h4>FLOW TO REQUEST</h4>
								<p>管理会社変更は簡単に行えます。理事会のご意向を入念に伺い、適切なアドバイスの下、「管理会社の変更」をお手伝い致します。<br>
								ご依頼までの流れをご紹介。</p>
							</div>
							<div class="wrap img_6">
								<span>分譲マンション</span>
								<h4>MANAGEMENT Q&A</h4>
								<p>皆様のマンション管理に関する、代表的な疑問や質問にお答えしておりますのでご参考ください。掲載中の事例以外にもご不明な点がございましたら、当社までお気軽にご相談ください。</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_4">
				<div class="wrapper">
					<div class="container">
						<div class="wrap">
							<h4>賃貸管理・<br>資産マネジメント</h4>
							<p>弊社では、分譲マンション以外にも <br>
								賃貸マンションや資産マネジメントも<br>
								展開しております。</p>
							<a href="">view more</a>
						</div>
						<div class="row">
							<div class="col">
								<p><span>あなたのマンション大丈夫？</span></p>
								<h4>マンション管理会社<br>
									適性チェック</h4>
							</div>
							<div class="col">
								<p><span>理想の永住空間創りをご提案</span></p>
								<h4>リアルの<br>
									や・さ・し・いリフォーム</h4>
							</div>
							<div class="col">
								<p><span>調査報告の発行依頼はこちら</span></p>
								<h4>重要事項調査報告 <br>
									依頼受付</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
