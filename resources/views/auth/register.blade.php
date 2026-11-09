<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
</head>

<body
    style="margin: 0; background-color: #f3f4f6; font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh;">

    <div style="width: 100%; max-width: 400px; padding: 20px; box-sizing: border-box;">
        <h2
            style="text-align: center; margin-top: 0; margin-bottom: 24px; font-size: 24px; font-weight: bold; color: #333;">
            ユーザー登録</h2>


        <!-- ▼▼▼ ここにエラーメッセージを表示するコードを追加 ▼▼▼ -->
        @if ($errors->any())
            <div
                style="background-color: #fee2e2; color: #b91c1c; padding: 12px; border-radius: 4px; margin-bottom: 16px; font-size: 14px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

        <form method="POST" action="/register">
            @csrf
            <!-- 既存の入力欄が続きます -->


            <form method="POST" action="/register">
                @csrf

                <div style="margin-bottom: 16px;">
                    <label for="name"
                        style="display: block; margin-bottom: 6px; font-size: 14px; font-weight: bold; color: #333;">名前</label>
                    <input type="text" id="name" name="name" required
                        style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 14px; background-color: #fff;">
                </div>

                <div style="margin-bottom: 16px;">
                    <label for="email"
                        style="display: block; margin-bottom: 6px; font-size: 14px; font-weight: bold; color: #333;">メールアドレス</label>
                    <input type="email" id="email" name="email" required
                        style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 14px; background-color: #fff;">
                </div>

                <div style="margin-bottom: 16px;">
                    <label for="password"
                        style="display: block; margin-bottom: 6px; font-size: 14px; font-weight: bold; color: #333;">パスワード</label>
                    <input type="password" id="password" name="password" required
                        style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 14px; background-color: #fff;">
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="password_confirmation"
                        style="display: block; margin-bottom: 6px; font-size: 14px; font-weight: bold; color: #333;">パスワード（確認）</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 14px; background-color: #fff;">
                </div>

                <div style="text-align: center; margin-bottom: 16px;">
                    <button type="submit"
                        style="width: 100%; padding: 12px; background-color: #2563eb; color: white; border: none; border-radius: 4px; font-size: 16px; font-weight: bold; cursor: pointer;">登録</button>
                </div>
            </form>

            <div style="text-align: center;">
                <a href="/login"
                    style="color: #1e40af; font-size: 14px; font-weight: bold; text-decoration: underline;">すでにアカウントをお持ちの方はこちら</a>
            </div>
    </div>

</body>

</html>