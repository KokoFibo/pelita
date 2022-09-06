@extends('layouts.app')
@section('container')
    

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
                        <input type="search" name="search" id="search" class="form-group mb-3" placeholder="Search....">
                        <table class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>中文名</th>
                                    <th>Umur</th>
                                    <th>Daerah</th>
                                    <th>Kota</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="allData">
                                
                                @foreach($pelitadata as $p)
                                <tr>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->mandarin }}</td>
                                    <td>{{ $p->umur }}</td>
                                    <td>{{ $p->daerah->daerah }}</td>
                                    <td>{{ $p->kota }}</td>
                                    <td>
                                        <a href="#"><button class="btn btn-success btn-sm">Show</button></a>
                                        <a href="#"><button class="btn btn-warning btn-sm">Update</button></a>
                                        <a href="#"><button class="btn btn-danger btn-sm">Delete</button></a>
                                    </td>
                                </tr>
    
                                @endforeach
                            </tbody>
                            <tbody id="content" class="searchData"></tbody>
    
                        </table>
                        {{ $pelitadata->onEachSide(1)->links() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#search').on('keyup', function(){
              $value=$(this).val();
              if($value){
                $('.allData').hide();
                $('.searchData').show();
              } else {
                $('.allData').show();
                $('.searchData').hide();
              } 
              $.ajax({
                  type:'get',
                  url:"{{ route('searchData') }}",
                  data:{'search': $value},
      
                  success:function(data){
                      console.log(data);
                      $('#content').html(data);
                  }
      
              });
          })
        
      
      
      </script>
    @endsection
    
    
    
    
    
    

