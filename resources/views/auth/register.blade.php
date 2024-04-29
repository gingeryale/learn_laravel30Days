<x-layout>
    <x-slot:heading>
     Client Registration
</x-slot:heading>
   

<form method="POST" action="/register">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create an account</h2>
    

        {{-- @if($errors->all())
        <div class="mb-4">
          @foreach($errors->all() as $err)
          <li class="text-red-500 italic font-bold">{{ $err }}</li>
          @endforeach
        </div>
        @endif --}}
  
        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="first_name">First name</x-form-label>
            <div class="mt-2">
               <x-form-input type="text" name="first_name" id="first_name" placeholder="First name" required></x-form-input>
            <x-form-error name="first_name" />
            </div>
          </x-form-field>
        </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="last_name">Last name</x-form-label>
              <div class="mt-2">
                 <x-form-input type="text" name="last_name" id="last_name" placeholder="last name" required></x-form-input>
              <x-form-error name="last_name" />
              </div>
            </x-form-field>
          </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                  <x-form-input type="email" name="email" id="email" placeholder="job email" required></x-form-input>
                  <x-form-error name="email" />
                </div>
            </x-form-field>
        </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="password">Password</x-form-label>
                <div class="mt-2">
                  <x-form-input type="password" name="password" id="password" required></x-form-input>
                  <x-form-error name="password" />
                </div>
            </x-form-field>
        </div>

        <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <div class="mt-2">
                  <x-form-input type="password" name="password_confirmation" id="password_confirmation" required></x-form-input>
                  <x-form-error name="password_confirmation" />
                </div>
            </x-form-field>
        </div>
            
          </div>       
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/">Home</a>
     
     <x-form-button type="submit" >Register</x-form-button>
    </div>
  </form>
  
</x-layout>