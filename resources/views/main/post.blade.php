<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div id="app">
    <header-side></header-side>
    Ben POST Sayfasıyım
    <br><br><br>
    <router-link to='/'>Home</router-link>
    <router-link to='/about'>POST</router-link>
    <router-view></router-view>
</div>
<script src="{{ asset('js/app.js') }}"></script>


