<template>
    <div id="app" class="flex-grow p-3">
        <search-component @search="search"></search-component>
        <div v-if="this.data" class="flex flex-wrap overflow-hidden mt-10 px-4">
            <div class="w-1/2 text-gray-700 text-center overflow-hidden">
                Ticker
            </div>
            <div class="w-1/2 font-semibold text-center overflow-hidden">
                {{ this.data.ticker }}
            </div>
            <div class="w-1/2 text-gray-700 text-center overflow-hidden">
                Price
            </div>
            <div class="w-1/2 font-semibold text-center overflow-hidden">
                {{ this.data.price }}
            </div>
            <div class="w-1/2 text-gray-700 text-center overflow-hidden">
                Today's Change ($)
            </div>
            <div class="w-1/2 font-semibold text-center overflow-hidden">
                {{ this.data.amount_change }}
            </div>
            <div class="w-1/2 text-gray-700 text-center overflow-hidden">
                Today's Change (%)
            </div>
            <div class="w-1/2 font-semibold text-center overflow-hidden">
                {{ this.data.percentage_change }}
            </div>
        </div>
        <div v-if="!this.data" class="mt-10 px-4 text-center">
            Search to view latest TMX data..
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import SearchComponent from './components/SearchComponent.vue';

    export default {
        data() {
            return {
                error_message: '',
                data: null
            }
        },
        methods: {
            async search(ticker) {
                return axios.get(`/api/getPrice/${ticker}`)
                    .then((response) => {
                        this.data = {
                            ticker: response.data.ticker,
                            price: response.data.price,
                            amount_change: response.data.amount_change,
                            percentage_change: response.data.percentage_change
                        };
                });
            }
        },
        components: {
            SearchComponent
        }
    }
</script>