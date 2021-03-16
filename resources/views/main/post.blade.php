@extends('layouts.app')
@section('content')
    <header-side></header-side>
    Ben POST Sayfasıyım
    <br><br><br>
    <router-link to='/' exact>Home</router-link>
    <router-link to='/about' exact>POST</router-link>
    <router-view></router-view>
@endsection


