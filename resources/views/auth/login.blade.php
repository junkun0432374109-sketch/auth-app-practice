<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>

<body
    style="margin: 0; background-color: #f3f4f6; font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh;">

    <div style="width: 100%; max-width: 400px; padding: 20px; box-sizing: border-box;">
        <h2
            style="text-align: center; margin-top: 0; margin-bottom: 24px; font-size: 24px; font-weight: bold; color: #333;">
            ログイン</h2>

        <form method="POST" action="/login">
            @csrf

            <div style="margin-bottom: 16px;">
                <label for="email"
                    style="display: block; margin-bottom: 6px; font-size: 14px; font-weight: bold; color: #333;">メールアドレス</label>
                <input type="email" id="email" name="email" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 14px; background-color: #fff;">
            </div>

            <div style="margin-bottom: 24px;">
                <label for="password"
                    style="display: block; margin-bottom: 6px; font-size: 14px; font-weight: bold; color: #333;">パスワード</label>
                <input type="password" id="password" name="password" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 14px; background-color: #fff;">
            </div>

            <div style="text-align: center; margin-bottom: 16px;">
                <button type="submit"
                    style="width: 100%; padding: 12px; background-color: #2563eb; color: white; border: none; border-radius: 4px; font-size: 16px; font-weight: bold; cursor: pointer;">ログイン</button>
            </div>
        </form>

        <div style="text-align: center;">
            <a href="/register"
                style="color: #1e40af; font-size: 14px; font-weight: bold; text-decoration: underline;">アカウントをお持ちでない方はこちら</a>
        </div>
    </div>

</body>

</html>