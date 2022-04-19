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
import {FormField, HandlesValidationErrors} from 'laravel-nova'

// let path = (field.label);

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData, event) {

    },
  },
}
</script>
