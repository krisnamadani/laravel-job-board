<x-layout>
  <x-breadcrumbs class="mb-4"
    :links="['Posts' => route('posts.index'), $post->title => '#']" />
  
  <x-post-card :$post />
</x-layout>