<x-layout title="Add Comment">
    <main class="w-full h-full flex items-center my-10">
            <div class="w-full flex flex-col items-center justify-center">
                <div class="w-[500px] max-[768px]:w-full px-10">
                    <h1 class="text-center text-2xl max-[1200px]:text-lg font-bold text-black antialiased mb-8">Add New Campground</h1>
                    <form method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="description" class="block mb-2 font-medium text-md antialiased text-neutral-500">Description</label>
                            <textarea class="rounded p-4 bg-neutral-50 block w-full @error('description') border border-red-500 @enderror" placeholder="This Place so tricky to find." name="description" id="description"></textarea>
                            @error('description')
                            <p class="text-red-500 font-medium mt-2 text-sm">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <button class="w-full block bg-neutral-950 text-white font-medium text-md antialiased p-4 rounded">
                            Post Comment
                        </button>
                    </form>
                </div>
            </div>
    </main>
</x-layout>