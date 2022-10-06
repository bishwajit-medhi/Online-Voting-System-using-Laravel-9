<x-guest-layout>
    <x-auth-card>
        <x-slot name="page">
            <a href="/">
               
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-4">
                <x-input-label for="regno" :value="__('Registration No')" />

                <x-text-input id="regno" class="block mt-1 w-full" type="text" name="regno" :value="old('deptname')" required />
            </div>
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div>
                <x-input-label for="mobile" :value="__('Mobile No')" />

                <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-input-label for="deptname" :value="__('Departmant Name')" />

                <x-text-select id="deptname" class="block mt-1 w-full" type="text" name="deptname">
                    <option value="">Hello</option>
                </x-text-select>
            </div>
           
            <div class="mt-4">
                <x-input-label for="gender" :value="__('Gender')" />

                <x-text-input id="gender" class="block mt-1 " type="radio" name="gender" value="male"  checked/>
                <x-text-input id="gender" class="block mt-1 " type="radio" name="gender" value="Female"  />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
