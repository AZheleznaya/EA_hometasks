<template>
    <li class="menu-item">
        <button class="menu-item__button">
            <span class="item-title">{{ item.title }}</span>
            <span class="item-description">{{ item.description }}</span>
        </button>
    </li>
</template>

<script>
export default {
    name: 'EditMenuItem',
    props: {
        item: {
            type: Object,
        }
    }
}
</script>