<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>レストランについてのアンケート</title>
</head>
<body>
    <table>
    <tr><td align="center">
    <h1>レストランについてのアンケート<valign="butom"></h1>
    </td></tr>
    <tr><td>
    <p>このたびは、弊社をご利用いただきましてありがとうございます。</p>
    <p>よろしければ、アンケートにご協力ください。</p>
    <br>
        <form method="post" action="write.php">
        <p>
            <label for="namae">お名前：</label>
            <input type="text" name="shimei" id="namae">
        </p>
          <p>
            性別：
            <input type="radio" id="radio0" name="sex" value="man" checked>
            <label for="radio0">男性</label>
            <input type="radio" id="radio1" name="sex" value="women">
            <label for="radio1">女性</label>
            <input type="radio" id="radio2" name="sex" value="other">
            <label for="radio2">その他・無回答</label>
        </p>

        <p>こちらのレストランのご利用は、何回目ですか？</p>
        <p>
            <input type="radio" id="radio3" name="raiten" value="初めて" checked>
            <label for="radio3">初めて</label>
            <input type="radio" id="radio4" name="raiten" value="2回目以上">
            <label for="radio4">2回目以上</label>
        </p>

        <p>本日のお食事はご満足いただけましたでしょうか？</p>
        <p>
            <input type="radio" id="radio5" name="today" value="満足" checked>
            <label for="radio5">満足</label>
            <input type="radio" id="radio6" name="today" value="いまいち">
            <label for="radio6">いまいち</label>
        </p>

        <p>感想・ご要望等ございましたら、お聞かせいただけますと幸いです。</p>
        <p><textarea name="kanso" rows="10" cols="80"></textarea></p>
        <input type="submit">
        </form>
    </td></tr>
    </table>
</body>
</html>