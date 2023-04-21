<template>
    <li class="project-item" @click="$router.push(`/project/${project.id}`)">
        <div class="project-item__content">
            <router-link :to="`/project/${project.id}`" class="content-header">
                {{ project.title + " " + project.id }}
            </router-link>
            <div class="content-footer">
                <router-link :to="`/project/${project.id}`" class="content-footer__edit">
                    <svg
                        class="icon"
                        width="24"
                        height="24"
                        role="img"
                    >
                        <use href="#edit-icon"/>
                    </svg>
                    <span class="text">Редактировать сайт</span>
                </router-link>
                <button
                    @click.stop
                    class="content-footer__visit"
                >
                    <svg
                        class="icon"
                        width="14"
                        height="14"
                        role="img"
                    >
                        <use xlink:href="#external-icon"/>
                    </svg>
                    <span class="text">Открыть сайт</span>
                </button>
            </div>
            <button @click.stop="showModal" class="project-item__more">
                <svg
                    id="more-card-options"
                    class="icon"
                    width="24"
                    height="24"
                    role="img"
                >
                    <use href="#more-icon"/>
                </svg>
            </button>
            <project-card-menu
                v-model:modal-open="modalVisible"
                :index-project="indexProject"
                @remove-project="removeProject"
            />
        </div>
    </li>
</template>

<script>
import ProjectCardMenu from "./ProjectCard/ProjectCardMenu.vue";

export default {
    name: 'ProjectCard',
    emits: ['remove-project'],
    components: {
        ProjectCardMenu
    },
    props: {
        indexProject: Number,
        project: {
            type: Object,
        },
    },
    data() {
        return {
            modalVisible: false,
        }
    },
    methods: {
        showModal() {
            this.modalVisible = true;
        },
        removeProject(index) {
            this.$emit('remove-project', index)
        }
    }
}
</script>