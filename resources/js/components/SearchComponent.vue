<template>
    <div class="flex flex-col">
        <input
            v-on:keyup.enter="search"
            v-model="ticker"
            class="text-gray-700 text-sm font-bold text-lg bg-white shadow-md rounded-lg py-4 px-4"
            placeholder="Search by ticker.."
        >
        <button
            @click="search"
            class="bg-blue-500 hover:bg-blue-700 text-white text-lg font-bold py-4 px-4 rounded focus:outline-none focus:shadow-outline mt-4" 
        >
            Search
        </button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                ticker: ''
            }
        },
        methods: {
            search() {
                if (this.ticker) {
                    this.$emit('search', this.ticker);
                    this.ticker = '';
                }
            },
        },
    }
</script>