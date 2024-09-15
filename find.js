function find(){
    const finder = document.getElementById('finder').value;
    const adv = document.getElementById('adv').value;
    const href = finder + adv;
    document.getElementById('output').innerHTML=href;
    location.href=href;
}