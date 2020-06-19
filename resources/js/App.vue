<template>
    <div class="flex flex-col h-screen">
        <div class="flex-grow">
            <navbar></navbar>
            <div id="app" class="container mx-auto p-3">
                <router-view></router-view>
            </div>
        </div>
        <footer-component></footer-component>
    </div>
</template>

<script>
    import Navbar from './components/Navbar.vue';
    import FooterComponent from './components/Footer.vue';

    export default {
        components: {
            Navbar,
            FooterComponent,
        }
    }
</script>