@extends('layouts.app')
@section('content')
    <header-side></header-side>
    ANA SAYFA
    <router-link to="/">Home</router-link>
    <router-link to="/about">About</router-link>
    <router-view></router-view>
@endsection