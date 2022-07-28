@component('mail::message')
    # 新しいユーザが登録されました！

    {{ $toUser->name }}さん、こんにちは！

    新しく  {{ $newUser->name }}  さんが参加しました！
@endcomponent
