@extends('firefly::layouts.app')

@section('content')
<div class="flex justify-between items-center mb-4">
    <div class="flex items-center space-x-2">
        <div class="text-3xl font-bold">{{ $discussion->title }}</div>

        @foreach ($discussion->groups as $group)
            <a href="{{ route('firefly.group.show', $group) }}" class="rounded-full text-white font-medium text-xs px-2 py-1" style="background-color: {{ $group->color }};">
                {{ $group->name }}
            </a>
        @endforeach

        <div class="flex space-x-1">
            @if ($discussion->is_private)
                <x-icon name="private" />
            @endif

            @if ($discussion->pinned_at)
                <x-icon name="pin" />
            @endif

            @if ($discussion->locked_at)
                <x-icon name="lock" />
            @endif
        </div>
    </div>

    @if (Auth::check())
        <x-discussion-options :discussion="$discussion" />
    @endif
</div>

<div class="space-y-5">
    <x-search :search="$search" />

    @if (! $posts->count())
        <x-no-results>
            {{ __('There are no posts; You could be the first to create one.') }}
        </x-no-results>
    @endif

    @foreach ($posts as $post)
        <x-post-item :post="$post" />
    @endforeach
</div>

@can ('reply', $discussion)
    <x-card class="mt-5">
        <x-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ route('firefly.post.store', [$discussion->id, $discussion->slug]) }}" method="POST">
            @csrf

            <div>
                <x-label for="content" :value="__('Content')" />

                <x-rich-textarea />
            </div>

            <div class="mt-4">
                <x-button id="submit">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </x-card>
    <x-quill-js />
@endcan
@endsection
