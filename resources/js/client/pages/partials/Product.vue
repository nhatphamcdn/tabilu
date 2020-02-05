<template>
	<div class="product-lists">
		<div class="row">
			<div
				class="col-lg-3 col-xl-3 col-md-4 col-12 col-sm-6"
				v-for="product in products"
				:key="product.slug"
			>
				<div class="product">
					<div class="product__inner">
						<div class="product__thumb">
							<router-link tag="a" :to="{ name: 'product-detail', params: {slug: product.slug}}">
								<img v-bind:src="product.images.length ? product.images[0].path : null" alt="product" title="product" />
							</router-link>
						</div>
					</div>
					<div class="product__details">
						<h2>
							<router-link
								tag="a"
								:to="{ name: 'product-detail', params: {slug: 'abc'}}"
							>{{ product.name }}</router-link>
						</h2>
						<ul class="product__price">
							<li class="base__price">{{ product.price }} <span>VNĐ</span></li>
							<li class="sale__price">{{ product.sale_price }} <span>VNĐ</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
	name: "Product",
	computed: mapGetters({
        products: 'products/products'
    }),
	beforeCreate() {
        this.$store.dispatch("products/fetchProducts");
	},
};
</script>

<style lang="scss" scoped>
@import "@client/sass/partials/product";
</style>