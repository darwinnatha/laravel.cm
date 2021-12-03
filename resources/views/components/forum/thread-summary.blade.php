@props(['thread'])

<div class="py-6 border-b border-skin-base">
    <article aria-labelledby="question-title-{{ $thread->id }}">
        <div>
            <div class="lg:flex lg:space-x-3">
                <div class="flex-1 flex items-center space-x-3">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8 rounded-full" src="{{ $thread->author->profile_photo_url }}" alt="">
                    </div>
                    <div class="min-w-0 flex-1 flex items-center space-x-1 font-sans">
                        <p class="text-sm font-medium text-skin-inverted">
                            <a href="{{ route('profile', $thread->author->username) }}" class="block group">
                                <span class="group-hover:underline">{{ $thread->author->name }}</span>
                                <span class="text-skin-muted">{{ '@'. $thread->author->username }}</span>
                            </a>
                        </p>
                        <span aria-hidden="true">&middot;</span>
                        <p class="text-sm text-skin-base">
                            <time-ago time="{{ $thread->created_at->getTimestamp() }}"/>
                        </p>
                    </div>
                </div>
                <div class="mt-2 lg:mt-0 flex-shrink-0 self-center">
                    @if (count($channels = $thread->channels->load('parent')))
                        <div class="flex flex-wrap gap-2 mt-2 lg:mt-0 lg:gap-x-3">
                            @foreach ($channels as $channel)
                                <a href="{{ route('forum.channels', $channel) }}" class="flex gap-2">
                                    <x-forum.channel :channel="$channel" />
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <h2 id="question-title-{{ $thread->id }}" class="mt-4 text-base font-medium text-skin-inverted font-sans">
                <a href="{{ route('forum.show', $thread) }}" class="hover:underline">{{ $thread->subject() }}</a>
            </h2>
        </div>
        <div class="mt-2 text-sm text-skin-inverted-muted font-normal">
            <a href="{{ route('forum.show', $thread) }}">{!! $thread->excerpt() !!}</a>
        </div>
        <div class="mt-6 flex justify-between space-x-8">
            <div class="flex items-center space-x-4">
                <div class="flex items-center text-sm text-skin-inverted-muted font-normal">
                    <span class="text-base mr-2">👏</span>
                    {{ count($thread->reactions) }}
                </div>
                <p class="inline-flex text-sm space-x-2 text-skin-base">
                    <x-heroicon-o-chat-alt class="h-5 w-5" />
                    <span class="font-normal text-skin-inverted-muted">{{ count($thread->replies) }}</span>
                    <span class="sr-only">réponses</span>
                </p>
            </div>
            <div class="flex text-sm">
                <p class="inline-flex items-center space-x-3 text-sm">
                    @if ($thread->isSolved())
                        <a href="{{ route('forum.show', $thread->slug) }}#{{ $thread->solution_reply_id }}" class="flex items-center gap-x-2 font-medium text-green-500">
                            <x-heroicon-s-badge-check class="w-5 h-5" />
                            <span class="hover:underline">Résolu</span>
                        </a>
                    @endif
                </p>
            </div>
        </div>
    </article>
</div>