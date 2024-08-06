<x-layout>
  <x-breadcrumbs class="mb-4"
    :links="[
        'Jobs' => route('posts.index'),
        $post->title => route('posts.show', $post),
        'Apply' => '#',
    ]" />

  <x-post-card :$post />

  <x-card>
    <h2 class="mb-4 text-lg font-medium">
      Your Job Application
    </h2>

    <form action="{{ route('post.application.store', $post) }}" method="POST"
      enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
         <x-label for="expected_salary" :required="true">Expected Salary</x-label>
        <x-text-input type="number" name="expected_salary" />
      </div>

      <div class="mb-4">
        <x-label for="cv" :required="true">Upload CV</x-label>
        <x-text-input type="file" name="cv" />
      </div>

      <x-button class="w-full">Apply</x-button>
    </form>
  </x-card>
</x-layout>