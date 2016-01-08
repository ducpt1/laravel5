@extends('views.master')
@section('title','Sub Template')
@section('noidung')
    Trang sub
    <br>
    <?php $name = '<b>DucPTTTTT</b>';?>
    {{$name}}
    <br>
    {!!$name!!}
    <br>
    {{$diem or 'Ko co diem'}}
    <br>
    <?php $diem = 3;?>
    @if($diem <= 5)
        {!! '<b>Hoc Sinh Trung Binh</b>' !!}
    @elseif($diem >=5 && $diem <=7)
        {!! '<b>Hoc Sinh Kha</b>' !!}
    @else
        {!!'Hoc Sinh Gioi'!!}
    @endif
    <br>
    {{ isset($diem) ? $diem : 'Ko co diem'}}
@stop
@section('slidebar')
    @parent
    Bottom sub
@stop