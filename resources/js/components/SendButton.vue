<template>
    <button type="submit" @click="onClick"
        class="inline-flex justify-center p-2 text-white bg-blue-600 rounded cursor-pointer hover:bg-blue-700">
        Send
    </button>
</template>
  
<script>
export default {
    props: {
        onClick: Function
    }
};
</script>
  