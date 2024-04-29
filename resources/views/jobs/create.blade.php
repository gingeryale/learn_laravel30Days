<x-layout>
    <x-slot:heading>
       Create Job
</x-slot:heading>
   

<form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create New Job</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed to job applicants.</p>

        @if($errors->all())
        <div class="mb-4">
          @foreach($errors->all() as $err)
          <li class="text-red-500 italic font-bold">{{ $err }}</li>
          @endforeach
        </div>
        @endif
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="title">Job Name here</x-form-label>
            <div class="mt-2">
               <x-form-input type="text" name="title" id="title" placeholder="job name here" required></x-form-input>
            <x-form-error name="title" />
            </div>
          </x-form-field>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="salary">Job Salary</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="salary" id="salary" placeholder="job salary" required></x-form-input>
                  <x-form-error name="salary" />
                </div>
            </x-form-field>
    </div>
            
          </div>       
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
     
     <x-form-button type="submit" >Save</x-form-button>
    </div>
  </form>
  
</x-layout>