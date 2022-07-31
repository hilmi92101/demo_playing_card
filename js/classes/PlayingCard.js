class PlayingCard {
    

    play(){
        this.playersEl.innerHTML = '';
        this.totalPlayersEl.innerHTML = '';
        this.isLoadingEl.classList.toggle('d-none');

        fetch("api/playing-card.php", {
            method: "POST",
            body: JSON.stringify({
                numberOfPlayer: this.numberOfPlayerEl.value,
            }),
            headers: {
                "Content-type": "application/json"
            }
        })
        .then(res => res.json())
        .then((data) => {
            //console.log(data);
            this.numberOfPlayerEl.value = '';
            this.playersTotal = data.players;
            this.actualPlayersTotal = data.actual_players;
            this.distributedCards = data.distributed_cards;

            this.proceedDistributeCard();
        })
        .catch((error) => {
            console.error('Error:', error);
        });

    }

    proceedDistributeCard(){

        // SHOW TOTAL PLAYERS HTML
        this.totalPlayersEl.innerHTML+= `
            <h5>Total Players: ${this.actualPlayersTotal}</h5>
        `;
        
        for(var i = 0; i < this.playersTotal; i++) {

            // CREATE CARDS HTML
            var cards = this.distributedCards[i]; 
            var cardsEl = `<div class="player__cards">`;
            for(var j = 0; j < cards.length; j++){
                cardsEl += `
                    <button type="button" class="btn btn-dark mr-3 mb-3">${cards[j]}</button>
                `;
            }
            cardsEl += `</div>`;

            // INSERT CARDS HTML IN PLAYER HTML
            this.playersEl.innerHTML+= `
                <div class="player__hands mb-3">
                    <h2>Player ${i + 1}</h2>
                    ${cardsEl}
                </div>
            `;
        }

        // IF EXCEED 52 PLAYERS
        if(this.actualPlayersTotal > 52){
            var howManyLoopNeeded = this.actualPlayersTotal -  52;

            for(var i = 0; i < howManyLoopNeeded; i++) {

                this.playersEl.innerHTML+= `
                    <div class="player__hand">
                        <h2>Player ${i + 52 + 1}</h2>
                        <div class="player__cards">
                            <span>Not enough card.</span>
                        </div>
                    </div>
                `;
            }
        }

        this.isLoadingEl.classList.toggle('d-none');
    }
}


