<template>
  <h1 class="text-2xl font-bold text-center text-gray-900 mb-3">Masiya Group</h1>
  <Messages :messages="messages" />
  <div class=" mx-auto">

    <div class="flex items-center my-4">
      <input v-model="newMessage" id="chat" type="text"
        class="block mr-3 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-800 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500"
        placeholder="Type your message here..." @keyup.enter="sendMessage"/>

      <SendButton :onClick="sendMessage" />

    </div>
    <span class="text-red-500 py-4 px-2">{{ error }}</span>
  </div>
</template>
  
<script>
import Messages from './Messages.vue';
import SendButton from './SendButton.vue';

export default {

  components: {
    Messages,
    SendButton
  },

  data() {
    return {
      messages: [],
      newMessage: '',
      userName: '',
      error: '',
    };
  },
  mounted() {
    this.userName = prompt('Please enter your name:');
    this.listenForMessages();
  },

  methods: {
    sendMessage() {
      axios.post('/send-message', {
        name: this.userName,
        message: this.newMessage,
      })
        .then(response => {
         if (response.data.status === 'success') {
            this.newMessage = '';
            this.error = '';
          }
        })
        .catch(error => {
          this.error = error.response.data.message;
          console.error('Error sending message:', error);
        });
    },

    listenForMessages() {
      Echo.channel('public-channel')
        .listen('ChatMessageSent', (event) => {
          // console.log(event);
          this.messages.push(event.chat);
        });

    },
  },
};
</script>
  