function getElementById(ids) {
    var idList = ids.split(" ");
    var results = [], item;
    for (var i = 0; i < idList.length; i++) {
        item = document.getElementById(idList[i]);
        if (item) {
            results.push(item);
        }
    }
    return(results);
}
document.getElementById("1","2","3","4","5","6","7","8","9","0","div","-","x","+","%","()").addEventListener("click", () =>{
    document.getElementById("text").value += "click";
 });