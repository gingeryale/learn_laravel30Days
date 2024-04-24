<x-layout>
    <x-slot:heading>
        Jobs page
</x-slot:heading>
    <h1 class="text-grey-400">Jobs</h1>

    <ul>
    @foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{$job['id']}}" class="text-blue-600 hover:underline">
        {{$job['title']}} pays: {{$job['salary']}}</li>
        </a>
    @endforeach
    </ul>
</x-layout>
       
