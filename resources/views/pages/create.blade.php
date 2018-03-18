@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Road Tanker</div>
                <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('admin.roadtanker.store') }}">
                      {{ csrf_field() }}
                        <fieldset>

                        
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{session('success')}}     
                        </div>
                        @endif
                        
                        <div class="form-group row {{ $errors->has('plate') ? ' has-error' : '' }}">      
                        <label class="col-xs-2 control-label">Road Tanker Plate :</label>
                            <div class="col-xs-10">
                             <input type="text" class="form-control"  title="Please use capital letters only and space eg: WTG 6090" id="plate" name="plate"  placeholder="Eg : WTG 6090"/>
                             @if ($errors->has('plate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plate') }}</strong>
                                    </span>
                                @endif
                            </div>
                       </div>   

                        <div class="form-group row {{ $errors->has('capacity') ? ' has-error' : '' }}">
                        <label class="col-xs-2 control-label">Road Tanker Capacity :</label>
                            <div class="col-xs-10">
                              <select class="form-control" id="capacity" name="capacity">
                                  <option disabled selected value>Choose Capacity</option>
                                  <option>54,600L</option>
                                  <option>43,680L</option>
                                  <option>38,220L</option>
                                  <option>32,760L</option>
                                  <option>27,300L</option>
                                  <option>21,840L</option>
                                  <option>16,380L</option>
                                  <option>10,920L</option>
                              </select> 
                                @if ($errors->has('capacity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('capacity') }}</strong>
                                    </span>
                                @endif
                            </div>
                      </div>

                       <div class="form-group row {{ $errors->has('terminal') ? ' has-error' : '' }}">
                        <label class="col-xs-2 control-label">Road Tanker Terminal :</label>
                            <div class="col-xs-10">
                              <select class="form-control" id="terminal" name="terminal">
                              <option disabled selected value>Choose Terminal</option>
                                  <option>KVDT</option>
                                  <option>LUMUT</option>
                                  <option>PRAI</option>
                                  <option>LANGKAWI</option>
                                  <option>MELAKA</option>
                                  <option>PASIR GUDANG</option>
                                  <option>KERTEH</option>
                                  <option>KUANTAN</option>
                                </select> 
                                @if ($errors->has('terminal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('terminal') }}</strong>
                                    </span>
                                @endif
                            </div>
                      </div>

                      <div class="form-group row {{ $errors->has('hauler_id') ? ' has-error' : '' }}">
                        <label class="col-xs-2 control-label">Hauler Terminal :</label>
                            <div class="col-xs-10">
                              <select class="form-control" id="hauler_id" name="hauler_id">
                              <option disabled selected value>Choose Hauler</option>
                                  <option value="1">Bagan Cipta</option>
                                  <option value="2">Shaziman</option>
                                  <option value="3">Zha</option>
                                </select> 
                                @if ($errors->has('hauler_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hauler_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                      </div>                

                      <div class="col-lg-11 col-lg-offset-1">
                      <button type="submit" class="btn btn-primary">Insert</button>
                      <button type="reset" class="btn btn-default">Cancel</button>
                      </div>
                        </fieldset>
                    </form>

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
