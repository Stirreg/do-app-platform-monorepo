<template>
  <div>
    <v-row align="center">
      <v-col>
        <v-text-field v-model="name" label="Name" />
      </v-col>
      <v-col>Uppercase name: {{ upperCaseName }}</v-col>
    </v-row>
    <v-btn @click="nameToUpper">Send</v-btn>
  </div>
</template>

<script lang="ts">
import { ref, defineComponent, useContext } from '@nuxtjs/composition-api'

export default defineComponent({
  setup() {
    const context = useContext()

    const name = ref('')
    const upperCaseName = ref('')

    const nameToUpper = async () => {
      const response = await context.$axios.$get(`/name-to-upper/${name.value}`)

      upperCaseName.value = response.name
    }

    return {
      name,
      upperCaseName,
      nameToUpper,
    }
  },
})
</script>
