let Add=()=>{
  let values=[];
  values.push(document.getElementById("name").value);
  values.push(document.getElementById("prenom").value);
  values.push(document.getElementById("numeroOrd").value);
  values.push(document.getElementById("arrive").value);
  values.push(document.getElementById("localisation").value);
  values.push(document.getElementById("usage").value);
  values.push(document.getElementById("nature").value);
  values.push(document.getElementById("avis").value);
  let tr=document.createElement("tr");
  let td=document.createElement("td");
  for(let val in values){
    td.innerHTML=values[val]
    tr.appendChild(td);
  }
}

