<template>
    <div>
        <container>
            <card-container>
                <card-bootstrap></card-bootstrap>
                <card-bootstrap></card-bootstrap>
                <card-bootstrap></card-bootstrap>
                <card-bootstrap></card-bootstrap>
            </card-container>
        </container>
    </div>
</template>

<script>

import Container from '../components/Container.vue'
import CardContainer from '../components/CardContainer.vue'
import CardBootstrap from '../components/CardBootstrap.vue'

    export default {

        components: {
            Container,
            CardContainer,
            CardBootstrap
        }
    }
</script>

<style lang="scss" scoped>

</style> 