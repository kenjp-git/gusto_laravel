/**2024/05/14/21:36*/
<template>
    <nav>
        <div class="button" @click="foods">Foods</div>
        <div class="button" @click="drinks">Drinks</div>
    </nav>
</template>

<script>
export default {
    data:() => {
        return {

        }
    },
    methods: {
        foods: function(){
            this.$emit('show', 'foods')
        },
        drinks: function() {
            this.$emit('show', 'drinks')
        }
    }
}
</script>

<style>
nav {
    padding: 1em 0 0;
    height: 100%;
    background: #efefef;
}

.button {
    padding: 0.25em 1em;
    color: blue;
}

.button:hover {
    border-radius: 5px;
    color: white;
    background: blue;
    cursor: pointer;
}
</style>