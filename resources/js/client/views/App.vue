<template>
	<div class="flex-center position-ref full-height">
		<div class="top-right links">
			<router-link tag="a" to="/">Home</router-link>
			<router-link tag="a" to="/products">Products</router-link>
		
		</div>

		<div class="content">
			<div class="title m-b-md">
				<h1>
					<strong>TABILU</strong>
				</h1>

				<router-view></router-view>
			</div>
		</div>
	</div>
</template>

<script>
	export default {};
</script>