const { createApp } = Vue;

createApp ({
    data() {
        return {
            apiUrl: "",
            discs: [],
            discDetails: {},
            showDiscDetails: false,
        };
    },

    methods: {
        getDiscs() {},
        showDiscDetails() {},
        hideDiscDetails() {},
    },
    created() {
        this.getDiscs();
    },
}).mount("#app");