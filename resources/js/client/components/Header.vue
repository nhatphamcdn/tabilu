<template>
	<header class="header">
		<div class="header__wrap">
			<div class="header__hamburger" v-on:click="display_menu()">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<h1>
				<router-link tag="a" to="/">TaBiLu</router-link>
			</h1>
			<ul class="header__menu">
				<li>
					<router-link tag="a" to="/">Home</router-link>
				</li>
				<li>
					<router-link tag="a" to="/products">Products</router-link>
				</li>
			</ul>
		</div>
	</header>
</template>

<script>
export default {
	name: "Header"
};
</script>

<style lang="scss" scoped>
$cblue: #41b883;
$cgrey: #3e3a37;
$cwhite: #ffffff;
$ccream: #fafbfc;
$cgrey_green: #435466;
$clightgrey: #dad9d7;

$body_height_8: calc((100vh - 113px) / 8);
$body_height_4: calc((100vh - 113px) / 4);

.header {
	display: flex;
	z-index: 1;
	padding: 10px 0;
	background-color: $cwhite;
	position: fixed;
	width: 100%;
	top: 0;
	justify-content: center;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    transition: 0.33s;
    
    h1 {
        font-size: 1.2rem;
    }

	&__wrap {
		padding: 0 2%;
		width: 100%;
		display: flex;
		align-items: flex-end;
		justify-content: space-between;
	}

	&__menu {
		display: flex;
		flex-direction: row;

		li {
			position: relative;
			user-select: none;
			margin-left: 20px;

			a {
				color: $cgrey;
				cursor: pointer;
				font-size: 1.15em;
				border: none;
				border-bottom: 2px solid $cwhite;
				transition: 0.15s;
				background: none;
				&:hover {
					border-bottom-color: $cblue;
					color: $cblue;
					i {
						background-color: $cblue;
					}
				}
			}
		}
	}

	&__hamburger {
		cursor: pointer;
		border-radius: 50%;
		position: absolute;
		left: 3%;
		top: 30px;
		display: none;
		transform: translateY(-50%);

		span {
			height: 2px;
			margin-top: 5px;
			margin-bottom: 5px;
			background-color: $cgrey;
			display: block;
			transition: 0.33s;
			&:nth-child(1) {
				width: 12px;
			}
			&:nth-child(2) {
				width: 24px;
			}
			&:nth-child(3) {
				width: 12px;
			}
		}
	}
}

.display_menu .header__hamburger {
	span:nth-child(1) {
		transform: rotate(45deg) translate(2px, 1px);
	}
	span:nth-child(2) {
		transform: rotate(-45deg);
	}
	span:nth-child(3) {
		transform: rotate(45deg) translate(6px, -9px);
	}
}

@keyframes spin {
	from {
		transform: rotate(0deg);
	}
	to {
		transform: rotate(-360deg);
	}
}

@media screen and (max-width: 575px) {
	.header{
        &__wrap {
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0;
        }

        &__hamburger {
            display: block;
        }

        &__menu {
            width: 100%;
            display: block;
            height: 0;
            transform-origin: 50% 0;
            transition: 0.33s ease;
            flex-direction: column;

            li {
                height: 0;
                opacity: 0;
                margin-left: 0;
                transition: 0.25s ease;
                a {
                    left: 0;
                    line-height: $body_height_8;
                    padding-left: 20px;
                    border: none;
                    height: 100%;
                    width: 100%;
                    display: block;
                    &:hover {
                        color: $cwhite;
                        background-color: $cblue;
                        i {
                            background-color: $cwhite;
                        }
                    }
                }
            }
        }
    }

    .display_menu .header__menu {
        height: calc(100vh - 64px);
        
		li {
			height: $body_height_8;
			border-bottom: 1px solid $clightgrey;
			transition: 0.25s ease;
			opacity: 1;
			display: block;
		}
    }
}
</style>