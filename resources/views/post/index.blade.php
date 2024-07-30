<x-layout>
  <x-breadcrumbs class="mb-4"
    :links="['Posts' => route('posts.index')]" />

  <x-card class="mb-4 text-sm">
    <form action="{{ route('posts.index') }}" method="GET">
      <div class="mb-4 grid grid-cols-2 gap-4">
        <div>
          <div class="mb-1 font-semibold">Search</div>
          <x-text-input name="search" value="" placeholder="Search for any text" />
        </div>
        <div>
          <div class="mb-1 font-semibold">Salary</div>

          <div class="flex space-x-2">
            <x-text-input name="min_salary" value="" placeholder="From" />
            <x-text-input name="max_salary" value="" placeholder="To" />
          </div>
        </div>
        <div>3</div>
        <div>4</div>
      </div>

      <button class="w-full">Filter</button>
    </form>
  </x-card>

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