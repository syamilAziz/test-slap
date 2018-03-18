@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        @include('components.menu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">RoadTanker</div>
                <div class="panel-body">
                    <a class="btn btn-success" href="{{ route('admin.pages.upload') }}">Upload</a>
                    <a class="btn btn-primary" href="{{ route('admin.pages.create') }}">Create</a>
                </div>


                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Plate</th>
                        <th>Capacity</th>
                        <th>Terminal</th>
                        <th>Hauler</th>
                        <th>Action</th>
                    </tr>
                
                @if(count($roadtankers) > 0)
                    <?php $counter = 1; ?>
                    @foreach($roadtankers as $roadtanker)
                        <tr>
                            <td>{{$counter++}}</td>
                            <td>{{$roadtanker->plate}}</td>
                            <td>{{$roadtanker->capacity}}</td>
                            <td>{{$roadtanker->terminal}}</td>
                            <td>
                                @if($roadtanker->hauler_id == 1)
                                    BCSB
                                @elseif($roadtanker->hauler_id == 2)    
                                    STSB
                                @elseif($roadtanker->hauler_id == 3)    
                                    ZHA
                                @endif
                            </td>
                             
                            <td><button type="button" class="btn btn-success btn-xs try" id="{{ $roadtanker->id }}">Update</button> <button type="button" class="btn btn-danger btn-xs remove" id="{{ $roadtanker->id }}" >Delete</button></td>
                                
                            
                        </tr>
                    @endforeach
                @else    
                    <tr><td colspan="5"><p align="center">No Record founds !!</p></td></tr>
                @endif
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    

    // remove-modal
    $(document).ready(function(){
        $(".remove").click(function(){
            
            var id = $(this).attr('id');

            console.log(id);
            $('#remove-modal').modal('show');
            $('#id').val(id);
            
        });
    });
    $(document).on('submit','.form-remove', function(e){
        e.preventDefault();
        
            $.ajax({
            type: "POST",
            url: '{{ route('admin.roadtanker.remove') }}',
            data: new FormData(this),
            contentType:false,  
            processData:false,
            success: function(data){
            
                console.log(data);
                $('#modal-remove').modal('hide');
                window.location.reload();
    
            }
        });
    });
    // $(document).ready(function(){
    //     $("#getRequest").click(function(){
    //         // $.get('getRequest', function(data){
    //         //     console.log(data);
    //         //     $('#myModal').modal('show');
    //         // });

    //         $.ajax({
    //             type: 'GET',
    //             url: 'getRequest',
    //             success: function(data){
    //                 console.log(data);
    //                 $('#myModal').modal('show');
    //             }
    //         });
    //     });
    // });
</script>
@endsection
