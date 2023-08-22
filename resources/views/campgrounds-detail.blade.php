<x-layout title="{{ $camp->camp_name }}">
    <main class="grid max-[1200px]:grid-cols-1 grid-cols-[30%,auto] gap-8 mb-20">
        <div class="p-12 max-[600px]:p-6 border rounded w-full h-min max-[1200px]:order-2">
            <iframe class="rounded w-full" height="400" src="https://api.maptiler.com/maps/basic-v2/?key=O9g5DTVe3HSKnZAHGhjm#0.6/{{ $camp->latitude }}/{{ $camp->longitude }}"></iframe>
        </div>
        <div>
            <article class="p-12 max-[600px]:p-6 border rounded w-full max-[1200px]:order-1">
                <div class="w-full h-full">
                    <img loading="lazy" class="rounded mb-4 aspect-[16/9] w-full" src="{{ asset($camp->image_url) }}" alt="{{ $camp->camp_name }}">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <p class="font-bold text-black text-md antialiased">{{ $camp->camp_name }}</p>
                    <p class="font-medium text-black text-md antialiased">${{ $camp->price }}/night</p>
                </div>
                <p class="font-medium text-md mb-4 antialiased text-neutral-500">{{ $camp->description }}</p>
                <p class="font-medium italic text-md mb-4 antialiased text-neutral-500">Submitted by {{ $camp->user->username }}</p>
            </article>
            <div class="p-12 max-[600px]:p-6 border rounded w-full mt-8">
             @if ($comments->count())
                @foreach ($comments as $comment)
                <div class="mb-8">
                    <div class="flex items-center mb-4 justify-between">
                        <p class="font-bold text-md antialiased text-neutral-950">{{ App\Models\User::where('id', $comment->user_id)->firstOrFail()->username }}</p>
                        <p class="font-regular text-md antialiased text-neutral-500">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                    <p class="font-medium text-md border-b-[1px] border-neutral-300 pb-4 antialiased text-neutral-500">
                        {{ $comment->description }}
                    </p>
                </div>
                @endforeach
             @else
             <div>
                <div class="flex items-center mb-4 justify-between">
                    <p class="font-medium text-md antialiased text-neutral-500">No Comments..</p>
                </div>
            </div>
             @endif
                <div class="flex items-end justify-end">
                    <a href="{{ route('campgrounds-comment', [$camp->slug]) }}">
                        <button class="flex mt-8 bg-neutral-950 py-3 px-6 rounded">
                            <img src="{{ asset('assets/icons/Chat Bubble.svg') }}" alt="chat-icon">
                            <p class="text-white font-medium text-md antialiased ml-4">Leave a Review</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-layout>