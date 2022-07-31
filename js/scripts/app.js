// OBJECTS
let newPlayingCard = new PlayingCard();

// ELEMENTS
const playButtonEl = document.querySelector('.play__card');
const numberOfPlayerEl = document.querySelector('.number__of__player');
const numberOfPlayerErrorEl = document.querySelector('.number__of__player__error');
const playersEl = document.querySelector('.players__wrapper');
const totalPlayersEl = document.querySelector('.total__players');
const isLoadingEl = document.querySelector('.is__loading');

// CLICK EVENT
document.body.addEventListener('click', function (evt) {

    if(evt.target.classList.contains('play__card')) {

        numberOfPlayerEl.classList.remove("is-invalid");
        numberOfPlayerErrorEl.innerHTML = '';
        playersEl.innerHTML = '';
        totalPlayersEl.innerHTML = '';

        if(numberOfPlayerEl.value > 0){
            newPlayingCard.playButtonEl = playButtonEl;
            newPlayingCard.numberOfPlayerEl = numberOfPlayerEl;
            newPlayingCard.playersEl = playersEl;
            newPlayingCard.totalPlayersEl = totalPlayersEl;
            newPlayingCard.isLoadingEl = isLoadingEl;
            
            newPlayingCard.play();
        } else {
            numberOfPlayerEl.classList.add("is-invalid");
            numberOfPlayerErrorEl.innerHTML += 'Input value does not exist or value is invalid.';
        }
    }

}, false);