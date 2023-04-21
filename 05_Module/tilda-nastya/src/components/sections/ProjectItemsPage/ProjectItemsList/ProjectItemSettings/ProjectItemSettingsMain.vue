<template>
    <form class="main-form">
        <div class="main-form__item">
            <label class="item-label" for="input-title">Заголовок</label>
            <input v-model="inputValue" id="input-title" class="item-input" type="text" />
        </div>
        <div class="main-form__item">
            <label class="item-label" for="input-description">Описание</label>
            <input id="input-description" class="item-input" type="text" placeholder="Описание страницы" />
        </div>
        <div class="main-form__item">
            <label class="item-label" for="input-url">Адрес страницы</label>
            <input id="input-url" class="item-input" type="text" placeholder="Адрес страницы" />
        </div>
        <button class="main-form__button" @click.prevent="changeTitle">Сохранить изменения</button>
    </form>
</template>

<script>
export default {
    name: 'ProjectItemSettingsMain',
    props: {
        page: {
            type: Object
        },
    },
    data() {
        return {
            inputValue: this.page.title + " " + this.page.id
        }
    },
    methods: {
        changeTitle() {
            this.$emit('change-title', this.inputValue);
            this.$emit('close-modal');
        }
    }
}
</script>