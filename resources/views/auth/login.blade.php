<x-layout>
    <x-slot:heading>
    Login page
</x-slot:heading>
   

<form method="POST" action="/login">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Enter your account information</h2>
    

        @if($errors->all())
        <div class="mb-4">
          @foreach($errors->all() as $err)
          <li class="text-red-500 italic font-bold">{{ $err }}</li>
          @endforeach
        </div>
        @endif
  
        

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

        
            
          </div>       
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/">Home</a>
     
     <x-form-button type="submit" >Log In</x-form-button>
    </div>
  </form>
  
</x-layout>