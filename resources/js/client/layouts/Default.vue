<template>
    <div class="default-layout">
        <Header />
        <Container />
    </div>
</template>

<script>
import Header from "@client/components/Header";
import Container from "@client/components/Container";

export default {
    name: "Default",
    
	components: {
        Header,
        Container
	}
};
</script>

<style lang="scss">
    @import "@client/sass/modules/layout";
</style>