<style>
.songs_container {

}

.songs_container table {
  table-layout: fixed;
}

.sup {  
    vertical-align: super;
    font-size: smaller;
}
</style>

<template>

  <div id="example-1" class="songs_container">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>Song</th>
              <!--
              <th>Artists</th>
              !-->
              <th>Translations</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(song, sindex) in songs">
              <td><span class="sup">{{song.lang }}</span> {{ song.title }}</td>
<!--
              <td>
                <div v-for="(artist, aindex) in song.artists">
                  <span>{{artist.name }}</span>
                </div>
              </td>
!-->
              <td>
                <div v-for="(translation, tindex) in song.translations">
                  <span class="sup">{{translation.lang }}</span> <router-link :to="{ name: 'SongView', params: { id: song.id, translationid: translation.id }}">
                    {{ translation.title_tr1 }}
                  </router-link>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <hr>







    <nav aria-label="...">
      <ul class="pager">
        
        <li v-if="first_page == 1" class="disabled">
        <router-link :to="{ name: 'Songs', params: { page:prev_page }}" v-on:click.native="fetchSongs(prev_page)">Prev</router-link>
        </li>
        <li v-else>
        <router-link :to="{ name: 'Songs', params: { page:prev_page }}" v-on:click.native="fetchSongs(prev_page)">Prev</router-link>
        </li>

        <li>
          {{ current_page }}
        </li>
        
        <li v-if="last_page == 1" class="disabled">
        <router-link :to="{ name: 'Songs', params: { page:next_page }}" v-on:click.native="fetchSongs(next_page)">Next</router-link>
        </li>
        <li v-else>
        <router-link :to="{ name: 'Songs', params: { page:next_page }}" v-on:click.native="fetchSongs(next_page)">Next</router-link>
        </li>
      </ul>
    </nav>
  </div>
</template>


<script>
/*
<!--
      <router-link :to="{ name: 'SongView', params: { id: song.id }}">{{ song.title }}</router-link>
!-->
*/

  //alert('Songs.vue');
  
  export default {
    data() {
        return {
            songs: [],
            songs_loaded: 0,
            current_page: 0,
            next_page: 0,
            prev_page: 0,
            first_page: 0,
            last_page: 0,
        }
    },
    created() {
        console.log('Component created.')
        var page = this.$route.params.page || 1;
        this.fetchSongs(page)
    },
    mounted() {
        console.log('Component mounted.')
    },
    updated() {
      console.log('Component updated');
    },
    methods: {
        fetchSongs(page) {
            console.log('Fetching songs (' + page +')', '(app url: ' + APP_URL + ')')
            this.$http.get(APP_URL + '/api/songs/' + page).then((response) => {
               
                console.log('----BODY----');
                console.log(response.body);
                console.log('----BODY----');
                
                //console.log('[+] success callback');
                //this.$set('songs', response.body);
                
                //without pagination:
                //this.songs = response.body;
                
                //with pagination:
                this.songs = response.body.data;
                this.songs_loaded = 1;
                this.current_page = response.body.current_page;
                this.next_page = this.current_page;
                this.prev_page = this.current_page;
                this.first_page = 1;
                this.last_page = 1;

                if(response.body.prev_page_url != null) {
                  this.first_page = 0;
                  this.prev_page = this.prev_page -1;
                }

                if(response.body.next_page_url != null) {
                  this.last_page = 0;
                  this.next_page = this.next_page + 1;
                }


                //for(var x =0; x < 2; x++) {
                //    console.log(this.songs[x]);
                //}
            }, (response) => {
                //console.log('[-] error callback');
            });
        }
    }
  }
</script>

              <!--<td>{{ song.id }}</td>!-->
              <!--<td>{{ song.translations.length }}</td>!-->



<!--

                <div v-if = "song.translations != null">
                    <div v-for="check in song.translations">
                        <router-link :to="{ name: 'SongView', params: { id: song.id, translationid: check.id }}">
                          {{ check.title_tr2 }}
                        </router-link>
                    </div>
                </div>


            <tr v-for="song in songs">
              <td>
                {{ song.title }}
              </td>
              
              <td>
              </td>

              <td>
              </td>
            </tr>
!-->





<!--
id  song  artists   translations
1   shira   miri    
!-->

<!--
<div class="row">
  <div class="col-md-4">
    Song
  </div>
  
  <div class="col-md-4">
    Artists
  </div>
  
  <div class="col-md-4">
  Translations  
  </div>
</div>

<div class="row" v-for="song in songs">
  <div v-if = "song.translations != null">
    <div class="col-md-4">
      {{ song.title }} 
      <p class="song_lang">{{song.lang }}</p>
    </div>
    <div class="col-md-4" v-for="check in song.translations">

    </div>
    <div class="col-md-4" v-for="check in song.translations">
      <router-link :to="{ name: 'SongView', params: { id: song.id, translationid: check.id }}">
        {{ check.title_tr2 }} 
      </router-link>
      <p class="sup">{{check.lang }}</p>
    </div>
  </div>
</div>
!-->