<template>
    <div class="images">
        <div class="active-image">
            <img :src="activeImage" alt="image" />
        </div>
        <div class="images-list">
            <button
                v-for="image in images"
                :key="image.id"
                class="images-list__item"
                @click="activeImage = image.activeImage"
            >
                <img :src="image.src" alt="image">
            </button>
        </div>
        <button class="images-button" @click="saveActiveImage">Сохранить изменения</button>
    </div>
</template>

<script>
export default {
    name: 'ProjectItemSettingsImage',
    data() {
        return {
            activeImage: '../images/img-1.jpeg',
            images: [
                {id: 1, src: '../images/img-1.jpeg', activeImage: '../images/img-1.jpeg'},
                {id: 2, src: '../images/img-2.jpeg', activeImage: '../images/img-2.jpeg'},
                {id: 3, src: '../images/img-3.jpeg', activeImage: '../images/img-3.jpeg'},
                {id: 4, src: '../images/img-4.jpeg', activeImage: '../images/img-4.jpeg'},
            ]
        }
    },
    methods: {
        saveActiveImage() {
            this.$emit('save-image', this.activeImage);
            this.$emit('close-modal');
        }
    }
}
</script>