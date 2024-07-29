<x-layout>
  <x-breadcrumbs class="mb-4" :links="['Posts' => route('posts.index')]" />
  
  @foreach ($posts as $post)
    <x-post-card class="mb-4" :$post>
      <div>
        <x-link-button :href="route('posts.show', $post)">
          Show
        </x-link-button>
      </div>
    </x-post-card>
  @endforeach
</x-layout>