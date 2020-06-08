<template>
    <div class="flex">
        <input
            v-on:keyup.enter="search"
            v-model="ticker"
            class="w-2/3 text-gray-700 text-sm font-bold bg-white shadow-md rounded-lg py-2 px-4"
            placeholder="Search by ticker.."
        >
        <button
            @click="search"
            class="w-1/3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-4" 
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