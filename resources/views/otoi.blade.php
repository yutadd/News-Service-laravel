
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>お問い合わせ</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body style="background-color:white;color:black;margin: 0px">
    <div style="background-color:#eee;">
        <header style="background-color:#dedede;width:100%;display: flex;">
            <a href="/top"
                style="margin-left: 16px;margin-right:16px;align-self: stretch;display: flex;font-size:72px"><img
                    src="/images/logo.jpg" width="120px"
                    height="auto" /></a>
            <a href="/live"
                style="white-space : nowrap;color:black;text-decoration:none;padding-right:16px;padding-top:16px;padding-left: 16px;font-size: 40px;">暮らし</a>
            <a href="/travel"
                style="white-space : nowrap;color:black;text-decoration:none;white-space : nowrap;padding-top:16px;padding-left: 16px;font-size: 40px;">旅行</a>
            <div
                style="white-space : nowrap;color:black;text-decoration:none;padding-top:16px;padding-left: 16px;font-size: 40px;margin: 0 16px 0 auto;background-color:#bbb">
                <a href="/otoi"
                    style="white-space : nowrap;color:black;text-decoration:none;font-size: 40px;">お問い合わせ</a>
            </div>
        </header>
        <form action="/result" method="POST">
      		@csrf
            <div style="width:100%;margin:0px;background-color:#eee">
                <h2 style="padding-top:10px;font-size: 40px;text-align: center;">お問い合わせ</h2>
                <div style="margin: 0 30%;max-width: 1000px;">
                    <table>
                        <tr>
                            <th style="min-width:100px;">お問い合わせ内容<br><span style="color: red;">*</span></th>
                            <td><textarea required="required"
                                    style="padding-left: 15px;font-size:15px;padding-top:10px;border-radius: 15px;"
                                    placeholder="お問い合わせ内容" name="otoi" id="otoi" cols="70" rows="4"></textarea></td>
                        </tr>
                        <tr>
                            <th>お名前<br><span style="color: red;">*</span></th>
                            <td><input required="required"
                                    style="padding-left: 15px;font-size:15px;border-radius: 15px;margin-left:0px;border-width: 1px;padding-bottom:5px"
                                    size="10%" type="text" name="name"></td>
                        </tr>
                        <tr>
                            <th>会社名<br><span style="color: red;">*</span></th>
                            <td><input required="required"
                                    style="padding-left: 15px;font-size:15px;border-radius: 15px;margin-left:0px;border-width: 1px;padding-bottom:5px"
                                    size="70%" type="text" name="kaisya"></td>
                        </tr>
                        <tr>
                            <th>電話番号<br><span style="color: red;">*</span></th>
                            <td><input required="required"
                                    style="padding-left: 15px;font-size:15px;border-radius: 15px;margin-left:0px;border-width: 1px;padding-bottom:5px"
                                    size="70%" type="text" name="phone"></td>
                        </tr>
                        <tr>
                            <th>メールアドレス<br><span style="color: red;">*</span></th>
                            <td><input required="required"
                                    style="padding-left: 15px;font-size:15px;border-radius: 15px;margin-left:0px;border-width: 1px;padding-bottom:5px"
                                    size="70%" type="text" name=mail></td>
                        </tr>
                    </table>
                </div>
                <div style="width: 80%;margin: 0 0 0 30%;max-width: 800px;">
                    <small>下記事項をご確認のうえ、同意していただける場合は「同意する」にチェックを入れてください。</small><br>
                    <textarea
                        style="padding-left: 15px;font-size:15px;padding-top:10px;border-radius: 15px;margin-left:0px;width:100%"
                        readonly name="" id="" cols="80" rows="4" placeholder="<<ここに個人情報保護方針が入ります。>>"></textarea>
                    <br>
                    <div style="text-align: center;"><input type="checkbox" required="required">個人情報の取扱いに同意する</div>
                    <br><input
                        style="border-width: 1px;text-align: center;display: block;margin:auto;width: 100%;max-width: 200px;padding: 10px;background: white;color: black;font-weight: bold;border-radius: 15px;"
                        type="submit">
                    <div style="padding-top:40px"></div>
                </div>
            </div>
        </form>
        <div style="padding:5%;background-color: #202020;padding: 0 16px 0 auto;">
            <div style="text-align: center;font-size: 20px;">
                <ul>
                    <li style="display:inline;padding:5%;margin:auto;"><a href="top">トップ</a></li>
                    <li style="display:inline;padding:5%;margin:auto;"><a href="live">生活</a></li>
                    <li style="display:inline;padding:5%;margin:auto;"><a href="travel">旅行</a></li>
                    <li style="display:inline;padding:5%;margin:auto;"><a href="otoi">お問い合わせ</a></li>
                </ul>
            </div>
            <footer style="color:white;padding-bottom:80px;">copyright©坂島 All right reserved.</footer>
        </div>
    </div>
</body>

</html>