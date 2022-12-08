<?php

// ファイルに書き込む内容を用意。まずは日付を保存する。
$name = $_POST['shimei'];
$sex = $_POST['sex'];
$raiten = $_POST['raiten'];
$today = $_POST['today'];
$kanso = $_POST['kanso'];

// aモードでファイルをオーブン
$file = fopen('data/data.txt', 'a');

// ファイルへの書き込み。"\n"は「ファイル内での改行」を指示する記述。ブラウザでいう<br>とのようなもの。
fwrite( $file,
    $name . "\n" . $sex . "\n" . $raiten . "\n" . $today . "\n" . $kanso
);

// ファイルを閉じる
fclose($file);
?>

<html>
<body>

<h1>ご協力ありがとうございました。</h1>

<table>
<tr>
<th>名前</th>
<th>性別</th>
<th>来店回数</th>
<th>満足感</th>
<th>ご感想・ご要望</th>
<tr>
    <td><?php echo $_POST["shimei"]; ?></td><br>
    <td><?php echo $_POST["sex"]; ?></td><br>
    <td><?php echo $_POST["raiten"]; ?></td><br>
    <td><?php echo $_POST["today"]; ?></td><br>
    <td><?php echo $_POST["kanso"]; ?></td><br>
</tr>
</table>


</body>

</html>