<x-app-layout>
    <x-slot name="header">
        <div class="flex space-x-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Add News') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            {{-- CARD BEGIN --}}
            <div class="px-12 py-4 mx-auto my-2 overflow-hidden rounded shadow-lg">
                <h1 class="mb-4 border-b">Please enter your news</h1>
                <form action="{{ route('news.store') }}" method="POST">
                    @csrf
                    <div>
                        <input type="text" name="title" placeholder="Enter title" class="w-full">
                    </div>
                    <div>
                        <textarea class="w-full" name="text" id="text" rows="12"
                            placeholder="Enter your text"></textarea>
                    </div>
                    <div class="flex">
                        <div class="px-3 py-2 mb-2">
                            <button class="px-2 py-1 bg-blue-400 rounded">Submit</button>
                        </div>
                        <div class="px-3 py-2 mb-2">
                            <a class="block px-2 py-1 bg-gray-400 rounded" href="{{ route('news.index') }}">Go
                                Back</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
