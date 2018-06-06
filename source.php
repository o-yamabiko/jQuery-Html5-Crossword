<?php
$solution = "
いか#たゆた#
#ま##ゆかり
おびただ##り
こす#る#し#
##そ#そばだ
#とつさ#しだ
う#けばけば#
";

if ($_GET["check"] == 1) {
    $schema = trim($_GET["schema"]);
}
?>

<div>
<textarea id="create_crossword" name="create_crossword" rows="7" cols="7">
<?php echo $solution; ?>
</textarea>

<textarea id="create_hor" name="create_hor" rows="10" cols="50">
1 厳めしい老紳士
3 水面に揺蕩う船
6 所縁の地を巡る
8 夥しい数
10 両手を擦り合わせる
13 耳を欹てる
15 咄嗟の出来事
17 歯朶の葉に積む雪落ちんとして落ちず(山口誓子)
18 退屈な毎日に倦む
19 毳毳しい服装
</textarea>

<textarea id="create_ver" name="create_ver" rows="10" cols="50">
2 囂しい人々
4 由々しき大事件
5 外灯に虫が集る
7 凛々しい いでたち
8 代表で話すなんて烏滸がましい
9 熱があって怠い
11 店に屡やってくる客
12 素っ気ない態度
14 小さい子のように駄々をこねる
16 あっさり捌けた人
</textarea>
</div>
