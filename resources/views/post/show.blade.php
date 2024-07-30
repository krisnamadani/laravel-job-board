<x-layout>
  <x-breadcrumbs class="mb-4"
    :links="['Posts' => route('posts.index'), $post->title => '#']" />
  
  <x-post-card :$post>
    <p class="mb-4 text-sm text-slate-500">
      {!! nl2br(e($post->description)) !!}
    </p>
  </x-post-card>
</x-layout>