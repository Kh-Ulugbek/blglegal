<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <x-input-label for="first_name" :value="__('First Name')"/>
        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                      :value="old('first_name')" required autofocus autocomplete="name"/>
        <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
    </div>

    <div class="mt-4">
        <x-input-label for="last_name" :value="__('Last Name')"/>
        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                      :value="old('last_name')" required autofocus autocomplete="name"/>
        <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
    </div>

    <div class="mt-4">
        <x-input-label for="date_of_birth" :value="__('Date of birth')"/>
        <x-flat-pickr id="date_of_birth"
                      class="block mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                      type="text" name="date_of_birth" :value="old('date_of_birth')" required autofocus
                      autocomplete="date_of_birth"/>
        <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2"/>
    </div>

    <div class="mt-4">
        <x-input-label for="social_security_number" :value="__('Social Security Number')"/>
        <x-text-input id="social_security_number" class="block mt-1 w-full" type="text" name="social_security_number"
                      :value="old('social_security_number')" required autofocus autocomplete="name"/>
        <x-input-error :messages="$errors->get('social_security_number')" class="mt-2"/>
    </div>

    <div class="mt-4">
        <x-input-label for="gender" :value="__('Gender')"/>
        <select name="gender" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <option>Male</option>
            <option>FeMale</option>
            <option>Non-binary</option>
        </select>
        <x-input-error :messages="$errors->get('gender')" class="mt-2"/>
    </div>


    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                      autocomplete="username"/>
        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
    </div>

    <div class="flex items-center justify-end mt-4">

        <x-primary-button type="button" class="ms-4">
            {{ __('Submit') }}
        </x-primary-button>
    </div>

</form>
