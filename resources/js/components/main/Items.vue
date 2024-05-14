/**2024/05/14/22:01*/
<template>
    <section>
        <p>{{content}}</p>
    </section>
</template>

<script>
export default {
    props: {
        items: String
    }, 
    data() {
        return {
            
        }
    }, 
    computed: {
        content: function() {
            return this.items
        }
    }

}
</script>

<style>
section {
    display: inline-block;
    font-size: 1em;
}

p {
    padding: 0 1em;
}
</style>