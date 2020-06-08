<template>
    <div id="app" class="flex-grow p-3 text-2xl">
        <search-component @search="search" :search-btn-text="searchText"></search-component>
        <div v-if="this.ticker" class="flex flex-wrap overflow-hidden mt-12 px-4">
            <div class="w-1/3 text-gray-700 overflow-hidden">
                Name
            </div>
            <div class="w-2/3 font-semibold text-center overflow-hidden">
                {{ this.name }}
            </div>
            <div class="w-1/3 text-gray-700 overflow-hidden">
                Ticker
            </div>
            <div class="w-2/3 font-semibold text-center overflow-hidden">
                {{ this.ticker }}
            </div>
            <div class="w-1/3 text-gray-700 overflow-hidden">
                Price
            </div>
            <div class="w-2/3 font-semibold text-center overflow-hidden">
                {{ this.price }}
            </div>
            <div class="w-1/3 text-gray-700 overflow-hidden">
                Change
            </div>
            <div :class="this.isGreen ? 'text-green-500' : 'text-red-500'" class="w-2/3 font-semibold text-center overflow-hidden">
                {{ this.change }}
            </div>
        </div>
        <p v-if="!this.ticker && !this.error" class="mt-10 px-4 text-center">
            Search to view latest TMX data..
        </p>
        <p v-if="this.error" class="mt-10 px-4 text-center">
            {{ this.error }}
        </p>
    </div>
</template>

<script>
    import axios from 'axios';
    import SearchComponent from './components/SearchComponent.vue';

    export default {
        data() {
            return {
                error: null,
                name: null,
                ticker: null,
                price: null,
                change: null,
                searchText: 'Search',
            }
        },
        methods: {
            search(ticker) {
                this.searchText = 'Searching...';
                axios
                    .get(`/api/getPrice/${ticker}`)
                    .then((response) => {
                        console.log(response.data);
                        this.error = response.data.error;
                        this.name = response.data.name;
                        this.ticker = response.data.ticker;
                        this.price = response.data.price;
                        this.change = response.data.change;
                    })
                    .finally(() => this.$data.searchText = 'Search');
            }
        },
        computed: {
            isGreen: function () {
                return parseFloat(this.change.split(' ')[0]) > 0;
            }
        },
        components: {
            SearchComponent
        }
    }
</script>