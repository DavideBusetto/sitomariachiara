<div>
    @if($emailSent)
        <div class="h2">Contatto inviato correttamente</div>
    @else
    <fieldset>
        <form class="contact-form" wire:submit.prevent="sendContactMail">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="NOME" wire:model="name">
                @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="COGNOME" wire:model="surname">
                @error('surname') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" 
                id="exampleInputEmail1" aria-describedby="emailHelp"
                 placeholder="EMAIL"
                 wire:model="email">
                 @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <input type="phone" class="form-control" placeholder="TELEFONO" wire:model="phone">
              @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control" wire:model="message"></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:model="terms">
                <label class="form-check-label" for="exampleCheck1" >Check me out</label>
                @error('terms') <span class="error text-danger">{{ $message }}</span> @enderror
              </div>
            <button type="submit" class="btn btn-primary w-100">Invia</button>
          </form>
    </fieldset>
    @endif
</div>
