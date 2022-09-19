<template>
<Head>
  <title>this is an article page</title>
  <meta name="description" content="Your page description">
<meta property="og:url"           content="https://uplus.boragnitrealty.xyz" />
<meta property="og:type"          content="store" />
<meta property="og:title"         content="This is my custom titol" />
<meta property="og:description"   :content="description" />

</Head>
  <div>
    This is an article page
  </div>

</template>

<script setup >
  import { Link, Head } from "@inertiajs/inertia-vue3"
import { ref } from "@vue/reactivity"

  const description = ref('this description is really reactive')
</script>