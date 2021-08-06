<div>
     <form wire:submit.prevent="update">
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        
    	<div class="form-group">
    		<label for="exampleInputName">Nama</label>
    		<input type="text" class="form-control" id="exampleInputName" wire:model="nama">
    		@error('nama') <span class="text-danger">{{ $message }}</span> @enderror
    	</div>
    	<div class="form-group">
    		<label for="exampleInputPhone">No. Telepon</label>
    		<input type="text" class="form-control" id="exampleInputPhone" wire:model="no_telepon">
    		@error('no_telepon') <span class="text-danger">{{ $message }}</span> @enderror
    	</div>
    	<button type="submit" class="btn btn-xs btn-warning">Update</button>
    </form>
</div>
