<template>
    <div>
        <search-bar @search="search" :searching="searching"></search-bar>
        <search-result
            :error="error"
            :name="name"
            :ticker="ticker"
            :price="price"
            :change="change"
            :searching="searching"
        ></search-result>
    </div>
</template>

<script>
    import axios from 'axios';
    import SearchBar from './SearchBar.vue';
    import SearchResult from './SearchResult.vue';

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
            SearchBar,
            SearchResult
        }
    }
</script>