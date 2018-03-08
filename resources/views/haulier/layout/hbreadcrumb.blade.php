<?php $url = Request::path();?>
<div class="col-md-12">
    <ol class="breadcrumb">
    @if ($url == 'haulier/home')
        <li class="active">Dashboard</li>
    @elseif ($url == 'haulier/kvdt')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Kvdt</li>
    @elseif ($url == 'haulier/lumut')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Lumut</li>        
    @elseif ($url == 'haulier/prai')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Prai</li>  
    @elseif ($url == 'haulier/langkawi')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Langkawi</li>  
    @elseif ($url == 'haulier/kuantan')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Kuantan</li>
    @elseif ($url == 'haulier/kerteh')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Kerteh</li>
    @elseif ($url == 'haulier/melaka')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Melaka</li>    
    @elseif ($url == 'haulier/pasirgudang')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Pasir Gudang</li>                
    @elseif ($url == 'haulier/roadtanker')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="active">Roadtanker</li>
    @elseif ($url == 'haulier/upload')  
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.pages.roadtanker') }}">Roadtanker</a></li>
        <li class="active">Upload Roadtanker</li>
    @endif
    </ol>
</div>