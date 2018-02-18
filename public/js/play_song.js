/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 58);
/******/ })
/************************************************************************/
/******/ ({

/***/ 58:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(59);


/***/ }),

/***/ 59:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });

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

/*
function Flaggle() {
    this.onPlayerReady = function(event) {
        //console.log('GOing to call LyricsController.onPlayerReady');
        //console.log(LyricsController);
        LyricsController.onPlayerReady(event);
    };
      this.onPlayerStateChange = function(event) {
        //console.log('GOing to call LyricsController.onPlayerStateChange');
        //console.log(LyricsController);
        LyricsController.onPlayerStateChange(event);
    };
}
  var flag = new Flaggle();
                              //'onReady': flag.onPlayerReady,
                            //'onStateChange': flag.onPlayerStateChange
*/

/*        
this.song.times = [4.11, 11.04, 19.14, 26.3, 34.32, 41.4, 49.43, 56.4, 64.07, 67.86, 71.37, 74.99, 83.43, 90.51, 98.38, 105.71, 113.21, 116.91, 120.68, 124.16, 158.55, 162.28, 166, 169.53, 181.15, 184.56];
this.song.cocks = 'started';
  this.song.lines = ['I thought it would be romantic - we sit alone in a cafe,',
    'When someone around us has been making chairs.',
    'I thought it would be romantic - see how the shooting star',
    'And wind on our faces Tshrr the hours',
    'I thought it would be romantic - sing loud with sparrows,',
    'Burl\'s songs and Piaf on the \"bourgeoisie and the mob.\"',
    'I thought it would be romantic - die like poets,',
    'Holy two minutes and again we will be sad',
    'The leaves on the boulevard float water,',
    'The city\'s skyline against the sky wash,',
    'Three in the morning Sala Joy French night,',
    'I was hoping that the love of my life is the real thing.',
    'I thought it would be romantic - take a kite together,',
    'To the sun, lying and wrapped in coats.',
    'I thought it would be romantic - love strong wits,',
    'But time had committed suicide as breaths between words.',
    'The leaves on the boulevard float water,',
    'The city\'s skyline against the sky wash,',
    'Three in the morning Sala Joy French night,',
    'I was hoping that the love of my life is the real thing.',
    'The leaves on the boulevard float water,',
    'The city\'s skyline against the sky wash,',
    'Three in the morning Sala Joy French night,',
    'I was hoping that the love of my life is the real thing.',
    'Three in the morning Sala Joy French night,',
    'I was hoping that the love of my life is the real thing.'
];
*/

