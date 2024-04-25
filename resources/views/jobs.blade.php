<x-layout>
    <x-slot:heading>
        Jobs page
</x-slot:heading>
    <h1 class="text-grey-400">Jobs</h1>

    <div class="space-y-4">
    @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}" class="text-gray-600 block px-4 py-6 border border-gray-200 rounded">
            <small class="font-bold text-blue-500 block">{{ $job->employer->name}}</small>
        {{$job['title']}} pays: {{$job['salary']}}
        <div>
            tagged: {{ $job->tags}}
        </div>
        </a>
    @endforeach

    <div>
        {{ $jobs->links() }}
    </div>
    </div>
</x-layout>
       
