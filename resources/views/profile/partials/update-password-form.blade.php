<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="row mb-3">
            <x-input-label for="update_password_current_password" :value="__('Current Password')" class="col-md-4 col-lg-3 col-form-label"/>
            <div class="col-md-8 col-lg-9">
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>

        <div class="row mb-3">
            <x-input-label for="update_password_password" :value="__('New Password')" class="col-md-4 col-lg-3 col-form-label"/>
            <div class="col-md-8 col-lg-9">
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>

        <div class="row mb-3">
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="col-md-4 col-lg-3 col-form-label"/>
            <div class="col-md-8 col-lg-9">
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="text-center">
            <x-primary-button class="btn btn-primary w-40">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="absolute top-0 left-1/2 transform -translate-x-1/2 mt-2 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-sm"
                    role="alert"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
