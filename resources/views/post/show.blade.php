<x-layout>
  <x-breadcrumbs class="mb-4"
    :links="['Posts' => route('posts.index'), $post->title => '#']" />
  
  <x-post-card :$post>
    <p class="mb-4 text-sm text-slate-500">
      {!! nl2br(e($post->description)) !!}
    </p>
  </x-post-card>

  <x-card class="mb-4">
    <h2 class="mb-4 text-lg font-medium">
      More {{ $post->employer->company_name }} Posts
    </h2>

    <div class="text-sm text-slate-500">
      @foreach ($post->employer->posts as $otherPost)
        <div class="mb-4 flex justify-between">
          <div>
            <div class="text-slate-700">
              <a href="{{ route('posts.show', $otherPost) }}">
                {{ $otherPost->title }}
              </a>
            </div>
            <div class="text-xs">
              {{ $otherPost->created_at->diffForHumans() }}
            </div>
          </div>
          <div class="text-xs">
            ${{ number_format($otherPost->salary) }}
          </div>
        </div>
      @endforeach
    </div>
  </x-card>
</x-layout>