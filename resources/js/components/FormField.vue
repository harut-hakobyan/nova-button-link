<template>
  <div :class="[field.inline ? 'inline' : '']">
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
  </div>
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
