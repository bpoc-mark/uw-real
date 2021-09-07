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
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
