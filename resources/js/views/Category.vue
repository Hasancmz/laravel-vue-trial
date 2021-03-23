<template>
    <div>
        <container>
            <card-container>
                <div v-for="card in cards" :key="card.id" class="card" style="width: 18rem;">
                    <img class="card-img-top" :src="baseUrl + card.image" alt="Card image cap">
                    <div class="card-body">
                        <h5>{{ card.title }}</h5>
                        <p class="card-text">{{ card.description }}</p>
                        <h4>{{ card.price }} TL</h4>
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
        },
        data() {
            return {
                categorySlug: null,
                cards: [ ],
            }
        },
        methods: {
            getData() {
                axios.get('/category/'+this.categorySlug+'/data').then(response => {
                    this.cards = response.data.cards;
                })
            }
            
        },
        mounted() {
            this.categorySlug = this.$route.params.slug;
            this.getData();
        },
    }
</script>

<style lang="scss" scoped>

</style> 