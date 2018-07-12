<style>
.song_info {
    border: solid 1px;
    border-color: black;
}

.song_title {

}

.song_title_other {

}

.yt_container {
    border: solid 1px;
    /*width: 640px;
    height: 390px;*/
}

.lyrics_container {
    border: solid 1px;
    border-color: black;
}


</style>

<template>
  <div>
    <div class="row">
        <div class="col-md-6">
            <div>
                <span>Song Info</span>
                <div v-show="LyricsController.song.title" class="song_info">
                    <div class="song_title">
                        {{ LyricsController.song.title }}
                    </div>


                    <div class="song_title_other">
                        {{ LyricsController.song.title_tr1 }} <span v-if="LyricsController.song.has_lyrics_tr1 == true && LyricsController.song.has_lyrics_tr2 == true">//</span> <span v-if="LyricsController.song.has_lyrics_tr2 == true">{{ LyricsController.song.title_tr2 }}</span>
                    </div>



                    <!-- Any artists at all? !-->
                    <div v-if="LyricsController.song.artists.length > 0">
                        <hr>

                        Sung by: 
                        <div v-for="(artist, aindex) in LyricsController.song.artists">
                            <span>{{ artist.name }}</span>

                            <!-- Separating comma? !-->
                            <span v-if="aindex < LyricsController.song.artists.length-1">
                            ,
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
            <div class="yt_container">
                <div class="embed-responsive embed-responsive-16by9">
                  <youtube-component></youtube-component>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
            <div>
                <span>Lyrics</span>
            </div>

            <div class="lyrics_container">
                <div v-if="song_loaded == 0">
                    <b>Song loading...</b>
                </div>
                <div v-else-if="LyricsController.song.current_id < 0" class="lyrics_display">
                    <div class="line_fl">&nbsp;</div>
                    

                    <div v-if="LyricsController.song.lyrics_tr1" class="line_tr1">
                        &nbsp;
                    </div>
                    

                    <div v-if="LyricsController.song.lyrics_tr2" class="line_tr2">
                        &nbsp;
                    </div>
                </div>
                <div v-else="LyricsController.song.current_id > -1" class="lyrics_display">
                    <div class="line_fl">
                        {{ LyricsController.song.lyrics[LyricsController.song.current_id] }}
                    </div>

                    
                    <div v-if="LyricsController.song.lyrics_tr1" class="line_tr1">
                        {{ LyricsController.song.lyrics_tr1[LyricsController.song.current_id] }}
                    </div>

                    
                    <div v-if="LyricsController.song.lyrics_tr2" class="line_tr2">
                        {{ LyricsController.song.lyrics_tr2[LyricsController.song.current_id] }}
                    </div>
                    <div v-else class="line_tr2">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>



<script>
        import { LyricsController } from '../lyrics_class.js';





































export default {
    data() {
        return {
            //LyricsController: { song: { current_id: -1 }, status: '' },
            LyricsController: LyricsController,
            status: '',
            song_loaded: 0,
        }
    },




    created() {
        console.log('Component created.')
        //alert(this.$route.params.translationid);
        this.fetchSong(this.$route.params.id, this.$route.params.translationid)
        //this.getchSong();

    },

    mounted() {
        console.log('Component mounted.');
    },

    beforeDestroy() {
        console.log('beforeDestroy');
        delete window.onYouTubeIframeAPIReady;
        clearInterval(this.LyricsController.song.timer);
        delete this.LyricsController;
    },

    methods: {
        toggle_show_tr1: function(event) {
            var show = event.target.checked;
            if (show === true) {
                document.getElementsByClassName('line_tr1')[0].style.visibility = 'visible';
            } else {
                document.getElementsByClassName('line_tr1')[0].style.visibility = 'hidden';
            }
        },

        toggle_show_tr2: function(event) {
            var show = event.target.checked;
            if (show === true) {
                document.getElementsByClassName('line_tr2')[0].style.visibility = 'visible';
            } else {
                document.getElementsByClassName('line_tr2')[0].style.visibility = 'hidden';
            }
        },

        fetchSong(id, translationid) {
            var self = this;
            var fetch_url = APP_URL + '/api/song/' + id + '/translation/' + translationid;
            console.log('Fetching song (' + fetch_url + ')')
            this.status = 'fetchSong();';

            this.$http.get(fetch_url).then((response) => {
                console.log(response);
                //self.LyricsController.song.current_id='rape';
                //console.log('what is current id:' + self.LyricsController.song.current_id);
                //this.LyricsController = new LyricsControl();
                Vue.set(self.LyricsController.song, 'current_id', -1);
                console.log('what is current id:' + self.LyricsController.song.current_id);

                this.LyricsController.song.title = response.body.title;
                this.LyricsController.song.title_tr1 = response.body.title_tr1;
                this.LyricsController.song.title_tr2 = response.body.title_tr2;

                this.LyricsController.song.lyrics = response.body.lyrics;
                this.LyricsController.song.lyrics_tr1 = response.body.lyrics_tr1;
                this.LyricsController.song.lyrics_tr2 = response.body.lyrics_tr2;

                this.LyricsController.song.artists = [];
                if (response.body.artists.length) {
                    console.log('has artists');
                    this.LyricsController.song.artists = response.body.artists;
                }

                this.LyricsController.song.times = response.body.times;
                this.LyricsController.song.videocode = response.body.videocode;
                this.LyricsController.song.has_lyrics_tr1 = (response.body.lyrics_tr1) ? true : false;
                this.LyricsController.song.has_lyrics_tr2 = (response.body.lyrics_tr2) ? true : false;

                //console.log('tr1' + this.LyricsController.song.has_lyrics_tr1 )
                //console.log('tr2' + this.LyricsController.song.has_lyrics_tr2 )


                this.song_loaded = 1;
                if (document.getElementById('www-widgetapi-script') === null) {
                    console.log('no iframe_api');
                    var tag = document.createElement('script');
                    tag.src = "https://www.youtube.com/iframe_api";
                    var firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                } else {
                    console.log('www-widgetapi-script: loaded(1)');
                }

                window.onYouTubeIframeAPIReady = function() {
                    console.log('onYouTubeIframeAPIReady');
                    self.LyricsController.player = new YT.Player('player', {
                        height: '390',
                        width: '640',
                        videoId: self.LyricsController.song.videocode,
                        events: {
                            'onReady': function(event) {
                                //Vue.set(self.LyricsController.song,'current_id', -3);
                                self.LyricsController.onPlayerReady(event);
                            },
                            'onStateChange': function(event) {
                                //Vue.set(self.LyricsController.song,'current_id', -3);
                                self.LyricsController.onPlayerStateChange(event);
                            },
                        }
                    });
                };


                if (document.getElementById('www-widgetapi-script') === null) {

                } else {
                    console.log('www-widgetapi-script: loaded (2)');
                    onYouTubeIframeAPIReady();
                }
                this.current_id = 0;
                //this.song = response.body;
                this.status = 'fetchedSong();';
            }, (response) => {
                //console.log('[-] error callback');
            });
        }
    }
}

</script>

