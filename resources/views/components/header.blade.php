<header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">

            <a href="{{ route('jobs.index') }}" class="flex items-center gap-2 group">
                <div
                    class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center group-hover:bg-blue-700
                    transition-colors">
                    <x-heroicon-o-briefcase class="w-5 h-5 text-white" />
                </div>

                <span class="text-xl font-bold text-gray-900">
                    JobBoard
                </span>
            </a>

            <nav class="flex items-center gap-8">
                <a href="{{ route('jobs.index') }}"
                    class="text-gray-600 hover:text-gray-900 font-medium transition-colors">
                    Browse Jobs
                </a>

                <x-button padding="px-6 py-2.5" rounded="rounded-xl">
                    Post a Job
                </x-button>
            </nav>

        </div>
    </div>
</header>
