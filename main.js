document.querySelector("#regForm").addEventListener('submit', e=> {
    e.preventDefault();
  //  alert("hello");
  let form = document.querySelector("#regForm");
  const data = new URLSearchParams();
  for(const p of new FormData(form)){
    data.append(p[0], p[1]);
  }
  fetch('server.php', {
    method:'POST',
    body: data
  }).then(response => response.text()).then(response => {
    //console.log(response);
    document.querySelector(".messagePopUp").innerHTML = response;

  }).catch(error => console.log(error));
});



fetch('read.php')
.then((response) => response.json())
.then(response => {
    console.log(response)
    let output= '';
    response.forEach(element => {
        output += `<tr>
                  
                  <td>${element.firstname}</td>
                  <td>${element.lastname}</td>
                 </tr>`;
    });
    document.querySelector(".tbody").innerHTML = output;
}).catch(error => console.log(error))