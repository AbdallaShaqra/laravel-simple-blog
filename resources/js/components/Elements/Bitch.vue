<template>
<div>
    <div class="hair">
    <div class="character">
        <div class="eyesblock">
            <div class="eyes">
                <div class="bullets">
                </div>
            </div>
            <div class="eyes">
                <div class="bullets">
                </div>
            </div>
        </div>
        <div class="mouthblock">
            <div class="mouth">
            </div>
        </div>
    </div>
    <div class="bodyshape">
        <div class="armsblock">  
            <div style="float:right;" class="arms">
            </div>
            <div class="arms">
            </div>
        </div>
        <div class="boobsblock">  
            <div class="boobs">
                <div class="boobsbullets">
                </div>
            </div>
            <div class="boobs">
                <div class="boobsbullets">
                </div>
            </div>
        </div>
        
        <div class="legsblock">
            <div class="legs">
            </div>
            <div class="legs">
            </div>
        </div>
    </div>
    </div>
</div>
</template>
<style scoped>
    .character{
        background-color: salmon;
        height: 2rem;
        width: 2rem;
        border-radius: 25%;
        position: relative;
        animation-name: example;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }
    .eyesblock{
        display: flex;
    }
    .eyes{
        height: .5rem;
        width: .5rem;
        background-color: white;
        margin: .25rem;
        border-radius: 30%;
    }
    .bullets{
        height: .25rem;
        width: .25rem;
        border-radius: 100%;
        background-color: black;
        margin: .15rem;
    }
    .mouthblock{
        display: flex;
        justify-content: center;
    }
    .mouth{
        background-color: red;
        height: .3rem;
        width: 50%;
        margin: .2rem;
        border-radius:30%;
        
    }
    .hair{
        background-color: yellow;
        width:3rem;
        height: 3rem;
        padding: .5rem;
        border-radius: 20%;
        position: relative;
        animation-name: example;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        z-index: 999;
    }.bodyshape{
        position: relative;;
         background-color: salmon;
         width: 2rem;
         height: 2rem;
         border-radius: 20%;
    }
    .legsblock{
        display: flex;
    }
    .legs{
        background-color: salmon;
        width: 1rem;
        height: 7rem;
        margin:2;
        border-radius: 20%;
    }
    .armsblock{
        display: block;
    }
    .boobsblock{
        position: absolute;
        display: flex;
        top: .3rem;
        left: -1rem;
        animation-name: example;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        
    }
    .boobs{
        background-color: #ff9386;
        width: 2rem;
        height: 2.2rem;
        border-radius: 90%;
        
    }
    .arms{
        background-color: salmon;
        height: .7rem;
        border-radius: 20%;
        width: 4rem;
    }
    .boobsbullets{
        background-color: #e65e5e;
        width: .3rem;
        height: .3rem;
        margin: 1rem;
        border-radius: 100%;
        border-width: 2;
        border-color:crimson
    }
    @keyframes example {
    from {top: .3rem;}
    to {top: .5rem;}
    }
</style>