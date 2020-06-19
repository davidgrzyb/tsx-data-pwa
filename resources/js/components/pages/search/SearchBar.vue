<template>
    <div class="flex flex-col md:flex-row bg-white shadow-md p-3 mb-6">
        <input
            v-on:keyup.enter="search"
            v-model="ticker"
            class="w-full md:w-2/3 text-gray-700 border-b p-2 mb-4 md:mb-0"
            placeholder="Search by ticker.."
        >
        <button
            @click="search"
            class="w-full md:w-1/3 bg-blue-500 hover:bg-blue-700 text-white rounded focus:outline-none focus:shadow-outline p-3 md:ml-6"
            :class="{ 'bg-blue-700': searching }"
        >
            {{ searching ? 'Searching...' : 'Search' }}
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
        props: {
            searching: Boolean,
        },
    }
</script>