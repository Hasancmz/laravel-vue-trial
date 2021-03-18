<template>
    <div>
        <container>
            <card-container>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" :src="baseUrl + 'images/keci.jpg'" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                        <div class="card" style="width: 18rem;">
                <img class="card-img-top" :src="baseUrl + 'images/keci.jpg'" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" :src="baseUrl + 'images/keci.jpg'" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                        <div class="card" style="width: 18rem;">
                <img class="card-img-top" :src="baseUrl + 'images/keci.jpg'" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
            CardContainer
        }
    }
</script>

<style lang="scss" scoped>
@media only screen and (max-width: 600px) {
  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
}
</style> 