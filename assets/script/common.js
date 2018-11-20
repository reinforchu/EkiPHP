var clickCount = 0;

function onTekisen() {
    ++clickCount;
    switch(clickCount) {
        case 1:
            document.getElementById("tekisen").innerText = "初爻";
        break;
        case 2:
            document.getElementById("tekisen").innerText = "二爻";
        break;
        case 3:
            document.getElementById("tekisen").innerText = "三爻";
        break;
        case 4:
            document.getElementById("tekisen").innerText = "四爻";
        break;
        case 5:
            document.getElementById("tekisen").innerText = "五爻";
        break;
        case 6:
            document.getElementById("tekisen").innerText = "上爻";
        break;
        case 7:
            document.getElementById("tekisen").innerText = "結果を表示する";
        break;
        case 8:
            document.getElementById("tekisen").type = "submit";
        break;
    }
}