@extends('views.master')
@section('title','Layout Template')
@section('noidung')
Trang layout
<br>
@for($i = 0;$i <= 10;$i++)
    Trang {{ $i }} <br>
@endfor
<hr/>
<?php $i = 0;?>
@while($i <= 10)
    Trang {{ $i }}
    <?php $i++; ?> <br>
@endwhile
<hr/>
<?php $arr = array('Trang 1','Trang 2','Trang 3','Trang 4');?>
@foreach($arr as $value)
    {{ $value }} <br>
@endforeach
@stop
@section('slidebar')
    @parent
    Bottom Layout
@stop