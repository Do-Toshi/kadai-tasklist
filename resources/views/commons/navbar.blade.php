<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between">
        <div class="text-white text-lg">
            {{-- タスク関連のリンクを含む --}}
            @include('commons.link_items')
        </div>
        <div>
            {{-- ログイン済みユーザーの表示 --}}
            @if (Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-white hover:text-gray-300">ログアウト</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-white hover:text-gray-300">ログイン</a>
            @endif
        </div>
    </div>
</nav>