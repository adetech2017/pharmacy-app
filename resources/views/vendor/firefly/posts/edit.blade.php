@extends('firefly::layouts.app')

@section('content')
@if (Auth::check())
    <a class="flex items-center font-medium text-sm" href="{{ route('firefly.discussion.show', [$post->discussion->id, $post->discussion->slug]) }}">
        <svg class="mr-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
        {{ __('Back to Discussion') }}
    </a>
@endif

<h2 class="mt-5 text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
    {{ __('Edit Post') }}
</h2>

<x-card class="mt-4">
    <x-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('firefly.post.update', [$post->discussion->id, $post->discussion->slug, $post]) }}">
        @method('PUT')
        @csrf

        <!-- Content -->
        <div>
            <x-label for="content" :value="__('Content')" />

            <x-rich-textarea :value="$post->content" />
        </div>

        <div class="mt-4">
            <x-button id="submit">
                {{ __('Submit') }}
            </x-button>
        </div>

        <x-quill-js />
    </form>
</x-card>
@endsection
