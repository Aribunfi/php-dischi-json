const { createApp } = Vue;

createApp ({
    data() {
        return {
            apiUrl: "",
            discs: [
            ],
            discDetails: {},
            showDiscDetails: false,
        };
    },

    methods: {
        fetchDiscs() {
            axios.get("http://localhost/php-dischi-json/API/get-discs.php").then(response => this.discs = response.data);
        },
        showDiscDetails() {},
        hideDiscDetails() {},
    },
    created() {
        this.fetchDiscs();
    },
}).mount("#app");