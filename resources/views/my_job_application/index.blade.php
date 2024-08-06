<x-layout>
  <x-breadcrumbs class="mb-4"
    :links="['My Job Applications' => '#']" />

  @forelse ($applications as $application)
    <x-post-card :post="$application->post">
      <div class="flex items-center justify-between text-xs text-slate-500">
        <div>
          <div>
            Applied {{ $application->created_at->diffForHumans() }}
          </div>
          <div>
            Other {{ Str::plural('applicant', $application->post->job_applications_count - 1) }}
            {{ $application->post->job_applications_count - 1 }}
          </div>
          <div>
            Your asking salary ${{ number_format($application->expected_salary) }}
          </div>
          <div>
            Average asking salary
            ${{ number_format($application->post->job_applications_avg_expected_salary) }}
          </div>
        </div>
        <div>Right</div>
      </div>
    </x-post-card>
  @empty
  @endforelse
</x-layout>