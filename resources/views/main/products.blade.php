@extends('layouts.app')
@section('content')
    <header-side></header-side>
    <products-header></products-header><br><br>
    <router-view></router-view>
    <footer-side></footer-side>
@endsection


