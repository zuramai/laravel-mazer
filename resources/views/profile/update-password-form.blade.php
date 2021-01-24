<div class='card' submit="updatePassword">
    <div class="card-header">
        <h4 class="card-title">{{ __('Update Password') }}</h4>
        <p class="card-description">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </div>
    <div class="card-body">
    
        <x-maz-alert color="success" on="saved">
            {{ __('Saved.') }}
        </x-maz-alert>
        <form wire:submit.prevent="updatePassword">
            
            <div class="form-group">
                <label for="current_password">{{ __('Current Password') }}</label>
                <input id="current_password" type="password"  class="form-control {{ $errors->has('current_password') ? 'is-invalid' : '' }}" name="current_password" wire:model.defer="state.current_password" autocomplete="current-password" >
                <x-maz-input-error for="current_password" />
            </div>
            
            <div class="form-group">
                <label for="password">{{ __('New Password') }}</label>
                <input id="password" type="password"  class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" wire:model.defer="state.password" autocomplete="new-password" >
                <x-maz-input-error for="password" />
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password"  class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password" wire:model.defer="state.password_confirmation" autocomplete="new-password" >
                <x-maz-input-error for="password_confirmation" />
            </div>

            <button class="btn btn-primary float-end mt-2"  wire:loading.attr="disabled" wire:target="updatePassword">Save</button>
        </form>

    </div>



</div>
