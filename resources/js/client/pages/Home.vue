<template>
    <div class="home">
        <Product />
    </div>
</template>

<script>
    import Product from '@client/pages/partials/Product';
    
    export default {
        name: 'Home',
        components: {
            Product,
        },
        mounted() {
            console.log('Home Component mounted.')
        }
    }
</script>
