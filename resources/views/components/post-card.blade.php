<x-card class="mb-4">
  <div class="mb-4 flex justify-between">
    <h2 class="text-lg font-medium">{{ $post->title }}</h2>
    <div class="text-slate-500">
      ${{ number_format($post->salary) }}
    </div>
  </div>

  <div class="mb-4 flex items-center justify-between text-sm text-slate-500">
    <div class="flex space-x-4">
      <div>Company Name</div>
      <div>{{ $post->location }}</div>
    </div>
    <div class="flex space-x-1 text-xs">
      <x-tag>
        {{ Str::ucfirst($post->experience) }}
      </x-tag>
      <x-tag>{{ $post->category }}</x-tag>
    </div>
  </div>

  {{ $slot }}
</x-card>