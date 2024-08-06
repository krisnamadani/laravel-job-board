<x-layout>
  <x-breadcrumbs class="mb-4"
    :links="['My Job Applications' => '#']" />

  @forelse ($applications as $application)
    <x-post-card :post="$application->post"></x-post-card>
  @empty
  @endforelse
</x-layout>