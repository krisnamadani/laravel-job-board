<x-layout>
  @foreach ($posts as $post)
    <div>{{ $post->title }}</div>
  @endforeach
</x-layout>