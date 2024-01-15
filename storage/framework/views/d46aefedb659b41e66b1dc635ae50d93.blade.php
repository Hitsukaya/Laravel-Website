<?php

use App\Models\User;
use Illuminate\Auth\Events\Login;
use function Laravel\Folio\{middleware, name};

?>


                    <form wire:submit="authenticate" class="space-y-6">

                        <x-ui.input label="Email address" type="email" id="email" name="email" wire:model="email" />
                        <x-ui.input label="Password" type="password" id="password" name="password" wire:model="password" />

                        <div class="flex items-center justify-between mt-6 text-sm leading-5">
                            <x-ui.checkbox label="Remember me" id="remember" name="remember" wire:model="remember" />
                            <x-ui.text-link href="{{ route('password.request') }}">Forgot your password?</x-ui.text-link>
                        </div>

                        <x-ui.button type="primary" rounded="md" submit="true">Sign in</x-ui.button>
                    </form>
                