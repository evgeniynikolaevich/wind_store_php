function calculates_prices(all){
let itogo = document.getElementsByClassName("intogo")[0];
  // price each item
  let sum = 0
  for(let i = 0;i<all.length;i++){
  sum +=parseInt(all[i].childNodes[11].children[1].innerText)
}
  itogo.innerText = sum;
}


function find_quantity_each_elements(all){
  values = []
  for(let i = 0;i<all.length;i++){
  // compare titles
      values.push(all[i].childNodes[3].children[1].innerText);
    }
    counts ={};
    values.forEach(function(x) { counts[x] = (counts[x] || 0)+1; });
    return counts;
}

function update_elements_counters(all,counters){
  for(let i = 0;i<all.length;i++)
  // compare titles

  { if(all[i].childNodes[3].children[1].innerText in counters )
    //prosti menia mama
    all[i].childNodes[9].children[1].children[1].innerText = counters[all[i].childNodes[3].children[1].innerText];
    }
}

function remove_duplicates(all, counters){
  for(let i = 0;i<all.length;i++){
  console.log(counters);
  { if(all[i].childNodes[3].children[1].innerText in counters )
    //prosti menia mama#2
    while(counters[all[i].childNodes[3].children[1].innerText] !== 1)
    {
      console.log('here')
      all[i].remove();
      counters[all[i].childNodes[3].children[1].innerText]-= 1;
    }
}


}
}

function make_cart_clean(){
  let all = document.getElementsByClassName("item-in-cart");
  //procedure...
  calculates_prices(all);
  let quantity = find_quantity_each_elements(all);
  let updated_quantity_elements = update_elements_counters(all, quantity);
  remove_duplicates(all, quantity);



}
make_cart_clean();
