<template>
    <div class="py-2 px-3 rounded">
        <h1 v-if="messages.length === 0" class="text-center text-gray-500 text-lg">No messages yet.</h1>

        <ul v-for="message in messages" :key="message.id">
  <li class="p-2 bg-gray-200 my-3 rounded">
    <div>
      <span class="text-gray-500">{{ message.name }}</span>: {{ message.message }}
    </div>
    <div class="text-right">
      <span class="text-gray-500 text-sm">{{ formatTimeAgo(message.created_at) }}</span>
    </div>
  </li>

</ul>

    </div>
</template>


<script>
import { formatDistanceToNow } from 'date-fns';
export default {
    props: ['messages'],

    methods: {
    formatTimeAgo(timestamp) {
      const timeAgo = formatDistanceToNow(new Date(timestamp), { addSuffix: true });
      return timeAgo;
    },
  },

}

</script>