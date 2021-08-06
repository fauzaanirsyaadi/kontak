<div>
    @if($mode_update)
    	@include('livewire.update-contact')
    @else
    	@include('livewire.create-contact')
    @endif

    <div class="mt-4">
    	<table class="table table-bordered">
    		<thead>
    			<tr>
    				<td>ID</td>
    				<td>Nama</td>
    				<td>No. Telepon</td>
    				<td>Aksi</td>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach($data as $row)
    			<tr>
    				<td>{{ $row->id }}</td>
    				<td>{{ $row->nama }}</td>
    				<td>{{ $row->no_telepon }}</td>
    				<td>
    					<button class="btn btn-xs btn-warning" wire:click="edit({{ $row->id }})">Edit</button>
    					<button class="btn btn-xs btn-danger" wire:click="delete({{ $row->id }})">Delete</button>
    				</td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>
    	
    </div>
</div>
