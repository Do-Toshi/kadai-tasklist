<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between">
        <div class="text-white text-lg">
            <a href="{{ route('tasks.index') }}" class="hover:text-gray-300">タスクリスト</a>
        </div>
        <div>
            <a href="{{ route('tasks.create') }}" class="text-white hover:text-gray-300">新しいタスクを作成</a>
        </div>
    </div>
</nav>