@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Roadtanker Details</div>
                <div class="panel-body">
                {!! Form::open(array('route' => 'admin.roadtanker.import', 'method' => 'POST' , 'files' => 'true'))  !!}    
                        <div class="row">
                            <div class="col-md-10"> 
                                @if(Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @elseif(Session::has('warning')) 
                                    <div class="alert alert-warning">{{ Session::get('warning') }}</div>   
                                @endif    

                                    <div class="form-group">
                                        {!! Form::label('sample_file', 'Select File to Import: ', ['class' => 'col-md-3'])  !!}
                                        
                                        <div class="col-md-9">
                                        {!! Form::file('roadtankers', array('class' => 'form-control')) !!}
                                        {!! $errors->first('roadtankers', '<p class="alert alert-danger":message></p>') !!}
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-2">
                                {!! Form::submit('Upload', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                   {!! Form::close()  !!}

                        <divc class="row">
                            <div class="col-md-12">
                                <a class="btn btn-primary" href="{{ route('admin.roadtanker.export', ['type' => 'xls']) }}" role="button">Download - Excel xls</a>
                                <a class="btn btn-primary" href="{{ route('admin.roadtanker.export', ['type' => 'xlsx']) }}" role="button">Download - Excel xlsx</a>
                                <a class="btn btn-primary" href="{{ route('admin.roadtanker.export', ['type' => 'csv']) }}" role="button">Download - Excel CSV</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
