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
            <div class="yt_container">
                <div class="embed-responsive embed-responsive-16by9">
                  <youtube-component></youtube-component>
                </div>
            </div>

            <hr>

            Youtube link: <input type="text" id="txt_song_youtube name"/>
        </div>
    </div>
    <br>
  </div>
</template>


<script>
    window.onload=function() {
        console.log('[+] SongEditor loaded');
    }
</script>