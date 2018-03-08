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
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Plate</th>
                        <th>Capacity</th>
                        <th>Terminal</th>
                        <th>Hauler</th>
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
