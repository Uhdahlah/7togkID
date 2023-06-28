@extends('app.app')

@section('content')
<div>
    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
            <div class="container" ><a class="navbar-brand" href="#">7TogkSMP</a>
            <small class="text-center" style="color: rgb(243,246,248);">
<?php $status = json_decode(file_get_contents('https://api.mcsrvstat.us/bedrock/2/play.7togkmc.id')); if($status->online == true){ echo "[🟢] : 🧞‍♂️ ".$status->players->online." Players"; }else{ echo "dadad";} ?>
</small>
<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    
                    <form class="form-inline mr-auto" target="_self"> 
                    </form>
                    <span class="navbar-text">
                        <a class="login" href="#"><strong>News</strong></a>
                        <a class="login" href="{{route('redeem')}}"><strong>Redeem</strong></a>
                        <a class="login" href="https://mcpedl.org/minecraft-pe-1-20-0s-apk/"><strong>Download</strong></a>
                    </span>
                    <span class="navbar-text">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" ><strong>Comunity</strong></a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item text-white" role="presentation" href="https://chat.whatsapp.com/IWfQl4h0Wc8DeiA3FBkaaw">WhatsApp</a><a class="dropdown-item text-white" role="presentation" href="https://discord.com/invite/U8qAZ82uag">Discord</a><a class="dropdown-item text-white" role="presentation" href="https://www.youtube.com/@angga7togk_/community">Youtube</a></div>
                        </li>
                        
                    </ul>
                    </span><a style="opacity: 0;">--</a><a class="btn btn-success rounded-pill" role="button" href="https://minecraftpocket-servers.com/server/111760/vote">Vote Servers</a></div>
            </div>
        </nav>
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">7TogkSMP Nightmare 3</h1>
                    <h5 class="text-center" style="color: rgb(243,246,248);">
                    Server Survival Multiplayer, Bermain dengan nenek, kakek, dan temen kalian? atau pacarkalian pun, Bisa!!! 7TogkSMP Server Yang Mempunyai Banyak Fitur Dan Sangat Menarik, Silakan Tekan Play Server Untuk Memasuki Server 7TogkSMP
                    
</h5>
</br>

<h4 class="text-center card-title" style="color: rgb(243,246,248);"><p class="card-text" style="color: rgb(247,248,248);"></p><a href="minecraft://?addExternalServer=7TogkSMP%20Nightmare|play.7togkmc.id:19132" class="btn btn-outline-dark text-uppercase text-center" role="button" target="_blank" style="color: white"><h5>PLAY SERVER</h5></a></h4>
                            </div>
                    </div>
                    <!--Comment-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
