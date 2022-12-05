window.addEventListener('DOMContentLoaded', function() {
    const veilleuse = document.getElementById('simple_veilleuse');
    const gr_elec = document.getElementById('gr_elec');
    const ordi = document.getElementById('ordi');
    const btn = document.getElementById('btn');
    const total = document.getElementById('total');
    const total_cons = document.getElementById('total_cons');
    const total_keb = document.getElementById('total_keb');
    const affiKeb = document.getElementById('affiKeb');
    const btnKeb = document.getElementById('btnKeb');

    veilleuse.value = null;
    gr_elec.value = null;
    ordi.value = null;


 // Verifie si tout les champs sont bien remplis avant d'activer le boutton   
    veilleuse.addEventListener("input", validate);
    gr_elec.addEventListener("input", validate);
    ordi.addEventListener("input", validate); 

        function validate(){
      if(veilleuse.value === "" || gr_elec.value === "" || ordi.value ===""){
        btn.setAttribute("disabled","disabled");
    } else {
        btn.removeAttribute("disabled");
      }
    }

// Si tout les champs sont remplis, alors il effectue le calcul
    btn.addEventListener('click', function(){

        let veilleuseVal=Number(veilleuse.value);
        let gr_elecVal=Number(gr_elec.value);
        let ordiVal=Number(ordi.value);

        let consommation;

        
        consommation = veilleuseVal * 5 + gr_elecVal * 11 + ordiVal * 23;
        let totalVal = (consommation * 365 * 24)/1000
        let total_consVal = totalVal * 0.1740
        total_consVal = Math.round(total_consVal * 100) / 100
        
        let total_kebVal = total_consVal / 5
        total_kebVal = Math.round(total_kebVal)

        total_consVal = total_consVal + " €"
        totalVal = totalVal + " kW/h"
        
        
        total_keb.innerHTML = total_kebVal
        total.innerHTML = totalVal
        total_cons.innerHTML = total_consVal
        
})

//Gère l'affichage des kebabs par simple appuie sur le boutton
    btnKeb.addEventListener('click', function(){
    
    var affKeb = document.getElementById("total_keb").textContent;
    let affKebVal = parseInt(affKeb);
    let affichage = ""
    for (let i=1; i<=affKeb; i++) {
        affichage = affichage + "<a href='https://goo.gl/maps/yv4TvD7kJbofiKas9' target='_blank'><img src='./../assets/images/kebab.gif'></a>";
    }
    console.log(affKebVal)
    
    affiKeb.innerHTML=affichage
    
    })
  });
  
