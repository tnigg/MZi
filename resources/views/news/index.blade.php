<x-app-layout>
    <x-slot name="header">
        <div class="flex space-x-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('News') }}
            </h2>
            <div>
                <div>
                    <form action="{{ route('news.create') }}">
                        <button type="submit" class="px-2 py-1 text-sm bg-green-500 rounded">Add News</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">


            <div class="mx-auto my-2 overflow-hidden rounded shadow-lg">
                <img class="w-full max-h-64" src="https://tailwindcss.com/img/card-top.jpg"
                    alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="mb-2 text-xl font-bold">The Coldest Sunset</div>
                    <p class="text-base text-grey-darker">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                        et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
            </div>

            <div class="flex space-x-4">
                <form action="">
                    <button type="submit" class="px-2 py-1 text-sm bg-green-500 rounded">Edit</button>
                </form>

                <form action="">
                    <button type="submit" class="px-2 py-1 text-sm bg-red-500 rounded">Delete</button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
