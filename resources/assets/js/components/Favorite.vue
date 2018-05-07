
<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(place)">
            <i class="far fa-star"></i>
        </a>
        <a href="#" v-else @click.prevent="favorite(place)">
            <i class="fas fa-star"></i>
            a
        </a>
    </span>
    
</template>

<script>
    export default {
        props: ['place', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(place) {
                axios.place('/favorite/'+place)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(place) {
                axios.place('/unfavorite/'+place)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>