<template>
    <transition name="page" mode="out-in">
        <slot>
            <div class="title m-b-md">
                <h1>
                    <strong>TABILU</strong>
                </h1>

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