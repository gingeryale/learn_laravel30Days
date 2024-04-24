<x-layout>
    <x-slot:heading>
        {{ $job['title']}}
</x-slot:heading>
   

   <p>
    {{ $job['title']}} job pays: {{$job['salary']}}
   </p>
</x-layout>