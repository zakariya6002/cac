<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" x-data="{role_id: 2}">
            @csrf

            <div>
                <x-jet-label for="dob" value="{{ __('Date Of Birth') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus autocomplete="dob" />
            </div>

            <div>
                <x-jet-label for="bio" value="{{ __('bio') }}" />
                <x-jet-input id="bio" class="block mt-1 w-full" type="text" name="bio" :value="old('bio')" required autofocus autocomplete="bio" />
            </div>

            <div>
                <x-jet-label for="experience" value="{{ __('experience') }}" />
                <x-jet-input id="experience" class="block mt-1 w-full" type="text" name="experience" :value="old('experience')" required autofocus autocomplete="experience" />
            </div>

            <div>
                <x-jet-label for="teacher_qualifications" value="{{ __('Qualifications') }}" />
                <x-jet-input id="teacher_qualifications" class="block mt-1 w-full" type="text" :value="old('teacher_qualifications')" name="teacher_qualifications" />
            </div>

            <div>
                <x-jet-label for="transportation" value="{{ __('transportation') }}" />
                <x-jet-input id="transportation" class="block mt-1 w-full" type="checkbox" name="transportation" :value="old('transportation')" required autofocus autocomplete="transportation" />
            </div>

            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>