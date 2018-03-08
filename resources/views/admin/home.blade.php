@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
            @include('components.breadcrumb')
            @include('components.menu')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as Admin!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
