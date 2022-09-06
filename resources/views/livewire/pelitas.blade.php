<div>
   
    <div>
        <div class="container">
            <div class="row">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3>Pelita Hati Indonesia
                            <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addUmat">Add</button>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>中文名</th>
                                    <th>Umur</th>
                                    <th>Kota</th>
                                    <th>Daerah</th>
                                    <th>Handphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($pelitadata as $p)
                                <tr>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->mandarin }}</td>
                                    <td>{{ $p->umur }}</td>
                                    <td>{{ $p->kota }}</td>
                                    {{-- <td>{{ $p->daerah->daerah }}</td> --}}
                                    <td>{{ $p->hp }}</td>
                                </tr>
    
                                @endforeach
                            </tbody>
    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
</div>
