@extends('admin.layout.auth')
@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        @include('components.menu', ['pasirgudang' => count($pasirgudang)])
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Pasir Gudang Terminal</div>

                <div class="panel-body">
                        Pasir Gudang Terminal
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Plate</th>
                        <th>Capacity</th>
                        <th>Terminal</th>
                        <th>Hauler</th>
                    </tr>
                
                @if(count($pasirgudang) > 0)
                    <?php $counter = 1; ?>
                    @foreach($pasirgudang as $i)
                        <tr>
                            <td>{{$counter++}}</td>
                            <td>{{$i->plate}}</td>
                            <td>{{$i->capacity}}</td>
                            <td>{{$i->terminal}}</td>
                            <td>
                                @if($i->hauler_id == 1)
                                    BCSB
                                @elseif($i->hauler_id == 2)    
                                    STSB
                                @elseif($i->hauler_id == 3)    
                                    ZHA
                                @endif
                            </td>
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