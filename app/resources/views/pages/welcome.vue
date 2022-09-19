<script setup lang="ts">

import { ref } from 'vue'

import { Link, Head } from "@inertiajs/inertia-vue3"

const titi = ref(0)

const butay = () => {
	titi.value++;
}

</script>

<template >

<Head>
  <title>This is the best tile ever </title>
  <meta name="description" content="Your page description">
</Head>

<Link href="/article/article">article</Link>

<button @click.prevent="butay">ti</button>
bitlog
</template>
