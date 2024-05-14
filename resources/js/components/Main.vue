<!--2024/05/09/23:36-->

<template>
    <main>
        <Side class="side"/>
        <Items class="items"/>
    </main>
</template>

<script>
import Side from './main/Side.vue'
import Items from './main/Items.vue'

export default {
    components: {
        Side, Items
    },
    data() {
        return {
            
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
    background: yellow;
}
</style>