<style>
.song_info {
    border: solid 1px;
    border-color: black;
}

.yt_container {
    border: solid 1px;
    /*width: 640px;
    height: 390px;*/
}
</style>

<template>
  <div>
    <div class="row">
        <div class="col-md-6">
            <div>
                <form @submit.prevent="handleSubmit">
                    <label>
                      JSON:
                      <input type="textarea" v-model="user.email"/>
                    </label>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <br>
  </div>
</template>


<script>
    window.onload=function() {
        console.log('[+] SongEditor loaded');
    }

    export default {
      data() {
        return {
          user: {
            email: '',
          }
        }
      },

      methods: {
        handleSubmit() {
          // Send data to the server or update your stores and such.
          alert(1);
        }
      }
    }
</script>