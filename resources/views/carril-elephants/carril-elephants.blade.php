<style>
    
    #php-elephant1 {
        position: absolute;
        width: 90px;
        transition: 500ms all;
        filter: saturate(300%);
        animation-name: elephant1;
        animation-duration: 65s;
        animation-iteration-count: infinite;
    }

    #php-elephant2 {
        position: absolute;
        width: 90px;
        margin-left: 200px;
        transition: 500ms all;
        filter: saturate(100%);
        animation-name: elephant2;
        animation-duration: 45s;
        animation-iteration-count: infinite;
        -webkit-transform: rotateY(180deg);
        -webkit-transform-style: preserve-3d;
        transform: rotateY(180deg);
        transform-style: preserve-3d;
    }

    #php-elephant3 {
        position: absolute;
        width: 90px;
        margin-left: 200px;
        transition: 500ms all;
        filter: saturate(100%);
        animation-name: elephant3;
        animation-duration: 25s;
        animation-iteration-count: infinite;
    }

    #php-elephant4 {
        position: absolute;
        width: 90px;
        margin-left: 200px;
        transition: 500ms all;
        filter: saturate(100%);
        animation-name: elephant4;
        animation-duration: 32s;
        animation-iteration-count: infinite;
        -webkit-transform: rotateY(180deg);
        -webkit-transform-style: preserve-3d;
        transform: rotateY(180deg);
        transform-style: preserve-3d;
    }

    #php-elephant5 {
        position: absolute;
        width: 90px;
        margin-left: 200px;
        transition: 500ms all;
        filter: saturate(100%);
        animation-name: elephant5;
        animation-duration: 25s;
        animation-iteration-count: infinite;
    }

    #php-elephant6 {
        position: absolute;
        width: 90px;
        margin-left: 200px;
        transition: 500ms all;
        filter: saturate(100%);
        animation-name: elephant6;
        animation-duration: 64s;
        animation-iteration-count: infinite;
    }

    #php-elephant7 {
        position: absolute;
        width: 90px;
        margin-left: 1200px;
        transition: 500ms all;
        filter: saturate(100%);
        animation-name: elephant7;
        animation-duration: 54s;
        animation-iteration-count: infinite;
    }

    #php-elephant8 {
        position: absolute;
        width: 90px;
        margin-left: 700px;
        transition: 500ms all;
        filter: saturate(100%);
        animation-name: elephant8;
        animation-duration: 38s;
        animation-iteration-count: infinite;
    }

    @keyframes elephant1 {
        0% {
            right: 0;
        }

        100% {
            right: 1500px;
        }
    }
    @keyframes elephant2 {
        0% {
            left: -250px;
        }

        100% {
            left: 1000px;
            width: 0px;
        }
    }
    @keyframes elephant3 {
        0% {
            right: 0;
        }

        100% {
            right: 1500px;
            width: 0px;
        }
    }
    @keyframes elephant4 {
        0% {
            left: 0;
        }

        100% {
            left: 1100px;
            width: 0px;
        }
    }
    @keyframes elephant5 {
        0% {
            right: 0;
        }

        100% {
            right: 1100px;
            width: 0px;
        }
    }
    @keyframes elephant6 {
        0% {
            left: 0;
        }
        100% {
           left: 1000;
            width: 0px;
        }
    }
    @keyframes elephant7 {
        100% {
            transform: rotate(360deg);
            filter: saturate(1500%);
            width: 0px;
        }
    }
    @keyframes elephant8 {
        100% {
            transform: rotate(360deg);
            filter: saturate(1500%);
            width: 0px;
        }
    }
</style>

<div class="elephant-carril">
    <span id="contador">0</span>
    <?php for($i=1;$i<9;$i++): ?>
        <img id="php-elephant<?php echo $i ?>" class="php-elephants" src="../.././img/php-elephant.png">
    <?php endfor; ?>
</div>