<x-layout>
   <x-breadcrumbs :links="['My Jobs' => '#']" class="mb-4" />

  <div class="mb-8 text-right">
    <x-link-button href="{{ route('my-jobs.create') }}">Add New</x-link-button>
  </div>

  @forelse ($posts as $post)
    <x-post-card :$post>
      <div class="text-xs text-slate-500">
        @forelse ($post->jobApplications as $application)
          <div class="mb-4 flex items-center justify-between">
            <div>
              <div>{{ $application->user->name }}</div>
              <div>
                Applied {{ $application->created_at->diffForHumans() }}
              </div>
              <div>
                Download CV
              </div>
            </div>

            <div>${{ number_format($application->expected_salary) }}</div>
          </div>
        @empty
          <div>No applications yet</div>
        @endforelse

        <div class="flex space-x-2 mt-2">
          <x-link-button href="{{ route('my-jobs.edit', $post) }}">Edit</x-link-button>
        </div>

        <form action="{{ route('my-jobs.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <x-button>Delete</x-button>
        </form>
      </div>
    </x-post-card>
  @empty
    <div class="rounded-md border border-dashed border-slate-300 p-8">
      <div class="text-center font-medium">
        No jobs yet
      </div>
      <div class="text-center">
        Post your first job <a class="text-indigo-500 hover:underline"
          href="{{ route('my-jobs.create') }}">here!</a>
      </div>
    </div>
  @endforelse
</x-layout>