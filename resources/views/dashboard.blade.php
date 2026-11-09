<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ダッシュボード</title>
</head>

<body
    style="margin: 0; background-color: #f3f4f6; font-family: sans-serif; display: flex; justify-content: center; min-height: 100vh;">

    <div style="width: 100%; max-width: 450px; padding: 80px 20px 20px 20px; box-sizing: border-box;">
        <h2 style="margin-top: 0; margin-bottom: 24px; font-size: 22px; font-weight: bold; color: #333;">ダッシュボード</h2>

        <div
            style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); margin-bottom: 24px;">
            <p style="margin-top: 0; margin-bottom: 16px; font-size: 16px; font-weight: bold; color: #333;">
                ようこそ、{{ Auth::user()->name ?? 'ゲスト' }}さん！
            </p>
            <p style="margin: 0 0 8px 0; font-size: 14px; color: #555;">
                メールアドレス: {{ Auth::user()->email ?? '-' }}
            </p>
            <p style="margin: 0; font-size: 14px; color: #555;">
                登録日: {{ Auth::user()->created_at ? Auth::user()->created_at->format('Y年m月d日') : '-' }}
            </p>
        </div>

        <form method="POST" action="/logout">
            @csrf
            <button type="submit"
                style="width: auto; padding: 8px 16px; background-color: #dc2626; color: white; border: none; border-radius: 4px; font-size: 14px; cursor: pointer;">ログアウト</button>
        </form>
    </div>

</body>

</html>