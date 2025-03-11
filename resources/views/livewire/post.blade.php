<div>
    {{-- The whole world belongs to you. --}}
    @if ($isOpen == false)

        <h5> {{ $title }}</h5>
        <div class="mt-3">
            <button wire:click="create" class="btn btn-primary">Tambah data</button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($pegawai as $data )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>
                        <button class="btn btn-primary" wire:click="edit({{ $data->id }})">Edit</button>
                        <button class="btn btn-danger" wire:click='hapus({{ $data->id }})'>Hapus</button>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>

    @else
    
    <div class="card">
        <div class="card-body">
            <form wire:submit={{ $id != null ? 'actedit' : 'add' }}>
                @if ($id != null)
                    <h5>Edit data</h5>   
                    <hr />                 
                @else
                    <h5>Tambah data</h5>
                    <hr />

                @endif
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Nama" wire:model="nama">
                    @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email" wire:model='email'>
                     @error('email')
                     <small class="text-danger">{{ $message }}</small>
                     @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jabatan" wire:model='jabatan'>
                        @error('jabatan')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                </div>
                
                 @if ($id != null)
                    <button class="btn btn-primary mt-2">Edit data</button>          
                @else
                    <button class="btn btn-primary mt-2">Simpan data</button>


                @endif
               
            </div>
        </form>

    </div>

    @endif

</div>
