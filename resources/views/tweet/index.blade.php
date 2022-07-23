<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>
    @if (session('feedback.success'))
        <p style="color: lime;">{{ session('feedback.success') }}</p>
    @endif
    <div>
        <form action="{{ route('tweet.create') }}" method="post" novalidate>
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" cols="30" placeholder="つぶやきを入力"></textarea>
            @error('tweet')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <p><input type="submit" value="投稿"></p>
        </form>
        @foreach ($tweets as $tweet)
            <details>
                <summary>{{ $tweet->id }}：{{ $tweet->content }}</summary>
                <div>
                    <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
                    <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post" novalidate>
                        @method('DELETE')
                        @csrf
                        <p><input type="submit" value="削除"></p>
                    </form>
                </div>
            </details>
        @endforeach
    </div>
</body>
</html>
