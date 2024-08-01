<x-card class="mb-4">
  <div class="mb-4 flex justify-between">
    <h2 class="text-lg font-medium">{{ $post->title }}</h2>
    <div class="text-slate-500">
      ${{ number_format($post->salary) }}
    </div>
  </div>

  <div class="mb-4 flex items-center justify-between text-sm text-slate-500">
    <div class="flex space-x-4">
      <div>{{ $post->employer->company_name }}</div>
      <div>{{ $post->location }}</div>
    </div>
    <div class="flex space-x-1 text-xs">
      <x-tag>
        <a href="{{ route('posts.index', ['experience' => $post->experience]) }}">
          {{ Str::ucfirst($post->experience) }}
        </a>
      </x-tag>
      <x-tag>
        <a href="{{ route('posts.index', ['category' => $post->category]) }}">
          {{ $post->category }}
        </a>
      </x-tag>
    </div>
  </div>

  <p class="mb-4 text-sm text-slate-500">
    {!! nl2br(e($post->description)) !!}
  </p>

  {{ $slot }}
</x-card>