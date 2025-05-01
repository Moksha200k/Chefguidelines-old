@extends('layouts.app')

@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Profile') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

        <!-- Profile Information -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PATCH')

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                            value="{{ old('name', Auth::user()->name) }}" required autofocus />
                    </div>

                    <!-- Email -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            value="{{ old('email', Auth::user()->email) }}" required />
                    </div>

                    <!-- Update Button -->
                    <div class="mt-4">
                        <x-button class="ml-4">
                            {{ __('Update Profile') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Update Password -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete User Form -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form method="POST" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('DELETE')

                    <x-danger-button
                        onclick="return confirm('{{ __('Are you sure you want to delete your account?') }}');">
                        {{ __('Delete Account') }}
                    </x-danger-button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection