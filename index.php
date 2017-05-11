<?php

//================================
// インクルード
//================================
require_once('class/common.php');			// ユーティリティ関数群
require_once('class/define.inc');			// 各種定義
require_once('class/model.php');			// モデル定義
require_once('master_data.php');			// マスター情報
require_once('class/database_manager.php');	// データベースマスターデータ
require_once('class/TemplateEngine.php');	// テンプレートエンジン

$script_url = $_SERVER["PHP_SELF"];

StartSection();

// クッキーのクリア
foreach ($_COOKIE as $key => $value)
{
	setcookie($key, '', time() - 1800);
}

ClearSection();

OutputHtmlHeader();

echo <<<EOT
</body><body style = margin-top:0;margin-left:0;margin-right:0;>
<h1 id="topHeader1">Farm Support System <span>ver.0.9</span></h1>





<div id="home">

	<ul id="gNavi">
		<li>
			<form action="./sagyou_entry_work.php" method="post">
			<input type="hidden" name="action" value="initialize">
			<input type="submit" value="作業開始" class="btnBg01" />
			</form>
		</li>
		<li>
			<form action="./sagyou_resume.php" method="post">
			<input type="submit" value="作業中" class="btnBg02" />
			</form>
		</li>
		<li>
			<form action="./sagyou_list.php" method="post">
			<input type="submit" value="作業管理" class="btnBg03" />
			</form>
		</li>
		<li>
			<form action="./zaiko_list.php" method="post">
			<input type="submit" value="在庫管理" class="btnBg04" />
			</form>
		</li>
		
		
		<li>
			<form action="./refueling_resume.php" method="post">
			<input type="submit" value="給油" class="btnBg05" />
			</form>
		</li>
		<li>
			<form action="./sagyou_entry_boujo.php" method="post">
			<input type="hidden" name="action" value="initialize">
			<input type="submit" value="防除" class="btnBg06" />
			</form>
		</li>
	</ul>
	
	
	
	
	<ul id="hNavi">
		<li>
			<a href="https://www.google.co.jp/maps" target="_blank">Google Mapへ</a>
		</li>
		<li>
			<a href="http://data01.x-ability.jp/FieldRouter/vbox0140///">3北へ</a>
		
		</li>
		<li>
			<a href="http://data01.x-ability.jp/FieldRouter/vbox0141///">4号南へ</a>
		</li>			
	</ul>





</div><!--//#home-->





<p>
EOT;

OutputHtmlFooter();

 ?>
