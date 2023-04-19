<template>
  <li class="project-item" @click="$router.push(`/project/${project.id}`)">
    <div class="project-item__content">
      <a href="javascript:void(0);" class="content-header">
        <h2 class="content-header__title">{{ project.title + " " + project.id }}</h2>
      </a>
      <div class="content-footer">
        <button @click.stop class="content-footer__edit">
          <svg
              class="icon"
              width="24"
              height="24"
              role="img"
          >
            <use href="#edit-icon" />
          </svg>
          <span class="text">Редактировать сайт</span>
        </button>
        <button
            @click="$router.push(`/project/${project.id}`)"
            class="content-footer__visit"
        >
          <svg
              class="icon"
              width="14"
              height="14"
              role="img"
          >
            <use xlink:href="#external-icon" />
          </svg>
          <span class="text">Открыть сайт</span>
        </button>
      </div>
      <button @click.stop @click="showModal" class="project-item__more">
        <svg
            id="more-card-options"
            class="icon"
            width="24"
            height="24"
            role="img"
        >
          <use href="#more-icon" />
        </svg>
      </button>
      <project-card-modal
          v-model:modal-open="modalVisible"
          :index-project="indexProject"
          :remove-current-project="removeProject"
      />
    </div>
  </li>
</template>

<script>
import ProjectCardModal from "@/components/modals/ProjectCardModal.vue";

export default {
  name: 'ProjectCard',
  components: {
    ProjectCardModal
  },
  props: {
    indexProject: Number,
    project: {
      type: Object,
    },
    removeCurrentProject: {
      type: Function
    }
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
      this.removeCurrentProject(index)
    }
  }
}
</script>