<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <header-side></header-side>
        <products-header></products-header><br><br>
        <router-view></router-view>
        
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>