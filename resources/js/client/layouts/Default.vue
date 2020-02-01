<template>
    <div class="flex-center position-ref full-height">
        <Header />

        <div class="content">
            <Container />
        </div>
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