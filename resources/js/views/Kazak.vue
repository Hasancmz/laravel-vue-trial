<template>
    <div>
        <container>
            <card-container>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" :src="baseUrl + 'images/keci.jpg'" alt="Card image cap">
                    <div class="card-body">
                        <h5>Title</h5>
                        <p class="card-text">Some quick example text to build on the card.</p>
                        <h4>72 TL</h4>
                    </div>
                </div>
            </card-container>
        </container>
    </div>
</template>

<script>

import Container from '../components/Container.vue'
import CardContainer from '../components/CardContainer.vue'

    export default {

        components: {
            Container,
            CardContainer,
        }
    }
</script>

<style lang="scss" scoped>

</style> 