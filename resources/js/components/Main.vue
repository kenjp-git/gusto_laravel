<!--2024/05/09/23:36-->

<template>
    <main>
        <Side class="side" @show="showItems"/>
        <Items :items="items" class="items"/>
    </main>
</template>

<script>
//const axios = require('axios')
import axios from 'axios'

import Side from './main/Side.vue'
import Items from './main/Items.vue'

export default {
    components: {
        Side, Items
    },
    data() {
        return {
            items: 'Choose menu'
        }
    }, 
    methods: {
        showItems: async function(which) {
            let base_url = '/items/'
            let items_name
            switch(which) {
                case 'foods':
                    //this.items = "Foods"
                    items_name = 'foods'
                    break
                case 'drinks':
                    //this.items = "Drinks"
                    items_name = 'drinks'
                    //console.log(this.items)
                    break
                default:
                    this.items = "Cannot get"
            }
            await axios.get(`${base_url}${items_name}`).then(res => {
                this.items = res.data
            }).catch(err=> {
                console.log(err)
            })
        }
    }
}

</script>

<style>
main {
    display: block;
    position: relative;
    width: 100%;
    height: 100%;
}

.side {
    display: inline-block;
    position: relative;
    width: 20%;
}

.items {
    display: inline-block;
    position: absolute;
    width: 80%;
    height: 100%;
    padding: 1em 0 0;
    background: yellow;
}
</style>