<x-layout>
  <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index'), 'Edit Job' => '#']" class="mb-4" />

  <x-card class="mb-8">
    <form action="{{ route('my-jobs.update', $post) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-4 grid grid-cols-2 gap-4">
        <div>
          <x-label for="title" :required="true">Job Title</x-label>
          <x-text-input name="title" :value="$post->title" />
        </div>

        <div>
          <x-label for="location" :required="true">Location</x-label>
          <x-text-input name="location" :value="$post->location" />
        </div>

        <div class="col-span-2">
          <x-label for="salary" :required="true">Salary</x-label>
          <x-text-input name="salary" type="number" :value="$post->salary" />
        </div>

        <div class="col-span-2">
          <x-label for="description" :required="true">Description</x-label>
          <x-text-input name="description" type="textarea" :value="$post->description" />
        </div>

        <div>
          <x-label for="experience" :required="true">Experience</x-label>
          <x-radio-group name="experience" :value="$post->experience"
            :all-option="false"
            :options="array_combine(
                array_map('ucfirst', \App\Models\Post::$experience),
                \App\Models\Post::$experience,
            )" />
        </div>

        <div>
          <x-label for="category" :required="true">Category</x-label>
          <x-radio-group name="category" :all-option="false" :value="$post->category"
            :options="\App\Models\Post::$category" />
        </div>

        <div class="col-span-2">
          <x-button class="w-full">Edit Job</x-button>
        </div>
      </div>
    </form>
  </x-card>
</x-layout>