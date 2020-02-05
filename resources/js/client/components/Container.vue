<template>
    <transition name="page" mode="out-in">
        <slot>
            <div class="container">
                <router-view />
            </div>
        </slot>
    </transition>
</template>

<script>
export default {
    name: 'Container',
};
</script>