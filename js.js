let circle = '<svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"\n' +
    '                     fill="currentColor" class="bi bi-circle" viewBox="0 0 18 16">\n' +
    '                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>\n' +
    '                </svg>';
let cross = '<svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 17 16">\n' +
    '                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>\n' +
    '                </svg>';


let i = 0;

function buttonId(id, value) {
    if (value === '0'){
        i = i + 1;

        document.getElementById(id).innerHTML = i % 2 === 0 ? circle : cross;
        document.getElementById(id).value = i % 2 === 0 ? '2' : '1';
    }
    let winCombinant = [
        [1,2,3],
        [4,5,6],
        [7,8,9],
        [1,4,7],
        [2,5,8],
        [3,6,9],
        [1,5,9],
        [3,5,7]
    ];

    for (const idElement of winCombinant) {
        let win = '';
        let winCross = '111';
        let winCircle = '222';

        for (const idButton of idElement) {
            win += document.getElementById(idButton).value;
            if (win === winCross){

                document.getElementById('exampleModal').hidden = false;
                //alert('Win Cross');
                //clearGame();
            }
            if (win === winCircle){

                //alert('Win Circle')
                //clearGame();
            }
        }
    }
}

function clearGame() {
    for (let id=1; id<=9; id++){
        document.getElementById(id).innerHTML = '';
        document.getElementById(id).value = 0;
        i = 0;
    }
}
