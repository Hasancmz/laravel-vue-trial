<template>
    <div>
        <container>
            <card-container>
                <div class="cardd">
                    <div class="card-sectionn">
                        <div class="containerr">
                            <img :src="baseUrl + 'images/keci.jpg'" alt="">
                        </div>
                        <div class="details">
                            <h3>DENEME</h3>
                            <p>Açıklama</p>
                        </div>
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
.cardd{
    
    
    padding: 10px;
    
    .card-sectionn {
        background-color: #1c1b29;
        border-radius: 20px;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.18);
        .containerr {
            position: relative;
            clip-path: polygon(0 0,100% 0, 100% 85%, 0 100%);
            img {
                width: 100%;
                height: 300px;
                display: block;
                border-radius: 20px 20px 0 0;
            }        
            :after {
                content: "";
                height: 100%;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                border-radius: 20px 20px 0 0;
                opacity: 0.7;
            }
        }
        .details {
            padding: 20px 10px;
            h3 {
                color: #ffffff;
                font-weight: 600;
                font-size: 18px;
                margin: 10px 0 15px 0;
            }
            p {
                color: #a0a0a0;
                font-size: 15px;
                line-height: 30px;
                font-weight: 400;
            }
        }
    }
}
</style> 