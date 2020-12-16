<x-guest-layout>
    <div class="flex flex-col bg-indigo-900 w-full h-screen">
        <nav class="flex pt-5 justify-between container mx-auto text-indigo-200">
            <a class="text-4xl font-bold" href="/">
                <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
            </a>

            <div class="flex justify-end">
                @auth
                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                @endauth
            </div>
        </nav>

        <div class="flex container mx-auto items-center h-full">
            <div class="flex flex-col w-1/3 items-start">
                <h1 class="text-white font-bold text-5xl leading-tight mb-4">
                    Simple generic landing page to subscribe
                </h1>

                <p class="text-indigo-200 text-xl mb-10">
                    We are just checking the <span class="font-bold underline">TALL</span> stack. Would you mind subscribing?
                </p>

                <x-button class="py-3 px-8 bg-red-500 hover:bg-red-600">
                    Subscribe
                </x-button>
            </div>
        </div>
    </div>

    <div class="flex flex-col bg-pink-500 w-full h-screen">
        <p class="text-white text-5xl font-extrabold text-center">
            Let's do it!
        </p>
        <form class="flex flex-col items-center p-24">
            <x-input
                class="px-5 py-3 w-80 border border-blue-400"
                type="email"
                name="email"
                placeholder="Email address"
            ></x-input>
            <span class="text-gray-100 text-xs">
                We will send you a confirmation email.
            </span>
            <x-button class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center">
                Get In
            </x-button>
        </form>
    </div>
</x-guest-layout>
