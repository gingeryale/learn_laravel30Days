<x-layout>
    <x-slot:heading>
       Edit form for job {{ $job->title }}
</x-slot:heading>
   

<form method="POST" action="/jobs/{{ $job->id }}">

    @csrf
    @method('PATCH')

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Edit form:</h2>
      
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">

            @if($errors->all())
            <div class="mb-4">
              @foreach($errors->all() as $err)
              <li class="text-red-500 italic font-bold">{{ $err }}</li>
              @endforeach
            </div>
            @endif

            <label for="title" class="block text-sm font-bold leading-6 text-gray-900">Job Name here</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
               
                <input 
                type="text" 
                name="title" 
                id="title" 
                class="block flex-1 border-0 px-3 bg-transparent py-1.5  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="job name here" 
                value="{{ $job->title}}"
                required>
              </div>
              @error('title')
             <p class="text-xs text-red-500 font-semibold"> {{ $message}}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
          <label for="salary" class="block text-sm font-bold leading-6 text-gray-900">Job Salary</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
             
              <input 
              type="text" 
              name="salary" 
              id="salary" 
              class="block flex-1 border-0 px-3 bg-transparent py-1.5  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="job salary" 
              value="{{ $job->salary}}"
              required>
            </div>
          </div>
        </div>
    </div>
            
          </div>
  
  
    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div class="flex items-center">
            <button form="delete-form">Delete</button>
        </div>
        <div class="flex items-center gap-x-6">
            <a href="/jobs/{{$job->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </div>
  </form>
  <form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
    @csrf
    @method("DELETE");
  </form>
</x-layout>