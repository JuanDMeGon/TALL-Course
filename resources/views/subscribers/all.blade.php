<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-2xl text-gray-600 font-bold mb-6 underline">
                        Subscribers
                    </p>

                    @if ($subscribers->isEmpty())
                        <div class="flex w-full bg-red-100 p-5 rounded-lg">
                            <p class="text-red-400">
                                No subscribers found.
                            </p>
                        </div>
                    @else
                        <table class="w-full">
                            <thead
                                class="border-b-2 border-gray-300 text-indigo-600"
                            >
                                <tr>
                                    <th class="px-6 py-3 text-left">
                                        Email
                                    </th>
                                    <th class="px-6 py-3 text-left">
                                        Verified
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                    <tr
                                        class="text-sm text-indigo-900 border-b border-gray-400"
                                    >
                                        <td class="px-6 py-4">
                                            {{ $subscriber->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Never' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