function LyricsControl() {
    this.timer = null;
    this.player = null;
    //this.cocks = 0;
    this.status = '';
    this.song = {};
    this.song.current_id = -1;
    this.song.has_lyrics_tr1 = false;
    this.song.has_lyrics_tr2 = false;

    //this.song.current_id = 0;
    this.song.timer = null;

    console.log('LyricsControl created()');

    this.start = function () {
        console.log('[+] LyricsControl: STARTING LyricsControl');
        console.log(this);
        console.log('[+] LyricsControl: STARTING LyricsControl');
    };

    this.onPlayerReady = function (event) {
        console.log('[+] LyricsControl: onPlayerReady', event);
    };

    this.onPlayerStateChange = function (event) {
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

    this.display_line = function (id) {
        //console.log('[+] LyricsControl: display_line ' + timing.lines[id]);
        console.log('[+] LyricsControl: display_line ' + id + ': ' + this.song.lyrics[id]);
        //if(this.song.translations[1]) console.log('[+] LyricsControl: display_line ' + this.song.translations[1].lyrics_tr1[id]);
        //if(this.song.translations[2]) console.log('[+] LyricsControl: display_line ' + this.song.translations[2].lyrics_tr2[id]);
    };

    this.end_timer = function () {
        console.log('[+] LyricsControl: stopping timer');
        //clearInterval(timing.timer);
        clearInterval(this.song.timer);
    };

    this.begin_timer = function (timer) {
        console.log('[+] LyricsControl: begin_timer()');
        var self = this;
        //var next_id = timing.current_id + 1;
        var next_id = this.song.current_id + 1;

        //if(timing.current_id == -1) {
        if (this.song.current_id == -1) {
            //console.log('[-] no line yet, just start timer');
        } else {}
            //console.log('[+] show current line = ' + timing.lines[timing.current_id]);
            //this.display_line(timing.current_id);
            //console.log( '[+] show current line (' + timing.current_id + ')' );


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
        this.song.timer = setTimeout(function () {
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

    this.get_time_id_from_current_time = function () {
        //console.log('[+] LyricsControl: get_time_id_from_current_time');
        if (this.player.getCurrentTime() > this.song.times[this.song.times.length - 1]) {
            return this.song.times.length - 1;
        }

        for (var x = 0; x < this.song.times.length; x++) {
            if (this.player.getCurrentTime() < this.song.times[x]) {
                if (x == 0) {
                    break;
                }

                return x - 1;
            }
        }

        return -1;
    };
}

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            //LyricsController: { song: { current_id: -1 }, status: '', cocks: 0 },
            LyricsController: { song: { current_id: -1 }, status: '' },
            status: '',
            song_loaded: 0
            //cocksTimer: null,
        };
    },
    created: function created() {
        console.log('Component created.');
        //alert(this.$route.params.translationid);
        this.fetchSong(this.$route.params.id, this.$route.params.translationid);
        //this.getchSong();
    },
    mounted: function mounted() {
        console.log('Component mounted.');
    },
    beforeDestroy: function beforeDestroy() {
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

        toggle_show_tr1: function toggle_show_tr1(event) {
            var show = event.target.checked;
            if (show === true) {
                document.getElementsByClassName('line_tr1')[0].style.visibility = 'visible';
            } else {
                document.getElementsByClassName('line_tr1')[0].style.visibility = 'hidden';
            }
        },

        toggle_show_tr2: function toggle_show_tr2(event) {
            var show = event.target.checked;
            if (show === true) {
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

        fetchSong: function fetchSong(id, translationid) {
            var _this = this;

            var self = this;
            console.log('Fetching song');
            this.status = 'fetchSong();';

            this.$http.get('/api/song/' + id + '/translation/' + translationid).then(function (response) {
                //console.log('DO I NEED TO CREATE LYRICS COTNOOER?',this.LyricsController);

                console.log(response);
                _this.LyricsController = new LyricsControl();
                Vue.set(self.LyricsController.song, 'current_id', -1);

                //this.LyricsController.cocks = 'cocks loading';
                //Vue.set(this.LyricsController,'cocks', 'cocks loading333');
                //this.LyricsController.song.videocode = 'NQP1wut2kWc';

                _this.LyricsController.song.title = response.body.title;
                _this.LyricsController.song.title_tr1 = response.body.title_tr1;
                _this.LyricsController.song.title_tr2 = response.body.title_tr2;

                _this.LyricsController.song.lyrics = response.body.lyrics;
                _this.LyricsController.song.lyrics_tr1 = response.body.lyrics_tr1;
                _this.LyricsController.song.lyrics_tr2 = response.body.lyrics_tr2;

                _this.LyricsController.song.times = response.body.times;
                _this.LyricsController.song.videocode = response.body.videocode;
                _this.LyricsController.song.has_lyrics_tr1 = response.body.lyrics_tr1 ? true : false;
                _this.LyricsController.song.has_lyrics_tr2 = response.body.lyrics_tr2 ? true : false;

                console.log('tr1' + _this.LyricsController.song.has_lyrics_tr1);
                console.log('tr2' + _this.LyricsController.song.has_lyrics_tr2);

                _this.song_loaded = 1;

                if (document.getElementById('www-widgetapi-script') === null) {
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
                            'onReady': function onReady(event) {
                                //Vue.set(self.LyricsController.song,'current_id', -3);
                                self.LyricsController.onPlayerReady(event);
                            },
                            'onStateChange': function onStateChange(event) {
                                //Vue.set(self.LyricsController.song,'current_id', -3);
                                self.LyricsController.onPlayerStateChange(event);
                            }
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

                if (document.getElementById('www-widgetapi-script') === null) {} else {
                    console.log('www-widgetapi-script: loaded (2)');
                    onYouTubeIframeAPIReady();
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

                _this.current_id = 0;

                //this.song = response.body;
                _this.status = 'fetchedSong();';
            }, function (response) {
                //console.log('[-] error callback');
            });
        }
    }
});

/***/ })

/******/ });