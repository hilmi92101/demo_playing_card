<?php 

header('Content-Type: application/json');

if( isset($_POST) ){ 

    $_POST = json_decode(file_get_contents('php://input', true));
    $players = intval($_POST->numberOfPlayer);
    $actual_players = intval($_POST->numberOfPlayer);

    $cards = [
        "S-A", "S-2", "S-3", "S-4", "S-5", "S-6", "S-7", "S-8", "S-9", "S-X", "S-J", "S-Q", "S-K",
        "H-A", "H-2", "H-3", "H-4", "H-5", "H-6", "H-7", "H-8", "H-9", "H-X", "H-J", "H-Q", "H-K",
        "D-A", "D-2", "D-3", "D-4", "D-5", "D-6", "D-7", "D-8", "D-9", "D-X", "D-J", "D-Q", "D-K",
        "C-A", "C-2", "C-3", "C-4", "C-5", "C-6", "C-7", "C-8", "C-9", "C-X", "C-J", "C-Q", "C-K",
    ];
    shuffle($cards);

    if($players > 52){
        $players = 52;
    }

    $total_each_player_card         = floor(count($cards)/$players);
    $distributed_cards              = array_chunk($cards, $total_each_player_card);
    $total_extra_cards              = 52 - ($total_each_player_card * $players);
    $extra_cards                    = array_slice($cards, (-1 * abs($total_extra_cards)));
    
    if($total_extra_cards > 0){
        for ($x = 0; $x < $total_extra_cards; $x++) {
            array_push($distributed_cards[$x], $extra_cards[$x]);
        }
    }

    echo json_encode([  
        'status' => true,  
        '_POST' => $_POST,  
        'cards' => $cards,  
        'players' => $players,  
        'actual_players' => $actual_players,  
        'total_each_player_card' => $total_each_player_card,  
        'distributed_cards' => $distributed_cards,  
        'total_extra_cards' => $total_extra_cards,  
        'extra_cards' => $extra_cards,  
    ]);

}




?>