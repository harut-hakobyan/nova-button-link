<template>
  <div :class="[field.inline ? 'inline' : '']">
      <a
          :href="[field.path]"
          :id="field.name"
          type="text"
          class="btn btn-default btn-primary inline-flex items-center relative"
          :class="[field.buttonClasses]"
          v-model="value"
      >{{ (field.label) }}
      </a>
  </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
