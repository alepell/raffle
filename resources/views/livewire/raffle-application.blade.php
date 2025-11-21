<div class="mt-12">
    @if ($success)
        <h1>Sucesso</h1>
    @else
        <form wire:submit="save">
            <fieldset class="fieldset">
                <p class="label">Enter your email</p>
                <input type="text" class="input" wire:model="email" name="email" placeholder="Email" />
                <button class="btn btn-soft btn-neutral" type="submit">Submit</button>
            </fieldset>
        </form>
    @endif
</div>
