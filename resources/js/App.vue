<template>
    <div id="app" class="container mx-auto flex-grow p-3">
        <search-component @search="search" :searching="searching"></search-component>
        <search-result-component
            :error="error"
            :name="name"
            :ticker="ticker"
            :price="price"
            :change="change"
            :searching="searching"
        ></search-result-component>
    </div>
</template>

<script>
    import axios from 'axios';
    import SearchComponent from './components/SearchComponent.vue';
    import SearchResultComponent from './components/SearchResultComponent.vue';

    export default {
        data() {
            return {
                error: null,
                name: null,
                ticker: null,
                price: null,
                change: null,
                searching: false
            }
        },
        methods: {
            search(ticker) {
                this.searching = true;
                axios
                    .get(`/api/getPrice/${ticker}`)
                    .then((response) => {
                        this.error = response.data.error;
                        this.name = response.data.name;
                        this.ticker = response.data.ticker;
                        this.price = response.data.price;
                        this.change = response.data.change;
                    })
                    .finally(() => this.$data.searching = false);
            }
        },
        computed: {
            isGreen: function () {
                return parseFloat(this.change.split(' ')[0]) > 0;
            }
        },
        components: {
            SearchComponent,
            SearchResultComponent
        }
    }
</script>