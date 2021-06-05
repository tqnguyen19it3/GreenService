@extends('admin_layout')
@section('admin_content')
<?php
    $name = Session::get('admin_name');
    if($name){
        echo '<h3>'. $name . ' đã đăng nhập thành công!'.'</h3>';
    }
?>
@endsection