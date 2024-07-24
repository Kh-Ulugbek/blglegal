<form>
    <h1 class="text-base font-semibold leading-7 text-gray-900 text-4xl text-center m-4">Intake Form</h1>
    <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
            <x-input-label for="first_name" :value="__('First Name')"/>
            <x-text-input wire:model.live="first_name" id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                          required autofocus autocomplete="first_name"/>
            <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
        </div>

        <div class="sm:col-span-3">
            <x-input-label for="last_name" :value="__('Last Name')"/>
            <x-text-input wire:model.live="last_name" id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                          required autofocus autocomplete="last_name"/>
            <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="date_of_birth" :value="__('Date of birth')"/>
            <x-flat-pickr
                wire:model.live="date_of_birth"
                id="date_of_birth" format="YYYY-DD-MM"
                          :options="['enableTime' => 'false', 'dateFormat' => 'Y-m-d', 'altFormat' => 'F j, Y']"
                          class="block mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full"
                          type="text" name="date_of_birth" required autofocus
                          autocomplete="date_of_birth"/>
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="social_security_number" :value="__('Social Security Number')"/>
            <x-text-input wire:model.live="social_security_number" id="social_security_number" class="block mt-1 w-full" type="text"
                          name="social_security_number"
                          required autofocus autocomplete="social_security_number"/>
            <x-input-error :messages="$errors->get('social_security_number')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="married" :value="__('Married?')"/>
            <select
                wire:model.live="married"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                <option>Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <x-input-error :messages="$errors->get('married')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="gender" :value="__('Gender')"/>
            <select
                wire:model.live="gender"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                <option>Select</option>
                <option value="male">Male</option>
                <option value="Female">Female</option>
                <option value="Non-binary">Non-binary</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="street_address" :value="__('Street Address')"/>
            <x-text-input wire:model.live="street_address" id="street_address" class="block mt-1 w-full" type="text"
                          name="street_address"
                          required autofocus autocomplete="street_address"/>
            <x-input-error :messages="$errors->get('street_address')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="city" :value="__('City')"/>
            <x-text-input wire:model.live="city" id="city" class="block mt-1 w-full" type="text"
                          name="city"
                          required autofocus autocomplete="city"/>
            <x-input-error :messages="$errors->get('city')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="state" :value="__('State')"/>
            <x-text-input wire:model.live="state" id="state" class="block mt-1 w-full" type="text"
                          name="state"
                          required autofocus autocomplete="state"/>
            <x-input-error :messages="$errors->get('state')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="zip_code" :value="__('Zip Code')"/>
            <x-text-input wire:model.live="zip_code" id="zip_code" class="block mt-1 w-full" type="text"
                          name="zip_code"
                          required autofocus autocomplete="zip_code"/>
            <x-input-error :messages="$errors->get('zip_code')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input wire:model.live="email" id="email" class="block mt-1 w-full" type="email" name="email" required
                          autocomplete="email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="phone" :value="__('Phone')"/>
            <x-text-input wire:model.live="phone" id="phone" class="block mt-1 w-full" type="text"
                          name="phone"
                          required autofocus autocomplete="phone"/>
            <x-input-error :messages="$errors->get('phone')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="emergency_contact_name" :value="__('Emergency Contact Name')"/>
            <x-text-input wire:model.live="emergency_contact_name" id="emergency_contact_name" class="block mt-1 w-full" type="text"
                          name="emergency_contact_name"
                          required autofocus autocomplete="emergency_contact_name"/>
            <x-input-error :messages="$errors->get('emergency_contact_name')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="emergency_contact_number" :value="__('Emergency Contact Number')"/>
            <x-text-input wire:model.live="emergency_contact_number" id="emergency_contact_number" class="block mt-1 w-full" type="text"
                          name="emergency_contact_number"
                          required autofocus autocomplete="emergency_contact_number"/>
            <x-input-error :messages="$errors->get('emergency_contact_number')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-6">
            <x-input-label for="address_of_accident" :value="__('Address of Accident')"/>
            <x-text-input wire:model.live="address_of_accident" id="address_of_accident" class="block mt-1 w-full" type="text"
                          name="address_of_accident"
                          required autofocus autocomplete="address_of_accident"/>
            <x-input-error :messages="$errors->get('address_of_accident')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="date_of_accident" :value="__('Date of Accident')"/>
            <x-flat-pickr
                wire:model.live="date_of_accident"
                id="date_of_accident" format="YYYY-DD-MM"
                          :options="['enableTime' => 'false', 'dateFormat' => 'Y-m-d', 'altFormat' => 'F j, Y']"
                          class="block mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full"
                          type="text" name="date_of_accident" required autofocus
                          autocomplete="date_of_accident"/>
            <x-input-error :messages="$errors->get('date_of_accident')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="state_of_accident" :value="__('State of Accident')"/>
            <x-text-input wire:model.live="state_of_accident" id="state_of_accident" class="block mt-1 w-full" type="text"
                          name="state_of_accident"
                          required autofocus autocomplete="state_of_accident"/>
            <x-input-error :messages="$errors->get('state_of_accident')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-6">
            <x-input-label for="approximate_damage_to_the_vehicle" :value="__('Approximate Damage to The Vehicle $')"/>
            <x-text-input wire:model.live="approximate_damage_to_the_vehicle" id="approximate_damage_to_the_vehicle" class="block mt-1 w-full" type="text"
                          name="approximate_damage_to_the_vehicle"
                          required autofocus autocomplete="approximate_damage_to_the_vehicle"/>
            <x-input-error :messages="$errors->get('approximate_damage_to_the_vehicle')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-6">
            <x-input-label for="who_injured" :value="__('Were You The Driver, Passenger or Pedestrian ?')"/>
            <select wire:model.live="who_injured"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                <option>Select</option>
                <option value="driver">Diver</option>
                <option value="passenger_front">Passenger Front</option>
                <option value="passenger_back">Passenger Back</option>
                <option value="pedestrian">Pedestrian</option>
            </select>
            <x-input-error :messages="$errors->get('who_injured')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="insurance_company" :value="__('Your Insurance Company Name')"/>
            <x-text-input wire:model.live="insurance_company" id="insurance_company" class="block mt-1 w-full" type="text"
                          name="insurance_company"
                          required autofocus autocomplete="insurance_company"/>
            <x-input-error :messages="$errors->get('insurance_company')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="policy_number" :value="__('Your Policy Number')"/>
            <x-text-input wire:model.live="policy_number" id="policy_number" class="block mt-1 w-full" type="text"
                          name="policy_number"
                          required autofocus autocomplete="policy_number"/>
            <x-input-error :messages="$errors->get('policy_number')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-6">
            <x-input-label for="working_status" :value="__('Were You Working At The Time of Accident ?')"/>
            <select wire:model.live="working_status"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                <option>Select</option>
                <option value="yes" >Yes</option>
                <option value="no" >No</option>
            </select>
            <x-input-error :messages="$errors->get('working_status')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-6">
            <x-input-label :value="__('What Are The Injuries')"/>
            <x-input-error :messages="$errors->get('injuries')" class="mt-2"/>
        </div>

        <div class="sm:col-span-6">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <fieldset class="sm:col-span-3">
                    <div class="space-y-5">
                        @if($injures and count($injures) > 0)
                            @for($x = 0; $x < ceil(count($injures) / 2); $x++)
                                <div class="relative flex items-start">
                                    <div class="flex h-6 items-center">
                                        <input wire:model="injuries" value="{{ $injures[$x]['id'] }}" id="injure_{{ $injures[$x]['id'] }}"
                                               aria-describedby="neck-description" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="ml-3 text-sm leading-6">
                                        <label for="injure_{{ $injures[$x]['id'] }}"
                                               class="font-medium text-gray-900">{{ $injures[$x]['name'] }}</label>
                                    </div>
                                </div>
                            @endfor
                        @endif
{{--                        @foreach($injures as $injure)--}}
{{--                            <div class="relative flex items-start">--}}
{{--                                <div class="flex h-6 items-center">--}}
{{--                                    <input wire:model="injuries" value="{{ $injure->id }}" id="injure_{{ $injure->id }}"--}}
{{--                                           aria-describedby="neck-description" type="checkbox"--}}
{{--                                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
{{--                                </div>--}}
{{--                                <div class="ml-3 text-sm leading-6">--}}
{{--                                    <label for="injure_{{ $injure->id }}"--}}
{{--                                           class="font-medium text-gray-900">{{ $injure->name }}</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                    </div>
                </fieldset>

                <fieldset class="sm:col-span-3">
                    <div class="space-y-5">
                        @if($injures and count($injures) > 0)
                            @for($x = 0; $x < floor(count($injures) / 2); $x++)
                                <div class="relative flex items-start">
                                    <div class="flex h-6 items-center">
                                        <input wire:model="injuries" value="{{ $injures[$x + ceil(count($injures) / 2)]['id'] }}" id="injure_{{ $injures[$x + ceil(count($injures) / 2)]['id'] }}"
                                               aria-describedby="neck-description" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="ml-3 text-sm leading-6">
                                        <label for="injure_{{ $injures[$x + ceil(count($injures) / 2)]['id'] }}"
                                               class="font-medium text-gray-900">{{ $injures[$x + ceil(count($injures) / 2)]['name'] }}</label>
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="treatment" :value="__('What Are You Going For Treatment ?')"/>
            <x-text-input wire:model.live="treatment" id="treatment" class="block mt-1 w-full" type="text"
                          name="treatment"
                          required autofocus autocomplete="treatment"/>
            <x-input-error :messages="$errors->get('treatment')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-3">
            <x-input-label for="therapy" :value="__('Name and Phone Number For Therapy ?')"/>
            <x-text-input wire:model.live="therapy" id="therapy" class="block mt-1 w-full" type="text"
                          name="therapy"
                          required autofocus autocomplete="therapy"/>
            <x-input-error :messages="$errors->get('therapy')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-6">
            <x-input-label for="hospital" :value="__('Did You Go To The Hospital ?')"/>
            <select wire:model.live="hospital"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                <option>Select</option>
                <option value="yes" >Yes</option>
                <option value="yes" >No</option>
            </select>
            <x-input-error :messages="$errors->get('hospital')" class="mt-2"/>
        </div>

        <div class="mt-2 sm:col-span-6">
            <x-input-label :value="__('Do You Receive SSI, SSD, Public Assistance')"/>
            <x-input-error :messages="$errors->get('public_assistance')" class="mt-2"/>
        </div>

        <div class="sm:col-span-6">
            <fieldset>
                <div class="space-y-5">
                    @foreach($assistances as $assistance)
                        <div class="relative flex items-start">
                            <div class="flex h-6 items-center">
                                <input wire:model="public_assistance" value="{{ $assistance->id }}" id="assistance_{{ $assistance }}" aria-describedby="back-description" name="public_assistance[]"
                                       type="checkbox"
                                       class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="ml-3 text-sm leading-6">
                                <label for="assistance_{{ $assistance }}" class="font-medium text-gray-900">{{ $assistance->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </fieldset>
        </div>

        <div class="flex items-center justify-end mt-2 sm:col-span-6">

            <x-primary-button wire:click="submit" type="button" class="ms-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>

    </div>
</form>
