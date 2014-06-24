<?php
/**
 *------------------------------------------------------------------
 * 以下は、このファイルで(Email 通知に使われるメールのサブジェクト)に使われるキー名です。
 * 必要に応じて内容を書き換えて使用すると便利です。
 * 
 *
 * thewire:notify:subject
 *      新しい「つぶやき」が投稿された時の通知メールの題名
 * 例）
 * 'thewire:notify:subject' => "【Elgg研究会】新しいつぶやき",
 * 
 *
 *
 *ちなみに、コアモジュールのうち、Email通知が定義されているファイルは、
 *
 *./mod/likes/languages/ja.php
 *./mod/groups/languages/ja.php
 *./mod/invitefriends/languages/ja.php
 *./mod/uservalidationbyemail/languages/ja.php
 *./mod/messageboard/languages/ja.php
 *./mod/messages/languages/ja.php
 *./mod/thewire/languages/ja.php
 *./languages/ja.php
 *
 *です。
 *
 */

return array(
	
	/**
	 * Menu items and titles
	 */
	'thewire' => "つぶやき",
	'thewire:everyone' => "みんなのつぶやき",
	'thewire:user' => "%s さんのつぶやき",
	'thewire:friends' => "友達のつぶやき",
	'thewire:replying' => "返信: %s (@%s) さんへ 内容",
	'thewire:thread' => "スレッド",
	'thewire:charleft' => "残りの文字数（半角文字で）",
	'thewire:tags' => "「 %s 」でタグ付けされたつぶやき",
	'thewire:noposts' => "つぶやきはありません",
	'item:object:thewire' => "つぶやき",
	'thewire:by' => '%s さんのつぶやき',

	'thewire:previous:help' => "前の投稿を見る",
	'thewire:hide:help' => "前の投稿隠す",
	
        /**
	 * The wire river
	 **/
	'river:create:object:thewire' => "%s さんが %s に投稿しました",
	'thewire:wire' => 'つぶやき',

	/**
	 * Wire widget
	 **/
	'thewire:widget:desc' => 'アタナの最近のつぶやきを表示',
	'thewire:num' => '表示数',
	'thewire:moreposts' => 'もっと見る',
	
	/**
	 * Status messages
	 */
	'thewire:posted' => "あなたのつぶやきを投稿しました。",
	'thewire:deleted' => "つぶやきを削除しまいした。",
	'thewire:blank' => "申し訳ありません、入力欄が空欄なので投稿できません。",
	'thewire:notfound' => "申し訳ありません、お探しの投稿は見つかりませんでした。",
	'thewire:notsaved' => "申し訳ありません。このつぶやきを保存できませんでした",
	'thewire:notdeleted' => "申し訳ありません、この投稿を削除できませんでした。",
	
	/**
	 * Notifications
	 */
	'thewire:notify:summary' => '新しいつぶやき: %s',
	'thewire:notify:subject' => "%s さんの新しいつぶやき",
	'thewire:notify:reply' => '%s さんが %s さんのつぶやきに返答しました:',
	'thewire:notify:post' => '%s さんはつぶやきました:',
	'thewire:notify:footer' => "閲覧・返答するには:\n%s",

	/**
	 * Settings
	 */
	'thewire:settings:limit' => "つぶやきに使用できる最大の文字数:",
	'thewire:settings:limit:none' => "制限なし",
);
