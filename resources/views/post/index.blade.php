<x-layout>
  @foreach ($posts as $post)
    <x-card class="mb-4">
      {{ $post->title }}
    </x-card>
  @endforeach
</x-layout>