<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1 style="font-weight: bold;">User Profile</h1>

                       
                        <div class="mt-6 mb-6" style="display: flex; align-items: center;">
                            <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('images/default-profile.png') }}" alt="Profile Image" style="border-radius: 75px; 
                                                                                object-fit: fill; 
                                                                                height: 150px; 
                                                                                width: 150px;
                                                                                border: 2px solid black">
                            <h5>
                                <span style="font-size: 30px; margin-left: 20px; font-weight: bolder;">
                                    {{ $user->name }}
                                </span>
                            </h5>
                        </div>
                        <hr>
                        <div class="mt-6">
                            <h5><b>Email:</b> <u>{{ $user->email }}</u></h5>
                            <h5><b>Phone:</b> {{ $user->phone }}</h5>
                            <h5><b>Address:</b> {{ $user->address }}</h5>
                            <h5><b>Role:</b> {{ $user->role }}</h5>
                        </div>
              
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
