<x-layout>
    <x-slot:heading>
        {{ $job->title }}
</x-slot:heading>
   

   <p>
    {{ $job['title']}} job pays: {{ $job->salary }}
   </p>
<!-- reef policey -->
   @can('edit', $job)
   <p class="mt-6">
    <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
   </p>
   @endcan
</x-layout>