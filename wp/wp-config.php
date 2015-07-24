<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'gyokutei');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j+Ok?&~f(O?|G^9XEe+d#W;P$$6>Wx$+x|g/0:3LH=*6Mbp/>PHHN~v>3`#?WoWY');
define('SECURE_AUTH_KEY',  'S)3;&_k{i%CNIL|Pe8`gw7hCP~SSGK81LeVdn=1dKt|zlbMD?$T3XluG$KbK)1x7');
define('LOGGED_IN_KEY',    ':/O^4m}[2/ke4pT@s2s+RWK^@z3269f6%r-!2bg|BDLnTuAec:1sWHUTTv#F#g,s');
define('NONCE_KEY',        'qU_oC!vKOTzlC;i*?&JP&%Dh92EmsvtBQ1*kzh/X/~]jwVx`c3Ja+nMqh*?^-oV|');
define('AUTH_SALT',        'Q@e/XiHlku|yE^|R;uhjYT_c?t&QEDrTH#?xc!+/Pf]wi}vnR`c=)++m(e(Z!{z#');
define('SECURE_AUTH_SALT', 'KT1g+Zc>$~*oO<Z{+CDnNcAB+|x^zF,a+r[kdmOr-^c;z`+hS+bh)dCN(gTdD60W');
define('LOGGED_IN_SALT',   '3p)nMe 8z]%k;7`p?u+0H5ME/Nue}|Pj~->O6EY$N@DJq$8<^>xVmB^uS,O^]4_q');
define('NONCE_SALT',       'bRi5<D1GC}L|;,z@d)|Vrb6oukmSNu}WFGmlex-`jbw^0:Vp%fK*WtxCfE[LpJjN');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
