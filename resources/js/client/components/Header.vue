<template>
	<header class="header">
		<div class="header__wrap">
			<div class="header__hamburger" v-on:click="displayMenu()">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<h1>
				<router-link tag="a" to="/">TaBiLu</router-link>
			</h1>
			<ul class="header__menu">
				<li>
					<router-link tag="a" :to="{ name: 'home'}">Home</router-link>
				</li>
				<li>
					<router-link tag="a" :to="{ name: 'products'}">Products</router-link>
				</li>
				<li>
					<router-link tag="a" :to="{ name: 'blog'}">Blog</router-link>
				</li>
				<li>
					<router-link tag="a" :to="{ name: 'contact'}">Contact</router-link>
				</li>
			</ul>
		</div>
	</header>
</template>

<script>
const body = document.getElementsByTagName("body")[0];

window.addEventListener("resize", function(event) {
	body.classList.remove("display-menu");
});

let last_scroll = 0;
window.onscroll = function() {
	const header = document.getElementsByTagName("header")[0];
	
	if(Math.abs(last_scroll - this.scrollY) <= 5) return;
	
	(this.scrollY < last_scroll) ? header.style.top = "0" : header.style.top = "-" + header.clientHeight + "px";
	last_scroll = this.scrollY;
}

export default {
	name: "Header",
	methods: {
		displayMenu : function() {
			(!body.classList.contains("display-menu")) ? body.classList.add("display-menu") : body.classList.remove("display-menu");
		},
	}
};
</script>

<style lang="scss" scoped>
	@import "@client/sass/partials/header.scss";
</style>