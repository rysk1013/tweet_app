<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>つぶやきアプリ</title>
</head>
<body>
    <a href="{{ route('tweet.index') }}">< 戻る</a>
    <p>投稿フォーム</p>
    <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="post" novalidate>
        @method('PUT')
        @csrf
        <label for="tweet-content">つぶやき</label>
        <span>140文字まで</span>
        <textarea name="tweet" id="tweet-content">{{ $tweet->content }}</textarea>
        @error('tweet')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <p><input type="submit" value="編集"></p>
    </form>
</body>
</html>
