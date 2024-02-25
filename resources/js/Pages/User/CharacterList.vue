<script setup>
import { Head } from '@inertiajs/vue3';

defineProps({
    characterList: String,
});
</script>

<template>
    <Head title="list" />
    <div>
        {{ characterList }}
    </div>
</template>
