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

    @media only screen and (max-width: 600px) {
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    }
</style>