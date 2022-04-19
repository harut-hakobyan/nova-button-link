<template>
  <default-field
      :class="[field.inline ? 'inline' : '']"
      :field="field" :errors="errors" :show-help-text="showHelpText">
    <template slot="field">
      <a
          :href="[field.path]"
          :id="field.name"
          type="text"
          class="btn btn-default btn-primary inline-flex items-center relative"
          :class="[field.buttonClasses]"
          v-model="value"
      >{{ (field.label) }}
      </a>
    </template>
  </default-field>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
