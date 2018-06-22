    function DyricsControl() {
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

        console.log('DyricsControl created()');

        this.start = function() {
            console.log('[+] DyricsControl: STARTING DyricsControl');
            console.log(this);
            console.log('[+] DyricsControl: STARTING DyricsControl');
        };

        this.onPlayerReady = function(event) {
            console.log('[+] DyricsControl: onPlayerReady', event);
        };

        this.onPlayerStateChange = function(event) {
            console.log('[+] DyricsControl: onPlayerStateChange', event);
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
            //console.log('[+] DyricsControl: display_line ' + timing.lines[id]);
            console.log('[+] DyricsControl: display_line ' + id + ': ' + this.song.lyrics[id]);
            //if(this.song.translations[1]) console.log('[+] DyricsControl: display_line ' + this.song.translations[1].lyrics_tr1[id]);
            //if(this.song.translations[2]) console.log('[+] DyricsControl: display_line ' + this.song.translations[2].lyrics_tr2[id]);
        };

        this.end_timer = function() {
            console.log('[+] DyricsControl: stopping timer');
            //clearInterval(timing.timer);
            clearInterval(this.song.timer);
        };

        this.begin_timer = function(timer) {
            console.log('[+] DyricsControl: begin_timer()');
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
            //console.log('[+] DyricsControl: get_time_id_from_current_time');
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