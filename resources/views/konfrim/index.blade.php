<x-app-layout>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
    <div class="content-wrapper">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header">Konfirmasi Log harian
                            {{-- <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i></button> --}}
                        </div>
                        <div class="card-body">
                            <table class="table" id="tablelog">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">times</th>
                                    <th scope="col">textLog</th>
                                    <th scope="col">status</th>
                                </tr>
                                </thead>
                                <tbody><?php $n=0 ?>
                                    @foreach($logs as $log)
                                    <tr>
                                    <td scope="row">{{++$n}}</td>
                                    <td>{{$log->updated_at}}</td>
                                    <td>{{$log->textLog}}</td>
                                    <td>
                                        {{-- <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editkonfir">{{$log->status}}</i></button> --}}
                                        {{$log->status}}
                                        <form action="{{route('KonfirmlogHarian.update',$log->id)}}" method="post">@csrf @method('put')
                                            <select id="cars" name="editstatus" class="btn btn-sm btn-outline-secondary form-control">

                                                <option value="pending">pending</option>
                                                <option value="disetujui">disetujui</option>
                                                <option value="ditolak">ditolak</option>
                                                {{-- <option value="audi">Audi</option> --}}
                                            </select>
                                            <button class="btn btn-sm btn-primary" type="submit">edit</button>
                                        </form>
                                    </td>
                                    </tr>                            
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                        <div class="card-footer">Footer</div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editkonfir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('logHarian.store')}}" method="post" >
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="textlog" class="form-label">Email address</label>
                        <textarea class="form-control" placeholder="Leave a comment here" name="textlog" id="textlog"></textarea>
                        {{-- <input type="hidden" name="pengirim" value="">
                        <input type="hidden" name="penerima" value=""> --}}
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
        <script>
            let table;
        
            $(function() {
                table = $('#tablelog').DataTable({
                    paging: true
                    , lengthChange : true
                    , searching : true
                    , ordering : true
                    , info : true
                    , autoWidth : false,
                    
                });
                // $('#myModal').validator().on('submit', function(e) {
                //     if (! e.preventDefault()) {
                //         $.ajax({
                //                 url: $('#myModal form').attr('action'), 
                //                 type: 'post', 
                //                 data: $('#myModal form').serialize(),
                //             })
                //             .done((response) => {
                //               $('#myModal').modal('hide');
                //               table.ajax.reload();
                //             })
                //             .fail((errors)=>{
                //               alert('tidak tersimpan');
                //               return;
                //             })
                //     }
                // });
            });
        
        </script>
    
    </x-app-layout>
    