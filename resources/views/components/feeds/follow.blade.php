<li>
    <div class="relative pb-8">
        <span class="absolute left-4 top-5 -ml-px h-full w-0.5 bg-gray-200 dark:bg-white/20" aria-hidden="true"></span>
        <div class="relative flex items-start space-x-3">
            <div>
                <div class="relative px-1">
                    <div class="flex size-8 items-center justify-center rounded-full bg-white dark:bg-gray-800 ring-4 ring-white dark:ring-white/10">
                        <svg
                            class="size-6 text-gray-500 dark:text-gray-400"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="min-w-0 flex-1 py-1.5">
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    <a
                        href="{{ route('profile', ['username' => $user->username]) }}"
                        class="font-sans font-medium text-gray-900"
                    >
                        {{ $user->name }}
                    </a>
                    a commencé a suivre
                    <a href="#" class="font-sans font-medium text-gray-900">Fabrice Yopa</a>
                    <span class="whitespace-nowrap font-sans">il y a 3h</span>
                </div>
            </div>
        </div>
    </div>
</li>
