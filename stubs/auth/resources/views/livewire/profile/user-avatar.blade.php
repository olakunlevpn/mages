<div class="col-6 justify-content-center text-center mb-5">
    <div class="d-flex align-items-center">
        <div class="flex-shrink-0">
            @if ($avatar) 
             <img height="90" src="{{ $avatar->temporaryUrl() }}" alt="Profile Photo" class="rounded-circle">
             @else 
             <img height="90" src="{{ auth()->user()->avatarUrl() }}" alt="Profile Photo" class="rounded-circle">
             @endif
        </div>
        <div class="flex-grow-1 ms-3">
            @if ($avatar) 
            <button  class="btn btn-dark text-white mt-3" wire:click="changeAvatar">
                Save changes
            </button>
            @else 
            <div class="btn btn-secondary" onclick="document.getElementById('avatar').click();"><i class="bi bi-upload"></i> Change Avatar</div>
            <input class="d-none" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="mt-2 mx-5" wire:model="avatar"/>
            @endif
        </div>
      </div>



  
</div>