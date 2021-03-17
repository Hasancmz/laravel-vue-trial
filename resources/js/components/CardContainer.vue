<template>
    <div class="card-container">
        <slot />
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>
    .card-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr) ;
        grid-gap: 28px;
    }
</style>