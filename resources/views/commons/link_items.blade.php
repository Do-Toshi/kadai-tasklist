@if (Auth::check())
    <ul class="flex space-x-4">
        <li><a href="{{ route('tasks.index') }}" class="text-white hover:text-gray-300">タスクリスト</a></li>
        <li><a href="{{ route('tasks.create') }}" class="text-white hover:text-gray-300">新しいタスクを作成</a></li>
    </ul>
@else
    <ul class="flex space-x-4">
        <li><a href="{{ route('login') }}" class="text-white hover:text-gray-300">ログイン</a></li>
        <li><a href="{{ route('register') }}" class="text-white hover:text-gray-300">サインアップ</a></li>
    </ul>
@endif