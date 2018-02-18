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


































    function LyricsControl() {
        this.timer = null;
        this.player = null;
        //this.cocks = 0;
        this.status = '';
        this.song = {};
        this.song.current_id = -1;
        this.song.has_lyrics_tr1 = false;
        this.song.has_lyrics_tr2 = false;
        this.song.timer = null;
        this.song.title = null;
        this.song.title_tr1 = null;
        this.song.title_tr2 = null;
        this.song.lyrics = [];
        this.song.lyrics_tr1 = [];
        this.song.lyrics_tr2 = [];
        this.song.artists = [];
        this.song.times = [];
        this.song.videocode = null;

















        console.log('LyricsControl created()');

        this.start = function() {
            console.log('[+] LyricsControl: STARTING LyricsControl');
            console.log(this);
            console.log('[+] LyricsControl: STARTING LyricsControl');
        };


        this.onPlayerReady = function(event) {
            console.log('[+] LyricsControl: onPlayerReady', event);
        };

        this.onPlayerStateChange = function(event) {
            console.log('[+] LyricsControl: onPlayerStateChange', event);
            if (event.data == YT.PlayerState.PLAYING) {
                //console.log('[+] playing');
                //timing.current_id = this.get_time_id_from_current_time();
                this.song.current_id = this.get_time_id_from_current_time();
                //this.cocks = this.song.current_id;
                //this.song.cocks = this.song.current_id;
                this.begin_timer();
            }

            if (event.data == YT.PlayerState.ENDED || event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.BUFFERING) {
                this.end_timer();
            }
        };

        this.display_line = function(id) {
            //console.log('[+] LyricsControl: display_line ' + timing.lines[id]);
            console.log('[+] LyricsControl: display_line ' + id + ': ' + this.song.lyrics[id]);
            //if(this.song.translations[1]) console.log('[+] LyricsControl: display_line ' + this.song.translations[1].lyrics_tr1[id]);
            //if(this.song.translations[2]) console.log('[+] LyricsControl: display_line ' + this.song.translations[2].lyrics_tr2[id]);
        };

        this.end_timer = function() {
            console.log('[+] LyricsControl: stopping timer');
            //clearInterval(timing.timer);
            clearInterval(this.song.timer);
        };

        this.begin_timer = function(timer) {
            console.log('[+] LyricsControl: begin_timer()');
            var self = this;
            //var next_id = timing.current_id + 1;
            var next_id = this.song.current_id + 1;

            //if(timing.current_id == -1) {
            if (this.song.current_id == -1) {
                //console.log('[-] no line yet, just start timer');
            } else {
                //console.log('[+] show current line = ' + timing.lines[timing.current_id]);
                //this.display_line(timing.current_id);
                //console.log( '[+] show current line (' + timing.current_id + ')' );
            }

            //if(next_id == timing.times.length) {
            if (next_id == this.song.times.length) {
                //console.log('[-] already reached end should not start new timer');
                this.end_timer();
                return;
            }

            //console.log('[+] next line = ' + timing.lines[next_id] + ' (in ' + diff + ' seconds)');

            //var diff = Number(timing.times[next_id] - this.player.getCurrentTime());
            var diff = Number(this.song.times[next_id] - this.player.getCurrentTime());
            diff = diff * 1000;

            //timing.timer = setTimeout(
            this.song.timer = setTimeout(
                function() {
                    //console.log('[+] event at (' + timing.times[timing.current_id] + '|' + self.player.getCurrentTime() + ') seconds');
                    //console.log( '[+] show next line (' + timing.current_id + ')' );
                    //console.log('[+] show next line (' + self.song.current_id + ')');
                    self.display_line(next_id);
                    //if(timing.current_id < timing.times.length) {
                    //timing.current_id = timing.current_id + 1;
                    self.song.current_id = self.song.current_id + 1;
                    //self.song.cocks = self.song.current_id;
                    //self.cocks = self.song.current_id;
                    self.begin_timer();
                    //}
                }, diff);

            /*


                  if(next_id == timing.times.length) {
                    console.log('already reached end should not start new timer');
                    this.end_timer();
                    return;
                  }

                  console.log('Starting timer for ' + next_id + ', (' + timing.times[next_id] + '|' + timing.lines[next_id] + ') = ' + diff);


            */

            //console.log('Current ID: ' + timing.current_id + '/' + timing.times.length);
            //console.log('Next ID: ' + next_id);
            //console.log('Need to show: ' + timing.lines[next_id]);
        };

        this.get_time_id_from_current_time = function() {
            //console.log('[+] LyricsControl: get_time_id_from_current_time');
            if (this.player.getCurrentTime() > this.song.times[this.song.times.length - 1]) {
                return this.song.times.length - 1;
            }

            for (var x = 0; x < this.song.times.length; x++) {
                if (this.player.getCurrentTime() < this.song.times[x]) {
                    if (x == 0) {
                        break;
                    }

                    return (x - 1);
                }
            }

            return -1;
        };
    }

    export default {
        data() {
            return {
              //LyricsController: { song: { current_id: -1 }, status: '', cocks: 0 },
              LyricsController: { 
                song: { 
                    current_id: -1, 
                    timer: null,
                    title: null,
                    title_tr1: null,
                    title_tr2: null,
                    lyrics: [],
                    lyrics_tr1: [],
                    lyrics_tr2: [],
                    has_lyrics_tr1: false,
                    has_lyrics_tr2: false,
                    artists: [],
                    times: [],
                    videocode: null,
                }, 
                status: '' 
            },
              status: '',
              song_loaded: 0,
              //cocksTimer: null,
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
            //delete YT;
            //delete YTConfig;
           


            //YT = null;
            //YTConfig = null;
            //window.onYouTubeIframeAPIReady = null;



            
            //delete YT;
            //delete YTConfig;
            //delete window.onYTReady();
            //delete window.onYouTubeIframeAPIReady;
            //delete this.LyricsController;
           // this.LyricsController = [];

            //this.LyricsController = { song:[], cocks: 0 };



//  


/*
var scripts = document.getElementsByTagName('script');
var iframe_api = document.getElementById('www-widgetapi-script');
iframe_api.parentNode.removeChild(iframe_api);
for(var x = 0; x < scripts.length; x++){
  if(scripts[x].src == 'https://www.youtube.com/iframe_api'){
    scripts[x].parentNode.removeChild(scripts[x])
  }
}
*/




        },

        methods: {

        toggle_show_tr1: function (event) {
            var show = event.target.checked;
            if(show === true) {
                document.getElementsByClassName('line_tr1')[0].style.visibility = 'visible';
            } else {
                document.getElementsByClassName('line_tr1')[0].style.visibility = 'hidden';
            }
        },

        toggle_show_tr2: function (event) {
            var show = event.target.checked;
            if(show === true) {
                document.getElementsByClassName('line_tr2')[0].style.visibility = 'visible';
            } else {
                document.getElementsByClassName('line_tr2')[0].style.visibility = 'hidden';
            }
        },

/*
function toggle_show_tr1(show) {
    if(show === true) {
        document.getElementsByClassName('line_tr1')[0].style.visibility = 'visible';
    } else {
        document.getElementsByClassName('line_tr1')[0].style.visibility = 'hidden';
    }
}

*/

            fetchSong(id, translationid) {
            var self = this;
               console.log('Fetching song')
               this.status = 'fetchSong();';

                this.$http.get(APP_URL + '/api/song/' + id + '/translation/' + translationid).then((response) => {
                        //console.log('DO I NEED TO CREATE LYRICS COTNOOER?',this.LyricsController);
                        
                        console.log(response);
                        this.LyricsController = new LyricsControl();
                        Vue.set(self.LyricsController.song,'current_id', -1);
                        

                        //this.LyricsController.cocks = 'cocks loading';
                        //Vue.set(this.LyricsController,'cocks', 'cocks loading333');
                        //this.LyricsController.song.videocode = 'NQP1wut2kWc';
                        
                        this.LyricsController.song.title = response.body.title;
                        this.LyricsController.song.title_tr1 = response.body.title_tr1;
                        this.LyricsController.song.title_tr2 = response.body.title_tr2;
                        
                        this.LyricsController.song.lyrics = response.body.lyrics;
                        this.LyricsController.song.lyrics_tr1 = response.body.lyrics_tr1;
                        this.LyricsController.song.lyrics_tr2 = response.body.lyrics_tr2;
                        
                        this.LyricsController.song.artists = [];
                        if(response.body.artists.length) {
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












                    if(document.getElementById('www-widgetapi-script') === null){
                        console.log('no iframe_api');
                      var tag = document.createElement('script');
                      tag.src = "https://www.youtube.com/iframe_api";
                      var firstScriptTag = document.getElementsByTagName('script')[0];
                      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                    } else {
                      console.log('www-widgetapi-script: loaded(1)');
                    }

                    window.onYouTubeIframeAPIReady = function () {
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
                            /*'onReady': function(event) {
                              console.log('onReady');
                              //self.LyricsController.status = self.LyricsController.player.getCurrentTime();
                              //Vue.set(self.LyricsController,'status',self.LyricsController.player.getCurrentTime());
                            },
                            'onStateChange': function(event) {
                              console.log('onStateChange');
                              //self.LyricsController.status = self.LyricsController.player.getCurrentTime();
                              //Vue.set(self.LyricsController,'status',self.LyricsController.player.getCurrentTime());
                            },*/
                          }
                        });
                    };


                    if(document.getElementById('www-widgetapi-script') === null){

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










                  //cream
                  //Vue.set(this.LyricsController.song,'current_id',0);

/*
                    if (typeof window.onYouTubeIframeAPIReady !== "undefined") {
                        //console.log('[-] FUNCTION DO EXIST');
                        onYouTubeIframeAPIReady();
                    } else {
                       // console.log('[-] FUNCTION DONT EXIST YET');
                        //var tag = document.createElement('script');
                        //tag.src = "https://www.youtube.com/iframe_api";
                        //var firstScriptTag = document.getElementsByTagName('script')[0];
                        //firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                        //YTController.create_player();
                      


                      var tag = document.createElement('script');
                      tag.src = "https://www.youtube.com/iframe_api";
                      var firstScriptTag = document.getElementsByTagName('script')[0];
                      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                      
                      window.onYouTubeIframeAPIReady = function() {
                          //problem is this isnt being called 2nd time!
                          //console.log('[1] inside onYouTubeIframeAPIReady, player: ' + x.player);
                          self.LyricsController.player = new YT.Player('player', {
                              height: '390',
                              width: '640',
                              videoId: self.LyricsController.song.videocode,
                              events: {
                                  'onReady': function(event) {
                                      self.LyricsController.onPlayerReady(event);
                                  },
                                  'onStateChange': function(event) {
                                      self.LyricsController.onPlayerStateChange(event);
                                  },
                              }
                          });
                      };
                    }
*/


/*
                      window.onYouTubeIframeAPIReady = function() {
                        console.log('window.onYouTubeIframeAPIReady');
                          self.LyricsController.player = new YT.Player('player', {
                              height: '390',
                              width: '640',
                              videoId: self.LyricsController.song.videocode,
                              events: {
                                  'onReady': function(event) {
                                      console.log('[+] onReady, ' + self.status);
                                      //self.LyricsController.onPlayerReady(event);

                                  },
                                  'onStateChange': function(event) {
                                      console.log('[+] onStateChange');
                                      //self.LyricsController.onPlayerStateChange(event);
                                  },
                              }
                          });
                      }

                    if (typeof window.onYouTubeIframeAPIReady !== "undefined") {
                        console.log('typeof window.onYouTubeIframeAPIReady !== "undefined"');
                        //onYouTubeIframeAPIReady();
                    } else {
                      var tag = document.createElement('script');
                      tag.src = "https://www.youtube.com/iframe_api";
                      var firstScriptTag = document.getElementsByTagName('script')[0];
                      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                    }
*/


/*
                          //problem is this isnt being called 2nd time!
                          //console.log('[1] inside onYouTubeIframeAPIReady, player: ' + x.player);
                          self.LyricsController.player = new YT.Player('player', {
                              height: '390',
                              width: '640',
                              videoId: self.LyricsController.song.videocode,
                              events: {
                                  'onReady': function(event) {
                                      self.LyricsController.onPlayerReady(event);
                                  },
                                  'onStateChange': function(event) {
                                      self.LyricsController.onPlayerStateChange(event);
                                  },
                              }
                          });
                      };
*/


/*
function toggle_show_tr1(show) {
    if(show === true) {
        document.getElementsByClassName('line_tr1')[0].style.visibility = 'visible';
    } else {
        document.getElementsByClassName('line_tr1')[0].style.visibility = 'hidden';
    }   
}


document.getElementById('checkbox1').addEventListener("change", function(e){
    toggle_show_tr1(e.target.checked);
});
document.getElementById('checkbox2').addEventListener("change", function(e){
    toggle_show_tr2(e.target.checked);
});



*/



    //alert('SongView.vue');
        /*
        <div id="lyric_1">1 {{ LyricsController.song.lines[LyricsController.song.current_id] }}</div>
        <div id="lyric_2">2 {{ LyricsController.song.current_id }}</div>
        <div id="lyric_3">3 {{ LyricsController.cocks }}</div>

        0: line 1
        1: line 2
        2: line 3
        3: line 4
        4: line 5

        current_id = -1
          set timer for 0, show 'line 1'
        current_id = 0
          set timer for 0, show 'line 1'
          actual: set timer for 1, show 'line 2'
        */

</script>

