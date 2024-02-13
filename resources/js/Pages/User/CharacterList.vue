<script setup>
import { Head } from '@inertiajs/vue3';

defineProps({
    test: String,
});
</script>

<template>
    <Head title="list" />
    <div>
        {{ test }}
    </div>
</template>
