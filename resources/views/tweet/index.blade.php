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
    <div>
        <form action="{{ route('tweet.create') }}" method="post" novalidate>
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" cols="30" placeholder="つぶやきを入力"></textarea>
            <p><input type="submit" value="投稿"></p>
        </form>
        @error('tweet')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        @foreach ($tweets as $tweet)
            <p>{{ $tweet->id }}：{{ $tweet->content }}</p>
        @endforeach
    </div>
</body>
</html>
