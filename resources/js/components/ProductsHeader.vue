<template>
    <div class="container">
        <div class="title-section">
            <router-link to="/products/kazak">Kazak</router-link>
            <router-link to="/products/ayakkabi">Ayakkabı</router-link>
            <router-link to="/products/mont">Mont</router-link>
            <router-link to="/products/polar">Polar</router-link>
            <router-link to="/products/esofman">Eşofman</router-link>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>
    .container {
        width: 100%;
        .title-section {      
            height: 50px;  
            display: flex;
            justify-content: space-between;
            align-items: center;
            a {
            font-size: 16px;
            text-decoration: none;
            color: #343A40;
            }
            :hover {
                color: #999;
            }
            a.router-link-exact-active {
            border-bottom: 2px solid #F67521;
            font-weight: 400;
            font-size: 17px;
            }
        }
    }
</style>