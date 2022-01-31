<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('step2.post') }}" x-data="{role_id: 2}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone Number') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-jet-label for="dob" value="{{ __('Date Of Birth') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus autocomplete="dob" />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-jet-label for="bio" value="{{ __('bio') }}" />
                <x-jet-input id="bio" class="block mt-1 w-full" type="text" name="bio" :value="old('bio')" required autofocus autocomplete="bio" />
            </div>

            <div class="mt-4">
                <x-jet-label for="experience" value="{{ __('experience') }}" />
                <x-jet-input id="experience" class="block mt-1 w-full" type="text" name="experience" :value="old('experience')" required autofocus autocomplete="experience" />
            </div>

            <div class="mt-4">
                <x-jet-label for="teacher_qualifications" value="{{ __('Qualifications') }}" />
                <x-jet-input id="teacher_qualifications" class="block mt-1 w-full" type="text" :value="old('teacher_qualifications')" name="teacher_qualifications" />
            </div>

            <div class="mt-4">
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Course</label>
              <select name="subject" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"" aria-label="Default select example">
                
                <option >Bcom</option>
                <option >Software Development</option>

                
              </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="transportation" value="{{ __('transportation') }}" />
                <x-jet-input id="transportation" class="block mt-1" type="checkbox" name="transportation" :value="old('transportation')" autofocus autocomplete="transportation" />
            </div>

            <!-- <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="student_address" value="{{ __('Address') }}" />
                <x-jet-input id="student_address" class="block mt-1 w-full" type="text" :value="old('student_address')" name="student_address" />
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="student_licence_number" value="{{ __('Licence Number') }}" />
                <x-jet-input id="student_licence_number" class="block mt-1 w-full" type="text" :value="old('student_licence_number')" name="student_licence_number" />
            </div> -->

            <!-- <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="teacher_qualifications" value="{{ __('Qualifications') }}" />
                <x-jet-input id="teacher_qualifications" class="block mt-1 w-full" type="text" :value="old('teacher_qualifications')" name="teacher_qualifications" />
            </div> -->

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Finish Registration') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
