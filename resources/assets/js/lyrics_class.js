var LyricsController = {
	timer: null,
	player: null,
	status: '',
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

	start: function() {
        console.log('[+] LyricsControl: STARTING LyricsControl');
    },

    onPlayerReady: function(event) {
        console.log('[+] LyricsControl: onPlayerReady', event);
    },

    onPlayerStateChange: function(event) {
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
    },

    display_line: function(id) {
        //console.log('[+] LyricsControl: display_line ' + timing.lines[id]);
        console.log('[+] LyricsControl: display_line ' + id + ': ' + this.song.lyrics[id]);
        //if(this.song.translations[1]) console.log('[+] LyricsControl: display_line ' + this.song.translations[1].lyrics_tr1[id]);
        //if(this.song.translations[2]) console.log('[+] LyricsControl: display_line ' + this.song.translations[2].lyrics_tr2[id]);
    },

    end_timer: function() {
        console.log('[+] LyricsControl: stopping timer');
        //clearInterval(timing.timer);
        clearInterval(this.song.timer);
    },

    begin_timer: function(timer) {
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

    },

    get_time_id_from_current_time: function() {
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
    },
}

export { LyricsController };